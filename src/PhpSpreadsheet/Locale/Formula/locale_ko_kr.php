<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for 한국어 (Korean)
 */
class locale_ko_kr extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "ko-kr";

    /**
     * @var string International configuration
     */
    protected $aInternational = array(
        "xlCountryCode" => 82,
        "xlCountrySetting" => 82,
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
        "xlDateSeparator" => "-",
        "xlTimeSeparator" => ":",
        "xlYearCode" => "y",
        "xlMonthCode" => "m",
        "xlDayCode" => "d",
        "xlHourCode" => "h",
        "xlMinuteCode" => "m",
        "xlSecondCode" => "s",
        "xlCurrencyCode" => "\u{20A9}",
        "xlGeneralFormatName" => "G/\u{D45C}\u{C900}",
        "xlCurrencyDigits" => 0,
        "xlCurrencyNegative" => 1,
        "xlNoncurrencyDigits" => 2,
        "xlMonthNameChars" => 3,
        "xlWeekdayNameChars" => 3,
        "xlDateOrder" => 2,
        "xl24HourClock" => false,
        "xlNonEnglishFunctions" => false,
        "xlMetric" => true,
        "xlCurrencySpaceBefore" => false,
        "xlCurrencyBefore" => true,
        "xlCurrencyMinusSign" => true,
        "xlCurrencyTrailingZeros" => true,
        "xlCurrencyLeadingZeros" => true,
        "xlMonthLeadingZero" => true,
        "xlDayLeadingZero" => true,
        "xl4DigitYears" => true,
        "xlMDY" => true,
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
        "SPILL" => "#\u{BD84}\u{C0B0}!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
