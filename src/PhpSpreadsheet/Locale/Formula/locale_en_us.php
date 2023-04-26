<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for English
 */
class locale_en_us extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "en-us";

    /**
     * @var string International configuration
     */
    protected $aInternational = array(
        "xlCountryCode" => 1,
        "xlCountrySetting" => 1,
        "xlDecimalSeparator" => ".",
        "xlThousandsSeparator" => ",",
        "xlListSeparator" => ",",
        "xlUpperCaseRowLetter" => "R",
        "xlUpperCaseColumnLetter" => "C",
        "xlLowerCaseRowLetter" => "r",
        "xlLowerCaseColumnLetter" => "c",
        "xlLeftBracket" => "[",
        "xlRightBracket" => "]",
        "xlLeftBrace" => "{",
        "xlRightBrace" => "}",
        "xlColumnSeparator" => ",",
        "xlRowSeparator" => ";",
        "xlAlternateArraySeparator" => "@",
        "xlDateSeparator" => "/",
        "xlTimeSeparator" => ":",
        "xlYearCode" => "y",
        "xlMonthCode" => "m",
        "xlDayCode" => "d",
        "xlHourCode" => "h",
        "xlMinuteCode" => "m",
        "xlSecondCode" => "s",
        "xlCurrencyCode" => "\$",
        "xlGeneralFormatName" => "General",
        "xlCurrencyDigits" => 2,
        "xlCurrencyNegative" => 0,
        "xlNoncurrencyDigits" => 2,
        "xlMonthNameChars" => 3,
        "xlWeekdayNameChars" => 3,
        "xlDateOrder" => 0,
        "xl24HourClock" => false,
        "xlNonEnglishFunctions" => false,
        "xlMetric" => false,
        "xlCurrencySpaceBefore" => false,
        "xlCurrencyBefore" => true,
        "xlCurrencyMinusSign" => false,
        "xlCurrencyTrailingZeros" => true,
        "xlCurrencyLeadingZeros" => true,
        "xlMonthLeadingZero" => false,
        "xlDayLeadingZero" => false,
        "xl4DigitYears" => true,
        "xlMDY" => true,
        "xlTimeLeadingZero" => false,
    );

}
