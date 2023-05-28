<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for Ελληνικά / Greek (Greece).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleELxGR extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'el-gr';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 30,
        'xlCountrySetting' => 30,
        'xlDecimalSeparator' => ',',
        'xlThousandsSeparator' => '.',
        'xlListSeparator' => ';',
        'xlUpperCaseRowLetter' => 'R',
        'xlUpperCaseColumnLetter' => 'C',
        'xlLowerCaseRowLetter' => 'r',
        'xlLowerCaseColumnLetter' => 'c',
        'xlLeftBracket' => '[',
        'xlRightBracket' => ']',
        'xlLeftBrace' => '{',
        'xlRightBrace' => '}',
        'xlColumnSeparator' => '\\',
        'xlRowSeparator' => ';',
        'xlAlternateArraySeparator' => '@',
        'xlDateSeparator' => '/',
        'xlTimeSeparator' => ':',
        'xlYearCode' => "\u{3B5}",
        'xlMonthCode' => "\u{3BC}",
        'xlDayCode' => "\u{3B7}",
        'xlHourCode' => "\u{3C9}",
        'xlMinuteCode' => "\u{3BB}",
        'xlSecondCode' => "\u{3B4}",
        'xlCurrencyCode' => "\u{20AC}",
        'xlGeneralFormatName' => "\u{393}\u{3B5}\u{3BD}\u{3B9}\u{3BA}\u{3CC}\u{3C2} \u{3C4}\u{3CD}\u{3C0}\u{3BF}\u{3C2}",
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 1,
        'xlNoncurrencyDigits' => 2,
        'xlMonthNameChars' => 3,
        'xlWeekdayNameChars' => 3,
        'xlDateOrder' => 1,
        'xl24HourClock' => false,
        'xlNonEnglishFunctions' => false,
        'xlMetric' => true,
        'xlCurrencySpaceBefore' => true,
        'xlCurrencyBefore' => false,
        'xlCurrencyMinusSign' => true,
        'xlCurrencyTrailingZeros' => true,
        'xlCurrencyLeadingZeros' => true,
        'xlMonthLeadingZero' => false,
        'xlDayLeadingZero' => false,
        'xl4DigitYears' => true,
        'xlMDY' => false,
        'xlTimeLeadingZero' => false,
    ];

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ';';

    /**
     * @var array<string,string> Error codes - Current
     */
    protected $aErrorCodesCurrent = [
        'NULL' => "#\u{39A}\u{395}\u{39D}\u{39F}!",
        'DIV0' => "#\u{394}\u{399}\u{391}\u{399}\u{3A1}/0!",
        'VALUE' => "#\u{3A4}\u{399}\u{39C}\u{397}!",
        'REF' => "#\u{391}\u{39D}\u{391}\u{3A6}!",
        'NAME' => "#\u{39F}\u{39D}\u{39F}\u{39C}\u{391}?",
        'NUM' => "#\u{391}\u{3A1}\u{399}\u{398}!",
        'NA' => "#\u{394}/\u{3A5}",
        'GETTINGDATA' => "#\u{39B}\u{397}\u{3A8}\u{397}_\u{394}\u{395}\u{394}\u{39F}\u{39C}\u{395}\u{39D}\u{3A9}\u{39D}!",
        'SPILL' => "#\u{395}\u{39A}\u{3A7}\u{3A5}\u{3A3}\u{397}!",
        'CONNECT' => "#\u{3A3}\u{3A5}\u{39D}\u{394}\u{395}\u{3A3}\u{397}!",
        'BLOCKED' => "#\u{391}\u{3A0}\u{39F}\u{39A}\u{39B}!",
        'UNKNOWN' => "#\u{391}\u{393}\u{39D}\u{3A9}\u{3A3}\u{3A4}\u{39F}!",
        'FIELD' => "#\u{3A0}\u{395}\u{394}\u{399}\u{39F}!",
        'CALC' => "#\u{3A5}\u{3A0}\u{39F}\u{39B}!",
        'EXTERNAL' => "#\u{395}\u{39E}\u{3A9}\u{3A4}\u{395}\u{3A1}\u{399}\u{39A}\u{39F}\u{3A3}!",
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $aFunctionsCurrent = [
        // Λειτουργίες αναζήτησης και αναφοράς (Lookup and reference functions)
        '*RC' => 'RC',

        // Λειτουργίες κειμένου (Text functions)
        'DOLLAR' => 'CURRENCY',
    ];
}
