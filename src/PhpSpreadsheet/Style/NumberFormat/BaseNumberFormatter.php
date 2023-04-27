<?php

namespace PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\CurrentLocale;


abstract class BaseNumberFormatter extends BaseFormatter
{
    /**
     * Format zeros
     */
    public const FORMAT_ZEROS_STRIP_LEFT = 'strip-left';
    public const FORMAT_ZEROS_STRIP_RIGHT = 'strip-right';
    public const FORMAT_ZEROS_SINGLE = 'single';
    public const FORMAT_ZEROS_FILL = 'fill';
    public const FORMAT_ZEROS_NOTOUCH = 'notouch';

    /**
     * Format decimal point
     */
    public const FORMAT_ADD_DECIMAL_TRUE = 1;
    public const FORMAT_ADD_DECIMAL_FALSE = 0;
    public const FORMAT_ADD_DECIMAL_OPTIONAL = -1;

    /**
     * Detect multiple digit placeholders
     */
    protected const PREG_DETECT_DIGITPLACEHOLDERS = '/'.self::PREG_CONDITION_NONQUOTED.'[#\?0]+/u';

    
    /**
     * Format a value as number
     *
     * @param mixed $value The value
     * @param string $format The format string
     * @param boolean $apply_scale Apply value scaling by ,,,-formatsuffix
     * @return string The formatted value
     */
    protected static function formatValueAsNumber($value, $format, $apply_scale = true): string
    {
        // Check percentages
        $format = self::formatPercentage($value, $format);

        // Replace all escaped characters into quotes
        $format = self::formatLiteralizeContent($format);

        // Process negative value: set sign
        $format = self::formatNegativeValue($value, $format);

        return self::formatProcessNumber($value, $format, $apply_scale, self::FORMAT_ADD_DECIMAL_TRUE);
    }

    /**
     * Process the format for an integer/decimal value
     *
     * @param mixed $value The value
     * @param string $format The format string
     * @param boolean $apply_scale Apply value scaling by ,,,-formatsuffix
     * @param int $useDecimalPoint Add decimal point
     * @return string The value format (integer, or integer.decimal)
     * The format is still containing quoted text.
     */
    protected static function formatProcessNumber($value, $format, $apply_scale = true, $useDecimalPoint = self::FORMAT_ADD_DECIMAL_OPTIONAL): string
    {
        // Split the text into an integer and decimal part.
        // Treat them separately. The integer part can hold thousands
        $format_segments = preg_split('/'.self::PREG_CONDITION_NONQUOTED.'(?<!\\.)\\./u', $format, 2);
        $format_integer = $format_segments[0];
        $format_decimal = '';
        if (isset($format_segments[1]))
        {
            $format_decimal = $format_segments[1];
        }

        $scale = 1;
        if ($apply_scale)
        {
            // Scale thousands, millions,...
            // This is indicated by a number of commas after the last digit placeholder.
            // Number of commas in decimal part plus the number of commas at the
            // end of the integer part. Example "#," = 1 or "0,.,0,," = 3
            $scale = 0;
            $preg_condition_decimal_scale = '/'.self::PREG_CONDITION_NONQUOTED.'[0-9,\#][\.,]*/u';
            if (preg_match_all($preg_condition_decimal_scale, $format_decimal, $matches))
            {
                $match_count = count($matches[0]);
                $scale += substr_count(end($matches[0]), ',');
                $pos_count = 0;
                $format_decimal = preg_replace_callback($preg_condition_decimal_scale, function($match) use (&$match_count, &$pos_count)
                {
                    $pos_count++;
                    // Strip the scale indicators
                    return ($pos_count == $match_count) ? str_replace(',', '', $match[0]) : $match[0];
                }, $format_decimal);
            }
            $preg_condition_integer_scale = '/'.self::PREG_CONDITION_NONQUOTED.'[0-9,\#][,]*$/u';
            if (preg_match_all($preg_condition_integer_scale, $format_integer, $matches))
            {
                $match_count = count($matches[0]);
                $scale += substr_count(end($matches[0]), ',');
                $pos_count = 0;
                $format_integer = preg_replace_callback($preg_condition_integer_scale, function($match) use (&$match_count, &$pos_count)
                {
                    $pos_count++;
                    // Strip the scale indicators
                    return ($pos_count == $match_count) ? str_replace(',', '', $match[0]) : $match[0];
                }, $format_integer);
            }
            $scale = ($scale == 0) ? 1 : 1000 ** $scale;
        }

        // Find out if we need thousands separator
        // This is indicated by a comma enclosed by a digit placeholder:
        //   '#,#' or '0,0' or a mix
        $useThousands = false;
        $format_integer = preg_replace_callback('/'.self::PREG_CONDITION_NONQUOTED.'[#0\?],[\?#0]?/u', function($matches) use (&$useThousands)
        {
            $useThousands = true;
            // Remove the thousands separator
            return str_replace(',', '', $matches[0]);
        }, $format_integer);

        // Multiple decimal separators will be treated as literals
        $dec_sign = StringHelper::getDecimalSeparator();
        $format_decimal = preg_replace_callback('/'.self::PREG_CONDITION_NONQUOTED.'\.+/u', function($matches) use ($dec_sign) {
            return '"'.str_repeat($dec_sign, strlen(''.$matches[0])).'"';
        }, $format_decimal);

        if (is_string($value))
        {
            // Convert into a rounded float, to keep precision
            $aValue = explode('.', $value);
            $value = floatval($value);
            $value = round($value, (isset($aValue[1]) ? strlen($aValue[1]) : 0));
        }

        // Scale number
        $value = $value / $scale;

        // Apply precision
        $precision = 0;
        if (preg_match_all(self::PREG_DETECT_DIGITPLACEHOLDERS, $format_decimal, $matches))
        {
            $precision = strlen(implode('', $matches[0]));
        }

        $value = self::floatToString($value, $precision, '.');

        // Spread out numbers over the available 0#?
        //   0: Will always be visible, even though not occupied
        //   ?: Will make space for the numbers. When not occupied, it will claim a space. All zeros will be erased.
        //   #: Will be visible when occupied. Otherwise it will be erased.
        //   #: Zeros will be erased when not occupied.
        //   0?#: When the number is larger than the places; the mumber will be completed before the first 0?#.
        $aValue = explode('.', $value);
        $integer_part = $aValue[0];
        $decimal_part = isset($aValue[1]) ? $aValue[1] : '';

        // Add placeholder for integer if missing
        if ((intval($integer_part) > 0) && (!preg_match(self::PREG_DETECT_DIGITPLACEHOLDERS, $format_integer)))
        {
            $format_integer .= '#';
        }

        if (strlen($integer_part) > PHP_FLOAT_DIG)
        {
            // This is not a precise number anymore(!)
            $integer_part = self::compensateIntegerPrecision($integer_part);
        }

        $format_integer = self::spreadNumber($integer_part, $format_integer, true, self::FORMAT_ADD_DECIMAL_FALSE, $useThousands, self::FORMAT_ZEROS_STRIP_LEFT, $scale);
        if ($format_decimal != '')
        {
            if (strlen($decimal_part) > PHP_FLOAT_DIG)
            {
                // This is not a precise number anymore(!)
                $decimal_part = self::compensateDecimalPrecision($decimal_part);
            }
            $format_decimal = self::spreadNumber($decimal_part, $format_decimal, false, $useDecimalPoint, false);
            $format = $format_integer.$format_decimal;
        } else {
            $format = $format_integer;
        }

        return $format;
    }

    /**
     * Spread the value over the format mask
     *
     * @param string $value_part (Part of) the value
     * @param string $format_number The format string
     * @param boolean $boolReverse Reverse the value
     * @param int $useDecimalPoint Add decimal point
     * @param boolean $useThousands Use thousand signs
     * @param string $formatZeros Format zeros: fill, use single '0', strip
     * @param int $scale The scale of the number
     * @return string The format string merged with the value part
     */
    protected static function spreadNumber($value_part, $format_number, $boolReverse = false, $useDecimalPoint = self::FORMAT_ADD_DECIMAL_FALSE, $useThousands = false, $formatZeros = self::FORMAT_ZEROS_STRIP_RIGHT, $scale = 1): string
    {
        $preg_condition_digits = '/'.self::PREG_CONDITION_NONQUOTED.'[0\?#]/u';
        $preg_condition_digits_multiple = '/'.self::PREG_CONDITION_NONQUOTED.'[0\?#]+/u';
        $positions = 0;
        $chunk_count = 0;
        $format_number_digits = '';
        if (preg_match_all($preg_condition_digits_multiple, $format_number, $matches))
        {
            $format_number_digits = implode('', $matches[0]);
            $chunk_count = count($matches[0]);
            $positions = strlen($format_number_digits);
        }

        $value_part = ''.$value_part;
        switch($formatZeros)
        {
            case self::FORMAT_ZEROS_NOTOUCH:
                // Do nothing
                break;
            case self::FORMAT_ZEROS_FILL:
                // Fill entire block with zeros
                $value_part = str_pad($value_part, $positions, '0');
                break;
            case self::FORMAT_ZEROS_SINGLE:
                // Use a single zero
                $value_part = preg_replace('/[0]+$/u', '0', $value_part);
                break;
            case self::FORMAT_ZEROS_STRIP_LEFT:
                // Strip the zeros on the left side
                $value_part = ltrim($value_part, '0');
                break;
            case self::FORMAT_ZEROS_STRIP_RIGHT:
            default:
                // Strip the zeros on the right side
                $value_part = rtrim($value_part, '0');
                break;
        }

        if ($boolReverse)
        {
            // Reverse value and format
            $value_part = strrev($value_part);
            $format_number = self::mb_strrev($format_number);
        }

        $thousands_pattern = $useThousands ? CurrentLocale::getThousandsFormatPattern() : false;
        switch($thousands_pattern)
        {
            case FormatLocale::THOUSANDS_FORMAT_REGULAR:
                // Number with thousands sign
                // Follow pattern '###,###,###,###,###'

                // Position thousand separator after every 3 digits
                $format_number = self::applyThousandsNumberFormatRegular($format_number, $value_part, 3, $chunk_count);
                break;
            
            case FormatLocale::THOUSANDS_FORMAT_HECTO:
                // Follow pattern '##,##,##,##,##,##,###' (if scale <> 1000)
                // Follow pattern '##,##,##,##,##,##,##' (if scale == 1000)

                // Position thousand separator after every cluster of digits
                $format_number = self::applyThousandsNumberFormatHecto($format_number, $value_part, 2, ($scale !== 1000), $chunk_count);
                break;

            case FormatLocale::THOUSANDS_FORMAT_NONE:
            default:
                // Spread digits without thousand sign
                $format_number = self::applyThousandsNumberFormatNone($format_number, $value_part, $chunk_count);
                break;
        }

        $digits_visible = true;
        if ($useDecimalPoint == self::FORMAT_ADD_DECIMAL_OPTIONAL)
        {
            // Visible numbers
            $digits_visible = (strlen($value_part) > 0) || (stripos($format_number_digits, '0', strlen($value_part)) !== false);
        }
        
        if (
            ($useDecimalPoint == self::FORMAT_ADD_DECIMAL_TRUE) ||
            ($digits_visible && ($useDecimalPoint == self::FORMAT_ADD_DECIMAL_OPTIONAL))
            )
        {
            $dec_sign = StringHelper::getDecimalSeparator();
            $format_number = $dec_sign.$format_number;
        }

        if ($boolReverse)
        {
            $format_number = self::mb_strrev($format_number);
        }

        return $format_number;
    }

    /**
     * Process percentages: apply scaling on multiple % signs
     *
     * @param string $value The value
     * @param string $format The format string
     * @return string The altered format
     */
    protected static function formatPercentage(&$value, $format): string
    {
        if (preg_match_all('/'.self::PREG_CONDITION_NONQUOTED.'[%]+/u', $format, $matches))
        {
            // Use of percentages; apply scaling
            $scale = strlen(implode('', $matches[0]));
            $value = $value*(100**$scale);

            // Percentage signs will be treated as literals
            $format = preg_replace('/'.self::PREG_CONDITION_NONQUOTED.'[%]+/u', '"$0"', $format);
        }

        return $format;
    }

    /**
     * All text in the format string that is not numeric, '?' or '#' will be
     * encapsulated by double quotes.
     *
     * @param string $format The raw format
     * @return string The altered format
     */
    protected static function formatLiteralizeContent($format): string
    {
        // Replace all escaped characters into quotes
        $format = preg_replace_callback('/'.self::PREG_CONDITION_NONQUOTED.'[^"#,\.0-9\?]+/u', function($matches)
        {
            // Unescape text
            $matches[0] = preg_replace_callback('/\\\\[^"]/u', function($match){
                return ($match[0] == '\\\\') ? $match[0] : substr($match[0], 1);
            }, $matches[0]);

            // Surround the matched substring with double quotes
            return '"'.$matches[0].'"';
        }, $format);

        return $format;
    }

    /**
     * Large integer numbers become unreliable due to the floating point value storage
     *
     * More than PHP_FLOAT_DIG (= 15) digits will be rounded/truncated to 0.
     * Example: 1234567890123456789 becomes 1234567890123450000
     * This behaviour is similar to Excel
     *
     * @param string $integer_string The large integer value
     * @return string Sanitized integer value
     */
    protected static function compensateIntegerPrecision($integer_string): string
    {
        $float = floatval(substr($integer_string, 0, PHP_FLOAT_DIG).'.'.substr($integer_string, PHP_FLOAT_DIG));
        return str_pad(number_format(round($float), 0, '', ''), strlen($integer_string), '0');
    }

    /**
     * Large decimal numbers become unreliable due to the floating point value storage
     *
     * More than PHP_FLOAT_DIG (= 15) digits will be rounded/truncated to 0.
     * Example: .1234567890123456789 becomes .123456789012345
     * This behaviour is similar to Excel
     *
     * @param string $decimal_string The large decimal value
     * @return string Sanitized decimal value
     */
    protected static function compensateDecimalPrecision($decimal_string): string
    {
        preg_match('/^(?<zeros>0*)(?<number>[0-9]+)$/', $decimal_string, $matches);
        return $matches['zeros'].substr($matches['number'], 0, PHP_FLOAT_DIG);
    }

    /**
     * Convert a float into string
     *
     * It appears to be the most straight forward method to convert a float into
     * string, without losing too much precision.
     *
     * @param float $value The float value
     * @param int $precision The number of digits behind the decimal point. Negative will use php_ini `precision` setting.
     * @param string $decimal_sign The decimal sign
     * @return string The string representation of the floating point number
     */
    protected static function floatToString($value, $precision = -1, $decimal_sign = '.'): string
    {
        if ($precision < 0)
        {
            $precision = ini_get('precision', PHP_FLOAT_DIG);
        }
        return number_format($value, $precision, $decimal_sign, '');
    }

    /**
     * Process a negative value: add the negative sign to the format string
     *
     * @param mixed $value The value
     * @param string $format The format string
     * @return string The altered format
     */
    public static function formatNegativeValue(&$value, $format): string
    {
        if (is_string($value))
        {
            if (substr($value, 0, 1) == '-')
            {
                $format = '"-"'.$format;
                $value = substr($value, 1);
            }
        } else {
            if ($value < 0)
            {
                $format = '"-"'.$format;
                $value = abs($value);
            }
        }

        return $format;
    }

    /**
     * Perform a multi-byte string reverse
     *
     * @param string $string The raw string
     * @return string The reversed string, with respect to multibyte
     * unicode characters.
     */
    protected static function mb_strrev($string)
    {
        preg_match_all('/./us', $string, $match);
        return join('', array_reverse($match[0]));
    }
   
    /**
     * Process placeholder replacement
     * 
     * @param string $char
     * @param boolean $thousand_pos The character is positioned right after a 
     * thousand sign
     * @param string $thousands_sign The thousands sign
     * @return string The replacement string
     */
    protected static function processPlaceholder($char, $thousand_pos, $thousands_sign = '')
    {
        // Process '#' (clear)
        if ($char == '#')
        {
            return '';
        }
        
        // Process '?' (add extra space)
        if ($char == '?')
        {
            return ($thousand_pos ? '  ' : ' ');
        }
        
        // Process '0' (add thousand sign)
        return ($thousand_pos ? $thousands_sign : '').$char;
    }
    
    /**
     * Spread digits without thousand sign
     * 
     * @param string $format_number The number format string
     * @param string $value_part The value (or part of it) to be spread
     * @param int $chunk_count The number of iterations (chunks of digit 
     * placeholders)
     * @return string The altered number format
     */
    protected static function applyThousandsNumberFormatNone($format_number, $value_part, $chunk_count)
    {
        // Number without thousands sign
        $iterations = 0;
        $format_number = preg_replace_callback(self::PREG_DETECT_DIGITPLACEHOLDERS, function($match) use (&$value_part, &$iterations, $chunk_count)
        {
            $iterations++;
            $value_part_len = strlen($value_part);
            $match_length = strlen($match[0]);
            
            if ($value_part_len > 0)
            {
                $strReplace = substr($value_part, 0, $match_length);
                $value_part = substr($value_part, $match_length);
                $match[0] = ($match_length > $value_part_len) ? substr($match[0], $value_part_len) : '';
                $match_length = strlen($match[0]);
                $value_part_len = strlen($value_part);
            } else {
                $strReplace = '';
            }

            if (($iterations == $chunk_count) && ($value_part_len > 0))
            {
                // Return remaining digits
                $strReplace .= $value_part;
                $value_part = '';
                return $strReplace;
            }

            if ($match_length > 0)
            {
                // All digits are claimed. Now return zero, space or ''.
                $strReplace .= preg_replace(array('/\?/', '/#/'),array(' ', ''), $match[0]);
            }
            return $strReplace;

        }, $format_number);

        return $format_number;
    }

    
    /**
     * Spread number with thousands sign, every three digits
     * 
     * Follow pattern '###,###,###,###,###'
     * 
     * @param string $format_number The number format string
     * @param string $value_part The value (or part of it) to be spread
     * @param int $cluster_size The cluster size (e.g. 3)
     * @param int $chunk_count The number of iterations (chunks of digit 
     * placeholders)
     * @return string The altered number format
     */
    protected static function applyThousandsNumberFormatRegular($format_number, $value_part, $cluster_size, $chunk_count)
    {
        $pos_count = 0;
        $iterations = 0;
        $thousands_sign = StringHelper::getThousandsSeparator();
        $format_number = preg_replace_callback(self::PREG_DETECT_DIGITPLACEHOLDERS, function($match) use (&$pos_count, &$value_part, $thousands_sign, &$cluster_size, $chunk_count, &$iterations)
        {
            $iterations++;
            $strReplace = '';

            // Use clusters of 2 placeholders
            foreach(str_split($match[0]) as $char)
            {
                $pos_count++;
                $thousand_pos = ($pos_count > 1) && ($pos_count % $cluster_size == 1);

                if (strlen($value_part) > 0)
                {
                    $char = substr($value_part, 0, 1);
                    $value_part = substr($value_part, 1);
                }
                $strReplace .= self::processPlaceholder($char, $thousand_pos, $thousands_sign);
            }

            if (($iterations == $chunk_count) && (strlen($value_part) > 0))
            {
                // Last step; add all remaining value content
                foreach(str_split($value_part) as $char)
                {
                    $pos_count++;
                    $thousand_pos = ($pos_count > 1) && ($pos_count % $cluster_size == 1);
                    $strReplace .= ($thousand_pos ? $thousands_sign : '').$char;
                }
            }

            return $strReplace;

        }, $format_number);
        
        return $format_number;
    }
    
    /**
     * Spread number with thousands sign, after every cluster of digits
     * 
     * Follow pattern '##,##,##,##,##,##,###' (if scale <> 1000)
     * Follow pattern '##,##,##,##,##,##,##' (if scale == 1000)
     * 
     * @param string $format_number The number format string
     * @param string $value_part The value (or part of it) to be spread
     * @param int $cluster_size The cluster size (e.g. 3)
     * @param int $chunk_count The number of iterations (chunks of digit 
     * placeholders)
     * @return string The altered number format
     */
    protected static function applyThousandsNumberFormatHecto($format_number, $value_part, $cluster_size, $offset_start, $chunk_count)
    {
        $pos_count = 0;
        $iterations = 0;
        $thousands_sign = StringHelper::getThousandsSeparator();
        $cluster_offset = $offset_start ? $cluster_size+1 : 0;
        $format_number = preg_replace_callback(self::PREG_DETECT_DIGITPLACEHOLDERS, function($match) use (&$pos_count, &$value_part, $thousands_sign, &$cluster_size, $cluster_offset, &$offset_start, $chunk_count, &$iterations)
        {
            $iterations++;
            $strReplace = '';
            if ($offset_start)
            {
                // Process the first '###' part that deviates from the following
                // pattern '##,##,##'
                if (strlen($value_part) > 0)
                {
                    // Return single digit
                    $char = substr($value_part, 0, 1);
                    $value_part = substr($value_part, 1);
                    $strReplace .= $char;
                } else {
                    $char = substr($match[0], 0, 1);
                    $strReplace .= self::processPlaceholder($char, false);
                }
                $match[0] = substr($match[0], 1);

                // First position
                $pos_count = 1;
                $offset_start = false;

                if (strlen($match[0]) == 0)
                {
                    return $strReplace;
                }
            }

            // Use clusters of 2 placeholders
            foreach(str_split($match[0]) as $char)
            {
                $pos_count++;
                $thousand_pos = ($pos_count > 1) && (($pos_count-$cluster_offset) % $cluster_size == 1);

                if (strlen($value_part) > 0)
                {
                    $char = substr($value_part, 0, 1);
                    $value_part = substr($value_part, 1);
                }
                $strReplace .= self::processPlaceholder($char, $thousand_pos, $thousands_sign);
            }

            if (($iterations == $chunk_count) && (strlen($value_part) > 0))
            {
                // Last step; add all remaining value content
                foreach(str_split($value_part) as $char)
                {
                    $pos_count++;
                    $thousand_pos = ($pos_count > 1) && (($pos_count-$cluster_offset) % $cluster_size == 1);
                    $strReplace .= ($thousand_pos ? $thousands_sign : '').$char;
                }
            }

            return $strReplace;

        }, $format_number);
        
        return $format_number;
    }
}
