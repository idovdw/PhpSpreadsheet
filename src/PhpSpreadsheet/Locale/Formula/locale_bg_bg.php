<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for български (Bulgarian)
 */
class locale_bg_bg extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "bg-bg";

    /**
     * @var string International configuration
     */
    protected $aInternational = array(
        "xlCountryCode" => 359,
        "xlCountrySetting" => 359,
        "xlDecimalSeparator" => ",",
        "xlThousandsSeparator" => " ",
        "xlListSeparator" => ";",
        "xlUpperCaseRowLetter" => "R",
        "xlUpperCaseColumnLetter" => "C",
        "xlLowerCaseRowLetter" => "r",
        "xlLowerCaseColumnLetter" => "c",
        "xlLeftBracket" => "[",
        "xlRightBracket" => "]",
        "xlLeftBrace" => "{",
        "xlRightBrace" => "}",
        "xlColumnSeparator" => "\\",
        "xlRowSeparator" => ";",
        "xlAlternateArraySeparator" => "@",
        "xlDateSeparator" => ".",
        "xlTimeSeparator" => ":",
        "xlYearCode" => "y",
        "xlMonthCode" => "m",
        "xlDayCode" => "d",
        "xlHourCode" => "h",
        "xlMinuteCode" => "m",
        "xlSecondCode" => "s",
        "xlCurrencyCode" => "\u{43B}\u{432}.",
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
        "xlCurrencySpaceBefore" => true,
        "xlCurrencyBefore" => false,
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
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

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
        "SPILL" => "#SPILL!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#\u{411}\u{41B}\u{41E}\u{41A}\u{418}\u{420}\u{410}\u{41D}\u{41E}!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
