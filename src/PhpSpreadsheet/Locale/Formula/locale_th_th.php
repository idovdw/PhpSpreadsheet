<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for ไทย (Thai)
 */
class locale_th_th extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "th-th";

    /**
     * @var string International configuration
     */
    protected $aInternational = array(
        "xlCountryCode" => 66,
        "xlCountrySetting" => 66,
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
        "xlCurrencyCode" => "\u{E3F}",
        "xlGeneralFormatName" => "General",
        "xlCurrencyDigits" => 2,
        "xlCurrencyNegative" => 1,
        "xlNoncurrencyDigits" => 2,
        "xlMonthNameChars" => 3,
        "xlWeekdayNameChars" => 3,
        "xlDateOrder" => 1,
        "xl24HourClock" => true,
        "xlNonEnglishFunctions" => false,
        "xlMetric" => true,
        "xlCurrencySpaceBefore" => false,
        "xlCurrencyBefore" => true,
        "xlCurrencyMinusSign" => true,
        "xlCurrencyTrailingZeros" => true,
        "xlCurrencyLeadingZeros" => true,
        "xlMonthLeadingZero" => false,
        "xlDayLeadingZero" => false,
        "xl4DigitYears" => true,
        "xlMDY" => false,
        "xlTimeLeadingZero" => false,
    );

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NULL!",
        "DIV0" => "#DIV/0!",
        "VALUE" => "#VALUE!",
        "REF" => "#REF!",
        "NAME" => "#NAME?",
        "NUM" => "#NUM!",
        "NA" => "#N/A",
        "GETTINGDATA" => "#GETTING_DATA!",
        "SPILL" => "#\u{E2A}\u{E1B}\u{E34}\u{E25}\u{E25}\u{E4C}!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
