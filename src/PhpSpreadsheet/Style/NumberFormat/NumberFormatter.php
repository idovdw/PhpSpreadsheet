<?php

namespace PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;


class NumberFormatter extends BaseNumberFormatter
{
    /**
     * Fraction detection
     */
    protected const PREG_DETECT_FRACTIONS = '/'.self::PREG_CONDITION_NONQUOTED.'[\?\/#0-9]+/u';

    /**
     * Scientific number detection
     */
    protected const PREG_DETECT_SCIENTIFIC = '/'.self::PREG_CONDITION_NONQUOTED.'((?<!\\\\)E([+]|[\-](?!\-)))/iu';


    /**
     * Format a value according to the format string
     *
     * @param mixed $value The value
     * $param string $format The format string
     * @return The formatted value
     */
    public static function format($value, string $format): string
    {
        if (!is_numeric($value)) 
        {
            return $value;
        }
        
        $dec_sign = StringHelper::getDecimalSeparator();
        if ($format == NumberFormat::FORMAT_GENERAL)
        {
            // Return number, straightforward
            $precision = 20;
            $value = self::floatToString($value, $precision, $dec_sign);
            $value = rtrim($value, '0');
            $value = rtrim($value, $dec_sign);
            return $value;
        }

        // Convert currency marker for actual currency code
        if (preg_match('/'.self::PREG_CONDITION_NONQUOTED.'\[\$([^\-]*)\]/u', $format, $match))
        {
            // Currency or Accounting
            $current_currency = StringHelper::getCurrencyCode();
            $format = preg_replace_callback('/'.self::PREG_CONDITION_NONQUOTED.'\[\$([^\]]*)\]/u', function($match) use ($current_currency)
            {
                [$currencyCode] = explode('-', $match[1]);
                // Currency codes will be treated like literals
                return ($currencyCode == '') ? '"'.$current_currency.'"' : '"'.$currencyCode.'"';
            }, $format);
        }

        // Remove locale codes [$-###]
        $format = preg_replace('/'.self::PREG_CONDITION_NONQUOTED.'\[\$\-.*\]/u', '', $format);

        // Check fractions
        if (preg_match_all(self::PREG_DETECT_FRACTIONS, $format, $matches))
        {
            if (preg_match('/[0-9\?#]\/[0-9\?#]/u', implode($matches[0])))
            {
                // Split into 2 parts
                // number part: no decimal and thousand separators allowed
                // decimal sign behind ?#0 to be removed. Otherwise treated as literals
                return (string)FractionFormatter::format($value, $format);
            }
        }

        // Check scientific
        if (preg_match(self::PREG_DETECT_SCIENTIFIC, $format, $matches))
        {
            $sign = preg_replace('/[^+\-]/u', '', $matches[0]);
            $format_segments = preg_split(self::PREG_DETECT_SCIENTIFIC, $format, 2);
            return self::formatScientific($value,  $format_segments[0], $sign, $format_segments[1]);
        }

        return self::formatValueAsNumber($value, $format, true);
    }

    /**
     * Format to a scientific value
     *
     * @param string $value The value
     * @param string $format_number The format string for the number part
     * @param string $format_sign The sign part
     * @param string $format_power The format string for the power part
     * @return string The formatted value
     */
    protected static function formatScientific($value, $format_number, $format_sign, $format_power)
    {
        if (!preg_match('/'.self::PREG_CONDITION_NONQUOTED.'^[#\?0]/u', $format_power, $m))
        {
            // If format_power does not start with '#?0', then force display of power
            $format_power = '#'.$format_power;
        }

        // Replace all escaped characters into quotes
        $format_number = self::formatLiteralizeContent($format_number);
        $format_power = self::formatLiteralizeContent($format_power);

        // Determine the format segments
        $format_segments = preg_split('/'.self::PREG_CONDITION_NONQUOTED.'(?<!\\.)\\./u', $format_number, 2);
        $format_segments = array(
            'integer' => $format_segments[0],
            'decimal' => isset($format_segments[1]) ? '.'.$format_segments[1] : '',
        );
        $format_segments['power'] = $format_power;

        $placeholders_implicit = 0;
        if (preg_match_all(self::PREG_DETECT_DIGITPLACEHOLDERS, $format_segments['integer'], $matches))
        {
            $placeholders_implicit = strlen(implode('', $matches[0]));
        }

        // Process negative value: set sign
        $format_number = self::formatNegativeValue($value, $format_number);

        // Extract the scientific number specification
        preg_match('/(?<integer>[0-9\-]+)[\.]?(?<decimal>[0-9]*)[E](?<sign>[+-])(?<power>[0-9]+)/iu', sprintf('%.16E', $value), $aScientific);

        $power = intval($aScientific['power']);
        if ($placeholders_implicit <= 1)
        {
            $placeholders = $placeholders_implicit;
        } else {
            // Calculate the new power
            if ($aScientific['sign'] == '-')
            {
                $power_new = (floor($power / $placeholders_implicit) + (($power % $placeholders_implicit) == 0 ? 0 : 1)) * $placeholders_implicit;
                $placeholders = ($power_new - $power) + 1;
            } else {
                $power_new = floor($power / $placeholders_implicit) * $placeholders_implicit;
                $placeholders = $power + 1 - $power_new;
            }
        }

        $displacement = $placeholders - 1;
        if ($displacement == 0)
        {
            // Do not change value
            $aScientific['value'] = $aScientific['integer'].'.'.$aScientific['decimal'];
        } else {
            // Adjust value
            if ($displacement < 0)
            {
                $aScientific['value'] = '0.'.$aScientific['integer'].$aScientific['decimal'];
            } else {
                $aScientific['value'] = $aScientific['integer'].substr($aScientific['decimal'], 0, $displacement);
                if ($displacement > strlen($aScientific['decimal']))
                {
                    $aScientific['value'] .= str_repeat('0', $displacement - strlen($aScientific['decimal']));
                }
                $aScientific['value'] .= '.'.substr($aScientific['decimal'], $displacement);
            }

            // Adjust power
            $aScientific['power'] = $power + (($aScientific['sign'] == '-') ? $displacement : -$displacement);
        }

        // Format segments
        $segment_number = self::formatProcessNumber($aScientific['value'], $format_number, $apply_scale = false, self::FORMAT_ADD_DECIMAL_OPTIONAL);
        $segment_power = self::formatProcessNumber($aScientific['power'], $format_power, $apply_scale = false, self::FORMAT_ADD_DECIMAL_OPTIONAL);

        $segment_sign = $aScientific['sign'];
        if (($format_sign == '-') && ($aScientific['sign'] == '+'))
        {
            // Hide '+' when power is positive
            $segment_sign = '';
        }

        // Restore scientific layout
        return $segment_number.'E'.$segment_sign.$segment_power;
    }
    
    /**
     * @deprecated Function no longer used. Loss of precision.
     */
    public static function f2s(float $f): string
    {
        return self::floatStringConvertScientific((string) $f);
    }

    /**
     * @deprecated Function no longer used. Loss of precision.
     */
    public static function floatStringConvertScientific(string $s): string
    {
        // convert only normalized form of scientific notation:
        //  optional sign, single digit 1-9,
        //    decimal point and digits (allowed to be omitted),
        //    E (e permitted), optional sign, one or more digits
        if (preg_match('/^([+-])?([1-9])([.]([0-9]+))?[eE]([+-]?[0-9]+)$/u', $s, $matches) === 1)
        {
            $exponent = (int) $matches[5];
            $sign = ($matches[1] === '-') ? '-' : '';
            if ($exponent >= 0)
            {
                $exponentPlus1 = $exponent + 1;
                $out = $matches[2].$matches[4];
                $len = strlen($out);
                if ($len < $exponentPlus1) {
                    $out .= str_repeat('0', $exponentPlus1 - $len);
                }
                $out = substr($out, 0, $exponentPlus1).((strlen($out) === $exponentPlus1) ? '' : ('.'.substr($out, $exponentPlus1)));
                $s = $sign.$out;
            } else {
                $s = $sign.'0.'.str_repeat('0', -$exponent - 1).$matches[2].$matches[4];
            }
        }

        return $s;
    }
    
}
