<?php

namespace PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
use Rsctd\HugeFraction\Fraction;

class FractionFormatter extends BaseNumberFormatter
{
    /**
     * Precision in approximating the fraction.
     */
    protected const FRACTION_PRECISION = 7;

    /**
     * Detect fraction format.
     */
    protected const PREG_DETECT_FRACTION = '/' . self::PREG_CONDITION_NONQUOTED . '\//u';

    /**
     * Detect digits, placeholders and/or thousand sign.
     */
    protected const PREG_DETECT_DIGITS_THOUSAND = '/' . self::PREG_CONDITION_NONQUOTED . '[0-9,\?#]+/u';

    /**
     * Format a fraction.
     *
     * @param mixed $value The value
     * @param string $format The format string
     *
     * @return string The formatted value
     */
    public static function format($value, string $format): string
    {
        $value_org = $value;

        // Process negative value: set sign
        $format = self::formatNegativeValue($value, $format);
        $value = (float) $value;

        // Split format into parts: integer+numerator and denominator
        $fraction_parts = preg_split(self::PREG_DETECT_FRACTION, $format, 2);
        if ($fraction_parts === false) {
            // Invalid format; process as regular number
            return self::formatValueAsNumber($value_org, $format, $apply_scale = false);
        }

        // Split first format part into format-integer and format-numerator
        // ---------------------------------------------------------------------
        $digits_integer = '';
        $digits_numerator = '?';
        $useThousands = false;
        $thousands_sign = StringHelper::getThousandsSeparator();
        if (preg_match_all(self::PREG_DETECT_DIGITS_THOUSAND, $fraction_parts[0], $matches)) {
            $digits_numerator = array_pop($matches[0]);
            // Treat thousands separator as literal
            $digits_numerator = str_replace(',', '"' . $thousands_sign . '"', $digits_numerator);
            $digits_integer = implode('', $matches[0]);
            // Check thousands on integer part only
            if (stripos($digits_integer, ',') !== false) {
                $useThousands = true;
                $digits_integer = str_replace(',', '', $digits_integer);
            }
        }

        // Split full format integer+numerator
        $format_integer = '';
        $format_numerator = $digits_numerator;
        $find_numerator = strrev($digits_numerator);
        $numerator_parts = preg_split('/' . self::PREG_CONDITION_NONQUOTED . preg_quote($find_numerator, '/') . '/u', strrev($fraction_parts[0]), 2);
        if ($numerator_parts) {
            $format_numerator = strrev($numerator_parts[0] . $find_numerator);
            $format_integer = strrev($numerator_parts[1]);
            if ($useThousands) {
                // Remove the thousands separator
                $format_integer = (string) preg_replace('/' . self::PREG_CONDITION_NONQUOTED . ',/u', '', $format_integer);
            }
        }

        // The part behind #?0 is part of the $format_numerator
        if (preg_match_all('/' . self::PREG_CONDITION_NONQUOTED . '[#?0]+/', $format_integer, $matches, PREG_OFFSET_CAPTURE)) {
            $match_count = count($matches[0]);
            $last_pos = $matches[0][$match_count - 1][1] + strlen($matches[0][$match_count - 1][0]);
            $format_numerator = substr($format_integer, $last_pos) . $format_numerator;
            $format_integer = substr($format_integer, 0, $last_pos);
        } else {
            $format_numerator = $format_integer . $format_numerator;
            $format_integer = '';
        }
        // ---------------------------------------------------------------------

        // Split second format part into format-denominator and format-number
        // ---------------------------------------------------------------------
        $PREG_CONDITION_digits = '/' . self::PREG_CONDITION_NONQUOTED . '[0-9\?#]+/u';
        $digits_denominator = '?';
        $digits_number = '';
        if (preg_match_all($PREG_CONDITION_digits, $fraction_parts[1], $matches)) {
            $digits_denominator = array_shift($matches[0]);
            $digits_number = implode('', $matches[0]);
        }

        // Split full format denominator+number
        $format_denominator = $digits_denominator;
        $format_number = '';
        $denominator_parts = preg_split('/' . self::PREG_CONDITION_NONQUOTED . preg_quote($digits_denominator, '/') . '/u', $fraction_parts[1], 2);
        if ($denominator_parts) {
            $format_denominator = $denominator_parts[0] . $digits_denominator;
            $format_number = $denominator_parts[1];
        }
        // Translate the decimal and thousands separator
        $dec_sign = StringHelper::getDecimalSeparator();
        $format_number = (string) preg_replace('/' . self::PREG_CONDITION_NONQUOTED . '\./u', '"' . $dec_sign . '"', $format_number);
        $format_number = (string) preg_replace('/' . self::PREG_CONDITION_NONQUOTED . ',/u', '"' . $thousands_sign . '"', $format_number);
        // ---------------------------------------------------------------------

        if ($value == 0) {
            $fraction_setup = [0, '', 0];
        } else {
            if (is_numeric($digits_denominator) && ((int) $digits_denominator != 0)) {
                // Process fraction type "??/nnn" e.g. ??/235
                $fraction_setup = self::processNumericDenominator($value, (int) $digits_denominator, ($digits_integer != ''));
                $format_denominator = '0';
            } else {
                // Perform fraction approximation
                $fraction_setup = self::processFractionApproximation($value, strlen($digits_denominator), ($digits_integer != ''));
            }
        }

        // Format segments
        if ($fraction_setup[2] == 0) {
            $format_slash = ' ';
            $format_integer = self::spreadNumber($fraction_setup[0], $format_integer, true, self::FORMAT_ADD_DECIMAL_FALSE, $useThousands, self::FORMAT_ZEROS_SINGLE);
            $format_numerator = str_repeat(' ', strlen($format_numerator) - substr_count($format_numerator, '"'));
            $format_denominator = str_repeat(' ', strlen($format_denominator) - substr_count($format_denominator, '"'));
        } else {
            $format_slash = '/';
            $format_integer = self::spreadNumber($fraction_setup[0], $format_integer, true, self::FORMAT_ADD_DECIMAL_FALSE, $useThousands, self::FORMAT_ZEROS_STRIP_LEFT);
            $format_numerator = self::spreadNumber($fraction_setup[1], $format_numerator, true, self::FORMAT_ADD_DECIMAL_FALSE, false, self::FORMAT_ZEROS_SINGLE);
            $format_denominator = self::spreadNumber($fraction_setup[2], $format_denominator, true, self::FORMAT_ADD_DECIMAL_FALSE, false, self::FORMAT_ZEROS_STRIP_LEFT);
        }
        $format_number = self::spreadNumber('0', $format_number, true, self::FORMAT_ADD_DECIMAL_FALSE, false, self::FORMAT_ZEROS_FILL);

        // Restore fraction layout
        return $format_integer . $format_numerator . $format_slash . $format_denominator . $format_number;
    }

    /**
     * Process fraction type "??/nnn" e.g. ??/235.
     *
     * @param float $value The value
     * @param int $denominator The denominator
     * @param bool $show_integer_part Integer part is visible
     *
     * @return array [integer_part, numerator, denominator]
     */
    protected static function processNumericDenominator($value, $denominator, $show_integer_part)
    {
        // Set denominator
        if ($denominator == 0) {
            $denominator = 10;
        }

        $numerator_multiplied = $value * $denominator;
        $numerator_multiplied = round($numerator_multiplied);

        if (($value == 0) || ($numerator_multiplied == 0)) {
            // 0/3 is a possible outcome...
            return [0, 0, $denominator];
        }

        $numerator = $numerator_multiplied;
        if ($show_integer_part) {
            $integer_part = floor($numerator_multiplied / $denominator);
            $numerator -= ($integer_part * $denominator);
        } else {
            $integer_part = 0;
        }

        return [$integer_part, $numerator, $denominator];
    }

    /**
     * Process fraction type "??/???".
     *
     * @param float $value The value
     * @param int $format_denominator_digits The number of placeholders
     * @param bool $show_integer_part The integer part is visible
     *
     * @return array [integer_part, numerator, denominator]
     */
    protected static function processFractionApproximation($value, $format_denominator_digits, $show_integer_part)
    {
        // Determine the integer part
        $integer_part = floor($value);

        // Set fraction
        $value -= $integer_part;

        if ($value == 0) {
            return [$integer_part, 0, 0];
        }

        $denominator_digits_limit = ($format_denominator_digits > self::FRACTION_PRECISION) ? self::FRACTION_PRECISION : $format_denominator_digits;

        // This may still require some tweaking
        $tolerance = 10 ** (-($denominator_digits_limit + self::FRACTION_PRECISION));

        $numerator = 1;
        $numerator_prev = 0;
        $denominator = 0;
        $denominator_prev = 1;
        $inverse = 1 / $value;

        do {
            $inverse = 1 / $inverse;
            $coefficient = floor($inverse);
            $temp = $numerator;
            $numerator = $coefficient * $numerator + $numerator_prev;
            $numerator_prev = $temp;
            $temp = $denominator;
            $denominator = $coefficient * $denominator + $denominator_prev;
            $denominator_prev = $temp;

            $denominator_digits = floor(log10($denominator) + 1);
            if ($denominator_digits > $denominator_digits_limit) {
                $denominator = $denominator_prev;
                $numerator = $numerator_prev;

                break;
            }

            $inverse -= $coefficient;
        } while (((abs($value - $numerator / $denominator) > $value * $tolerance) || ($denominator_digits < $denominator_digits_limit)) && ($inverse != 0));

        if ($numerator == 0) {
            // 0/1 is a possible outcome...
            return [0, 0, $denominator];
        }
        if (!$show_integer_part) {
            $numerator += $integer_part * $denominator;
            $integer_part = 0;
        }

        return [$integer_part, $numerator, $denominator];
    }
}
