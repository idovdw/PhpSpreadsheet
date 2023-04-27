<?php

namespace PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Locale\CurrentLocale;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat\BaseFormatter;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;
use \IntlDateFormatter;


class DateFormatter extends BaseFormatter
{
    /**
     * Detect date details for Gregorian date processing
     */
    protected const PREG_DETECT_DATE_DETAILS_GREGORIAN = '/^(?<year>[^\|]+)\|(?<yy>[^\|]+)\|(?<m>[^\|]+)\|(?<wkd>[^\|]+)\|(?<d>[^\|]+)\|(?<h24>[^\|]+)\|(?<h12>[^\|]+)\|(?<mm>[^\|]+)\|(?<ss>[^\|]+)\|(?<ms>[^\|]+)\|(?<ampm>[^\|]+)$/iu';

    /**
     * Detect date details for alternative date processing
     */
    protected const PREG_DETECT_DATE_DETAILS_ALTERNATIVE = '/^(?<era>[^\|]+)\|(?<year>[^\|]+)\|(?<yy>[^\|]+)\|(?<m>[^\|]+)\|(?<wkd>[^\|]+)\|(?<d>[^\|]+)\|(?<h24>[^\|]+)\|(?<h12>[^\|]+)\|(?<mm>[^\|]+)\|(?<ss>[^\|]+)\|(?<ms>[^\|]+)$/iu';

    /**
     * Detect 'm'/'mm' for time recognition
     */
    protected const PREG_SPLIT_MINUTES = '/'.self::PREG_CONDITION_QUOTED.'(?:[m]{3,}(*SKIP)(*F))|(?:^|(?<![m]))(mm?)(?:$|(?![m]))/iu';

    /**
     * Detect 'h'/'hh' preceding 'm'/'mm' (split previously) to detect time
     */
    protected const PREG_DETECT_TIME_MMHOURS = '/(hh?)(([^hmsyd"]+)|'.self::PREG_CONDITION_QUOTED.')*$/iu';

    /**
     * Detect 's'/'ss' succeeding 'm'/'mm' (split previously) to detect time
     */
    protected const PREG_DETECT_TIME_MMSECONDS = '/^(([^hmsyd"]+)|'.self::PREG_CONDITION_QUOTED.')*(ss?)/iu';

    /**
     * Constants for calculation of the '[h]:' format
     */
    protected const INTERVAL_SECONDS_MULTIPLIER = [
        '[h]' => 12,
        '[hh]' => 12,
        '[m]' => 720,
        '[mm]' => 720,
        '[s]' => 43200,
        '[ss]' => 43200,
    ];

    /**
     * Constants for calculating the '[h]' format (time elapsed)
     */
    protected const INTERVAL_ELAPSED_SECONDS = [
        '[h]' => 3600,
        '[hh]' => 3600,
        '[m]' => 60,
        '[mm]' => 60,
        '[s]' => 1,
        '[ss]' => 1,
    ];


    /**
     * Process a datetime format
     *
     * @param mixed $value The Excel numeric date value
     * @param string $format The format string
     * @param array $aLocaleConfig Locale format configuration
     * @return string The altered format
     */
    public static function format($value, string $format, array $aLocaleConfig): string
    {
        // Convert the Excel value into a DateTime object
        if (!is_numeric($value))
        {
            return $value;
        }

        if ($value < 0)
        {
            // Negative value: '-' in front of format
            $format = '-'.$format;
            $value = abs($value);
        }

        switch($aLocaleConfig['calendar_code'])
        {
            case LocaleLayout::CALENDAR_CODE_GREGORIAN:
            case LocaleLayout::CALENDAR_CODE_GREGORIAN_BASE1:
            case LocaleLayout::CALENDAR_CODE_GREGORIAN_BASE2:
            case LocaleLayout::CALENDAR_CODE_GREGORIAN_BASE3:
            case LocaleLayout::CALENDAR_CODE_GREGORIAN_LOCAL1:
            case LocaleLayout::CALENDAR_CODE_GREGORIAN_LOCAL2:
                // Process as Gregorian date
                return self::formatGregorianCalendar($value, $format, $aLocaleConfig);

            default:
                if (!class_exists('IntlDateFormatter'))
                {
                    // Process as Gregorian date
                    return self::formatGregorianCalendar($value, $format, $aLocaleConfig);
                }
                // Process as Gregorian date
                return self::formatAlternativeCalendar($value, $format, $aLocaleConfig);
        }
    }

    /**
     * Process a datetime format, using the Gregorian calendar
     *
     * Specific eplacements:
     * - '[h]:' Multiplication of constant (hh,h,mm,m,ss or s)
     * - '[h]' Time elapsed (hh,h,mm,m,ss or s)
     * - '.000' or '.sss' fraction of a second
     * - Difference between 24 and 12 hour clock
     * - AM/PM and A/P display
     * - Short and long names of months and weekdays
     * - Date separator
     *
     * @param numeric $value The Excel numeric date value
     * @param string $format The format string
     * @param array $aLocaleConfig Locale format configuration
     * @return string The altered format
     */
    protected static function formatGregorianCalendar($value, string $format, array $aLocaleConfig): string
    {
        // Convert the Excel value into a DateTime object
        $oDateTime = Date::excelToDateTimeObject($value);

        if (!preg_match(self::PREG_DETECT_DATE_DETAILS_GREGORIAN, $oDateTime->format('Y|y|m|N|d|H|h|i|s|v|A'), $aDate))
        {
            // Unable to process date...
            return '"#FMT"';
        }
        $aDate['seconds_elapsed'] = floor($value * 3600 * 24);
        $aDate['seconds'] = intval($aDate['ss']);

        $aDateLocaleTexts = self::getDateTranslations($aLocaleConfig);
        $aDateFormatReplacements = array(
            // 4-digit year
            'yyyy' => $aDate['year'],
            // 2-digit year
            'yy' => $aDate['yy'],
            // Full month name
            'mmmm' => $aDateLocaleTexts['months']['full'][((int)$aDate['m'])-1],
            // Short month name
            'mmm' => $aDateLocaleTexts['months']['short'][((int)$aDate['m'])-1],
            // Month leading zero
            'mm' => $aDate['m'],
            // Month no leading zero
            'm' => (int)$aDate['m'],
            // Full day of week name
            'dddd' => $aDateLocaleTexts['weekdays']['full'][((int)$aDate['wkd'])-1],
            // Short day of week name
            'ddd' => $aDateLocaleTexts['weekdays']['short'][((int)$aDate['wkd'])-1],
            // Days leading zero
            'dd' => $aDate['d'],
            // Days no leading zero
            'd' => (int)$aDate['d'],
            // Seconds leading zero
            'ss' => $aDate['ss'],
            // Seconds no leading zero
            's' => (int)$aDate['ss'],
        );
        // First letter of full month name
        $aDateFormatReplacements['mmmmm'] = mb_substr($aDateFormatReplacements['mmmm'], 0, 1, 'UTF-8');
        // Era
        $aDate['era'] = $aDate['year'];

        // Process the date details
        return self::processDateDetails($format, $aDate, $aDateFormatReplacements);
    }

    /**
     * Process a datetime format, using the Intl library
     *
     * @param numeric $value The Excel numeric date value
     * @param string $format The format string
     * @param array $aLocaleConfig Locale format configuration
     * @return string The altered format
     */
    protected static function formatAlternativeCalendar($value, string $format, array $aLocaleConfig): string
    {
        // Convert the Excel value into a DateTime object
        $oDateTime = Date::excelToDateTimeObject($value);

        switch($aLocaleConfig['calendar_type'])
        {
            case LocaleLayout::CALENDAR_TYPE_KOREAN:
                // Add 2333 years: Foundation of Gojoseon; year one
                $oDateTime->add(new \DateInterval('P2333Y'));
                break;
            case LocaleLayout::CALENDAR_TYPE_UNKNOWN:
                // Unable to process date... yet.
                return '"#FMT"';
        }

        // Create an IntlCalendar object with the Buddhist calendar system
        // Make a locale correction for retrieving the correct weekday
        $timezone = $oDateTime->getTimezone();
        $location = $timezone->getLocation();
        $oIntlDateFormatter = new IntlDateFormatter(
            'en_'.$location['country_code'].'.UTF-8@calendar='.$aLocaleConfig['calendar_type'],
            IntlDateFormatter::NONE,
            IntlDateFormatter::NONE,
            $timezone,
            IntlDateFormatter::TRADITIONAL,
            'GG|yyyy|yy|M|e|d|H|h|m|s|SSS'
        );

        if (!preg_match(self::PREG_DETECT_DATE_DETAILS_ALTERNATIVE, $oIntlDateFormatter->format($oDateTime), $aDate))
        {
            // Unable to process date...
            return '"#FMT"';
        }

        // AM/PM
        $aDate['ampm'] = $oDateTime->format('A');

        if ($aLocaleConfig['calendar_type'] == LocaleLayout::CALENDAR_TYPE_JAPANESE)
        {
            // Strip leading zeros
            $aDate['year'] = preg_replace('/^[0]{1,3}/', '', $aDate['year']);
        }
        // Excel does not support era?
        $aDate['era'] = $aDate['year'];

        $aDateLocaleTexts = self::getDateTranslations($aLocaleConfig);
        $aDateFormatReplacements = array(
            // 4-digit year
            'yyyy' => $aDate['year'],
            // 2-digit year
            'yy' => $aDate['yy'],
            // Full month name
            'mmmm' => $aDateLocaleTexts['months']['full'][((int)$aDate['m'])-1],
            // Short month name
            'mmm' => $aDateLocaleTexts['months']['short'][((int)$aDate['m'])-1],
            // Month leading zero
            'mm' => $aDate['m'],
            // Month no leading zero
            'm' => (int)$aDate['m'],
            // Full day of week name
            'dddd' => $aDateLocaleTexts['weekdays']['full'][((int)$aDate['wkd'])-1],
            // Short day of week name
            'ddd' => $aDateLocaleTexts['weekdays']['short'][((int)$aDate['wkd'])-1],
            // Days leading zero
            'dd' => $aDate['d'],
            // Days no leading zero
            'd' => (int)$aDate['d'],
            // Seconds leading zero
            'ss' => $aDate['ss'],
            // Seconds no leading zero
            's' => (int)$aDate['ss'],
        );
        // First letter of full month name
        $aDateFormatReplacements['mmmmm'] = mb_substr($aDateFormatReplacements['mmmm'], 0, 1, 'UTF-8');

        // Process the date details
        return self::processDateDetails($format, $aDate, $aDateFormatReplacements);
    }

    /**
     *
     * @param string $format
     * @param array $aDate
     * @param array $aDateFormatReplacements
     * @return type
     */
    protected static function processDateDetails(string $format, array $aDate, array $aDateFormatReplacements)
    {
        // OpenOffice.org uses upper-case number formats (e.g. 'YYYY');
        // convert to lower-case. (make few iterations)
        $format = preg_replace_callback('/'.self::PREG_CONDITION_NONQUOTED.'[hmsdy:\.\/\\\\]+/iu', function($match){
            return strtolower($match[0]);
        }, $format);

        // If the colon preceding minute had been quoted, as happens in e.g.
        // Excel 2003 XML formats, the quotes should be removed.
        $format = preg_replace('/([H]\]?)":"([m])/iu', '$1:$2', $format);

        // Check 12/24 hour time format
        $clock12Hours = (bool)preg_match('/'.self::PREG_CONDITION_NONQUOTED.'(am\/pm)|(a\/p)/iu', $format);
        if ($clock12Hours)
        {
            $aDateFormatReplacements['hh'] = $aDate['h12'];
            $aDateFormatReplacements['h'] = (int)$aDate['h12'];
        } else {
            // Formats containing '[h]":"' should be treated like '[h]:'
            $format = preg_replace('/(\[(hh?|mm?|ss?)\])":"/iu', '$1:', $format);
            $aDateFormatReplacements['hh'] = $aDate['h24'];
            $aDateFormatReplacements['h'] = (int)$aDate['h24'];
        }

        // Format "m"/"mm" is month, but it is minutes if time!
        // Time is identified by preceding hours or succeeding minutes.
        if (preg_match_all(self::PREG_SPLIT_MINUTES, $format, $mm_markers))
        {
            // Split by 'm'/'mm'
            // Processing minutes in a single preg condition would cause
            // backtrack limit issues.
            $matches = preg_split(self::PREG_SPLIT_MINUTES, $format);

            $format = '';
            foreach ($matches as $pos => $match)
            {
                if ($pos == 0)
                {
                    $format .= $matches[$pos];
                    continue;
                }

                // Detect time
                if (preg_match(self::PREG_DETECT_TIME_MMHOURS, $matches[$pos-1]) || preg_match(self::PREG_DETECT_TIME_MMSECONDS, $match))
                {
                    // Time; replace 'm'/'mm' by minutes
                    $format .= ((strlen($mm_markers[0][$pos-1]) == 1) ? (int)$aDate['mm'] : $aDate['mm']).$matches[$pos];
                } else {
                    // Not time
                    $format .= $mm_markers[0][$pos-1].$matches[$pos];
                }
            }
        }

        // Process era: e/ee+
        $format = preg_replace_callback('/'.self::PREG_CONDITION_NONQUOTED.'[e]+/iu', function(array $matches) use ($aDate)
        {
            return '"'.$aDate['era'].'"';
        }, $format);

        // AM/PM and A/P time display
        $format = preg_replace_callback('/'.self::PREG_CONDITION_NONQUOTED.'(AM\/PM)|(A\/P)/iu', function(array $matches) use ($aDate)
        {
            $ampm = $aDate['ampm'];
            if (strtoupper($matches[0]) == 'A/P')
            {
                $ampm = ($ampm == 'AM') ? 'A' : 'P';
            }
            if (substr($matches[0], 0, 1) == 'a')
            {
                $ampm = strtolower($ampm);
            }
            return '"'.$ampm.'"';
        }, $format);

        // Fraction of a second (0-3 digits) Recognized by .000 or .sss
        $dec_sign = CurrentLocale::getDecimalSeparator();
        $format = preg_replace_callback('/'.self::PREG_CONDITION_NONQUOTED.'\.(([0]*|[s]*))/iu', function(array $matches) use ($aDate, $dec_sign)
        {
            $length = strlen($matches[1]);
            if ($length > 0)
            {
                // Limit number of decimals to 3
                if ($length >= 3) {
                    $fraction = str_pad((int)$aDate['ms'], 3, '0', STR_PAD_LEFT);
                } else {
                    $fraction = str_pad(round((int)$aDate['ms'] / (10 * (10 ** (2-$length)))), $length, '0', STR_PAD_LEFT);
                }
            } else {
                $fraction = '';
            }
            return '"'.$dec_sign.$fraction.'"';
        }, $format);

        // Process each segment inbetween double quotes
        $format = preg_replace_callback('/'.self::PREG_CONDITION_NONQUOTED.'(?:\\\\.|[^\\\\"])+/u',
        function($matches) use ($aDate, $clock12Hours, $aDateFormatReplacements)
        {
            if ($clock12Hours)
            {
                // Handle 12-hour time format

                // Replace the basic date-time identifiers
                $format = strtr($matches[0], $aDateFormatReplacements);
            } else {
                // Handle 24-hour time format
                $format = $matches[0];

                // Formats containing '[h]:' (etc) are replaced by a
                // multiplication of the seconds times a constant
                $detected = false;
                $interval_multiplier = self::INTERVAL_SECONDS_MULTIPLIER;
                $format = preg_replace_callback('/(\[(hh?|mm?|ss?)\])\:/iu',
                function($matches) use ($aDate, $interval_multiplier, &$detected)
                {
                    if ($detected)
                    {
                        // Remove other identifiers
                        return ':';
                    }
                    $detected = true;
                    $interval = (2*($aDate['seconds'] + 1) - 1)*$interval_multiplier[$matches[1]];
                    $interval = ((($interval < 10) && (strlen($matches[2]) == 2)) ? '0' : '').$interval;
                    return $interval.":";
                }, $format);

                // When [h]:mm format, the [h] should be replaced by the hours
                // of the elapsed time.
                $detected = false;
                $interval_multiplier = self::INTERVAL_ELAPSED_SECONDS;
                $format = preg_replace_callback('/(\[(hh?|mm?|ss?)\])/iu',
                function($matches) use ($aDate, $interval_multiplier, &$detected)
                {
                    if ($detected)
                    {
                        // Remove other identifiers
                        return '';
                    }
                    $detected = true;
                    $interval = floor($aDate['seconds_elapsed']/$interval_multiplier[$matches[1]]);
                    $interval = ((($interval < 10) && (strlen($matches[2]) == 2)) ? '0' : '').$interval;

                    return $interval;
                }, $format);

                // Replace the basic date-time identifiers
                $format = strtr($format, $aDateFormatReplacements);
            }

            return $format;
        }, $format);


        // Use the date separator of the current locale
        $sep = CurrentLocale::getDateSeparator();
        if ($sep <> '/')
        {
            // Replace the date separator (prevent mixing up with "AM/PM")
            $format = preg_replace('/'.self::PREG_CONDITION_NONQUOTED.'\//', '"'.$sep.'"', $format);
        }

        return $format;
    }

    /**
     * Load the date translations
     *
     * @staticvar array $dateTranslations
     * @param type $aLocaleConfig
     * @return boolean
     */
    protected static function getDateTranslations($aLocaleConfig)
    {
        static $dateTranslations = array();

        if (!isset($dateTranslations[$aLocaleConfig['calendar_code']]))
        {
            $calendar_specs = isset(LocaleLayout::$aCalendarTypes[$aLocaleConfig['calendar_code']]) ? LocaleLayout::$aCalendarTypes[$aLocaleConfig['calendar_code']] : false;
            if (($calendar_specs !== false) && isset($calendar_specs['class']))
            {
                $className = '\\PhpOffice\\PhpSpreadsheet\Locale\\Calendar\\Calendar'.$calendar_specs['class'];
                if (class_exists($className))
                {
                    $aCalendar = $className::getInstance();
                    $dateTranslations[$aLocaleConfig['calendar_code']] = $aCalendar->getDateTranslations($aLocaleConfig);
                    return $dateTranslations[$aLocaleConfig['calendar_code']];
                }
            }
            $dateTranslations[$aLocaleConfig['calendar_code']] = false;
        }

        if ($dateTranslations[$aLocaleConfig['calendar_code']] === false)
        {
            return CurrentLocale::getDateTranslations($aLocaleConfig);
        }

        return $dateTranslations[$aLocaleConfig['calendar_code']];
    }
}
