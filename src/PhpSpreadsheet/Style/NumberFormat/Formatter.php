<?php

namespace PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use PhpOffice\PhpSpreadsheet\Locale\CurrentLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class Formatter extends BaseFormatter
{
    /**
     * Multiplication tag to bypass format processing.
     */
    protected const MULTIPLICATION_TAG = '[@MP]';

    /**
     * Detect multiplication tag.
     */
    protected const PREG_DETECT_MULTIPLICATION_TAG = '/\"\[@MP\](?<repeat_char>(.|\\\\"))\[@MP\]\"/u';

    /**
     * Split format on multiplication tag.
     */
    protected const PREG_SPLIT_MULTIPLICATION_TAG = '/\"\[@MP\](.|\\\\")\[@MP\]\"/u';

    /**
     * Multiplication detection e.g. "*=" or "****".
     */
    public const PREG_DETECT_MULTIPLICATION = '/' . self::PREG_CONDITION_NONQUOTED . '\*{2,}|\*[^\*]/u';

    /**
     * Detect date/time format.
     */
    protected const PREG_DETECT_DATETIME_FORMAT = '/' . self::PREG_CONDITION_NONQUOTED . '((\[[hms][hms]?\]\:?)|[hmsdy])/miu';

    /**
     * @var int the estimate maximum number of characters in a value (used
     *              for padding with multiplication string
     */
    protected static $valueCellWidth = 34;

    /**
     * @var bool Replace the digits for the locale representation
     */
    protected static $replaceDigitsByLocale = true;

    /**
     * Set estimate maximum number of characters in a value.
     *
     * This value will be used as reference to calculate the padding in a
     * multiplication string (e.g. "*=" becomes "===========")
     *
     * @param int $valueCellWidth The number of characters
     */
    public static function setValueWidth($valueCellWidth): void
    {
        self::$valueCellWidth = (int) $valueCellWidth;
    }

    /**
     * Set the replacement of digits by the by locale number representation.
     *
     * @param bool $replaceDigitsByLocale Replace digits
     */
    public static function setReplaceDigitsByLocale($replaceDigitsByLocale): void
    {
        self::$replaceDigitsByLocale = (bool) $replaceDigitsByLocale;
    }

    /**
     * Convert a value in a pre-defined format to a PHP string.
     *
     * @param mixed $value Value to format
     * @param string $format Format code, see = NumberFormat::FORMAT_*
     * @param array $callBack Callback function for additional formatting of
     * string
     *
     * @return string Formatted string
     */
    public static function toFormattedString($value, $format, $callBack = null)
    {
        // Prevent processing null value
        $value = null === $value ? '' : $value;

        // Extract locale configuration (LCID code, DbNum#, NatNum# settings)
        $aLocaleConfig = CurrentLocale::getLocaleConfiguration($format);
        $format = $aLocaleConfig['format'];

        // Make sure format has double quotes in two-fold; convert
        // multiplication of double quotes in a workaround using chr(0x00)
        $format = preg_replace('/' . self::PREG_CONDITION_NONQUOTED . '\*"/', '*' . chr(0x00), $format);
        if (substr_count($format, '"') % 2 != 0) {
            // Actually a format error
            $format .= '"';
        }

        // Split the format for conditional formatting
        [$value, $format, $colors, $isText] = self::splitFormat($value, $format);

        // For 'General' format code, numbers are rounded like Excel
        $format = self::processGeneralTextFormat($value, $format, $aLocaleConfig, 7, true);

        // Convert escaped characters to quoted strings, e.g. (\T to "T")
        $format = preg_replace('/' . self::PREG_CONDITION_NONQUOTED . '(\\\(.))/', '"${2}"', $format);

        // Replace underscores by spaces
        $format = self::formatProcessUnderscores($format);

        // Check for multiplication
        $hasMultiplication = self::formatDetectMultiplication($format);

        // Let's begin inspecting the format and converting the value to a
        // formatted string
        if ($isText || !preg_match('/' . self::PREG_CONDITION_NONQUOTED . '.+/', $format)) {
            $value = $format;
        } else {
            // Check for date/time characters (not inside quotes)
            // Example: '[h]:mm:ss;@'
            if (preg_match(self::PREG_DETECT_DATETIME_FORMAT, $format, $matches)) {
                // Date/time format
                $value = DateFormatter::format($value, $format, $aLocaleConfig);
            } else {
                $value = NumberFormatter::format($value, $format);
            }
        }

        // Consolidate the (literalised) content
        if ($hasMultiplication) {
            $value = self::formatApplyMultiplication($value);
        } else {
            // Place the content outside of double quotes
            $value = self::unescapeText($value);
        }

        // Additional formatting provided by callback function
        if (is_callable($callBack)) {
            $value = call_user_func_array($callBack, [$value, $colors]);
        }

        if (self::$replaceDigitsByLocale) {
            // Replace the digits by the locale number representation
            $value = self::replaceDigits($value, $aLocaleConfig);

            // Perform natnum transliteration if applicable
            $value = CurrentLocale::performTransliteration($value, $aLocaleConfig);
        }

        return $value;
    }

    /**
     * Check if format is 'General' or '@'; specific number formats apply.
     *
     * @param float $value The value
     * @param string $format The format string
     * @param array $aLocaleConfig Locale format configuration
     * @param int $precision The number of decimal digits
     * @param bool $allowScientific Allow scientific representation
     *
     * @return string The altered format
     */
    protected static function processGeneralTextFormat($value, $format, $aLocaleConfig, $precision, $allowScientific = true): string
    {
        // For 'General' format code, we round numbers like Excel
        if (
            ($format !== NumberFormat::FORMAT_GENERAL) &&
            !preg_match('/' . self::PREG_CONDITION_NONQUOTED . NumberFormat::FORMAT_TEXT . '/u', $format)
        ) {
            return $format;
        }

        if (is_string($value)) {
            // Literal value, not to be formatted
            // Use chr(0x00) as stand-in for double quotes
            return '"' . str_replace('"', chr(0x00), $value) . '"';
        }

        if (!is_numeric($value)) {
            return $format;
        }

        if ($value == 0) {
            return '0';
        }

        $exponent = log10($value);
        if (is_nan($exponent) || (abs($exponent) > $precision)) {
            if ($allowScientific) {
                // Apply scientific representation
                $format = '0.#####E+00';
            } else {
                // Digits only
                $format = '0';
                if ($exponent < 0) {
                    $format = '0.' . str_repeat('#', abs($exponent));
                }
            }
        } else {
            if (is_int($value) || ($precision < 1)) {
                $format = '0';
            } else {
                $format = '0.0' . str_repeat('#', $precision - 2);
            }
        }

        $format = CurrentLocale::translateFormatString($format, $aLocaleConfig);

        return $format;
    }

    /**
     * The relevant format section is extracted, depending on the section
     * layout / logical condition.
     *
     * In Excel the sections comply with the following layout:
     *   1 section:   [POSITIVE/NEGATIVE/ZERO/TEXT]
     *   2 sections:  [POSITIVE/ZERO/TEXT];[NEGATIVE]
     *   3 sections:  [POSITIVE/TEXT];[NEGATIVE];[ZERO]
     *   4 sections:  [POSITIVE];[NEGATIVE];[ZERO];[TEXT]
     *
     * @staticvar string $preg_detect_named_colors
     *
     * @param mixed $value The value
     * @param string $format The format string
     *
     * @return array List of [value, format, color, isText]
     */
    protected static function splitFormat($value, $format)
    {
        // Set regular expression conditions
        static $preg_detect_named_colors;
        if (!isset($preg_detect_named_colors)) {
            $preg_detect_named_colors = '/' . self::PREG_CONDITION_NONQUOTED . '\\[(' . implode('|', Color::NAMED_COLORS) . ')\\]/mui';
        }
        $preg_detect_conditions = '/' . self::PREG_CONDITION_NONQUOTED . '\[(>|>=|<|<=|=|<>)([+-]?\d+([.]\d+)?)\]/';

        // Get the sections, there can be up to four sections, separated with
        // a semi-colon (but only if not a quoted literal)
        $sections = preg_split('/' . self::PREG_CONDITION_NONQUOTED . ';/u', $format, 4);

        // Detect colors, operands and values
        $condition_values = [0, 0, 0];
        $condition_operands = ['', '', ''];
        $condition_operands_default = ['>', '<', '='];
        $colors = ['', '', '', ''];

        $isText = false;
        $section_choice = false;
        $section_count = count($sections);
        foreach ($sections as $pos => &$section) {
            if (preg_match($preg_detect_named_colors, $section, $matches)) {
                $colors[$pos] = $matches[0];
                $section = preg_replace($preg_detect_named_colors, '', $section);
            }
            if (preg_match($preg_detect_conditions, $section, $matches)) {
                $condition_operands[$pos] = $matches[1];
                $condition_values[$pos] = $matches[2];
                $section = preg_replace($preg_detect_conditions, '', $section);
            }

            if ($section_count == 4) {
                if ($section_choice !== false) {
                    // Handle all the sections
                    continue;
                }
                if (!is_numeric($value)) {
                    // Return [TEXT]
                    $section_choice = 3;
                    $isText = true;
                    // Text section does not have condition/color.
                    // If present, clear them from the format string
                    continue;
                }
                if ($pos > 1) {
                    // Return [ZERO]
                    $section_choice = 2;

                    break;
                }
            }

            // Make the value comparison
            if (self::splitFormatCompare($value, $condition_operands[$pos], $condition_values[$pos], $condition_operands_default[$pos])) {
                $section_choice = $pos;

                break;
            }
        }

        if ($section_choice === false) {
            // Default: [POSITIVE]
            $section_choice = 0;
        }
        if ($section_choice == 1) {
            // [NEGATIVE] produces a positive value
            $value = abs($value);
        }

        return [$value, $sections[$section_choice], $colors[$section_choice], $isText];
    }

    /**
     * Apply the split format values/conditions comparison.
     *
     * @param float $value The value
     * @param string $condition The logical condition
     * @param float $compare_value The value to compare with
     * @param string $default_condition The default condition, in case no condition is provided
     *
     * @return bool The comparison result
     */
    protected static function splitFormatCompare($value, $condition, $compare_value, $default_condition)
    {
        if (!$condition) {
            // Use defaults
            $condition = $default_condition;
            $compare_value = 0;
        }

        switch ($condition) {
            case '<':
                return $value < $compare_value;

            case '<=':
                return $value <= $compare_value;

            case '>':
                return $value > $compare_value;

            case '>=':
                return $value >= $compare_value;

            case '<>':
                return $value != $compare_value;

            case '=':
                return $value == $compare_value;

            default:
                return true;
        }
    }

    /**
     * Convert underscores into spaces.
     *
     * In Excel formats, "_" is used to add spacing. The following character
     * indicates the size(?) of the spacing, which we can't do in HTML, so we
     * just use a standard space
     *
     * @param string $format The format string
     *
     * @return string The altered format (spaces are encapsulated by double quotes)
     */
    protected static function formatProcessUnderscores($format)
    {
        $format = preg_replace_callback('/' . self::PREG_CONDITION_NONQUOTED . '\_+.?/u', function ($match) {
            $length = strlen($match[0]);
            $char = substr($match[0], -1);
            if ($char != '_') {
                --$length;
            } else {
                $char = '';
            }
            if ($length % 2 == 0) {
                $length = $length / 2;
            } else {
                $length = (($length - 1) / 2) + 1;
                $char = '';
            }

            return '"' . str_repeat(' ', $length) . '"' . $char;
        }, $format);

        return $format;
    }

    /**
     * Check for multiplication: add [@MP] tags.
     *
     * @param string $format The format string
     *
     * @return bool True if multiplication is found
     */
    protected static function formatDetectMultiplication(&$format): bool
    {
        if (preg_match_all(self::PREG_DETECT_MULTIPLICATION, $format, $matches)) {
            // Only the last occurance of `/\*\*/` or `/\*./` in the format.
            $match_count = count($matches[0]);
            $pos_count = 0;
            $format = preg_replace_callback(self::PREG_DETECT_MULTIPLICATION, function ($match) use (&$match_count, &$pos_count, &$format) {
                ++$pos_count;
                if ($pos_count < $match_count) {
                    return $match[0];
                }
                // Place a multiplication indicator
                $char = substr($match[0], 1, 1);

                return '"' . self::MULTIPLICATION_TAG . $char . self::MULTIPLICATION_TAG . '"';
            }, $format);

            return true;
        }

        return false;
    }

    /**
     * Apply the multiplication format. Besides all quoted text will be unquoted.
     *
     * Multiplication is triggered by '*' followed by the character to repeat.
     * Examples:
     *      "*=" -> "=======...
     *      "*s" -> "sssssss...
     *      "***" -> "*******...
     * ...) repetition until total content with reaches $valueCellWidth
     *
     * @param string $format Format
     *
     * @return string The final content
     */
    protected static function formatApplyMultiplication($format)
    {
        // Detect multiplication indicator
        if (!preg_match(self::PREG_DETECT_MULTIPLICATION_TAG, $format, $match)) {
            return self::unescapeText($format);
        }

        // Retrieve text segments
        $segments = preg_split(self::PREG_SPLIT_MULTIPLICATION_TAG, $format, 2);
        $segments_final = [
            0 => self::unescapeText($segments[0]),
            1 => self::unescapeText($segments[1]),
        ];
        $length = strlen(implode('', $segments_final));
        $pad_lenth = (self::$valueCellWidth > $length) ? self::$valueCellWidth - $length : 2;
        if ($match['repeat_char'] == chr(0x00)) {
            $match['repeat_char'] = '"';
        }
        $padding = str_repeat($match['repeat_char'], $pad_lenth);

        return $segments_final[0] . $padding . $segments_final[1];
    }

    /**
     * Get content outside of double quotes.
     *
     * Example: 'This is "a test" 123' becomes 'This is a test 123'
     *
     * @param string $string The string containing double-quoted text
     *
     * @return string The unquoted text
     */
    protected static function unescapeText($string)
    {
        $result = preg_replace_callback('/' . self::PREG_CONDITION_QUOTED . '/u', function ($matches) {
            return substr($matches[0], 1, -1);
        }, $string);

        $result = str_replace(chr(0x00), '"', $result);

        return $result;
    }

    /**
     * Replace the digits in a string by the locale number representation.
     *
     * @param string $string The raw string
     * @param array $aLocaleConfig Locale format configuration
     *
     * @return string The converted string
     */
    protected static function replaceDigits($string, $aLocaleConfig)
    {
        if (($aLocaleConfig['numerals'] == LocaleLayout::NUMERALS_DEFAULT) || ($aLocaleConfig['numerals'] == LocaleLayout::NUMERALS_ARABIC)) {
            return $string;
        }

        $digits = LocaleLayout::getDigits($aLocaleConfig['numerals']);

        $string = preg_replace_callback('/[0-9]/', function ($matches) use ($digits) {
            return $digits[(int) ($matches[0])];
        }, $string);

        return $string;
    }
}
