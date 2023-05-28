<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for Dari (Afghanistan).
 *
 * Do not alter this file; it is generated content.
 */
class LocalePRSxAF extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'prs-af';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 93,
        'xlCountrySetting' => 93,
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
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{60B}",
        'xlGeneralFormatName' => 'General',
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 3,
        'xlNoncurrencyDigits' => 2,
        'xlMonthNameChars' => 3,
        'xlWeekdayNameChars' => 3,
        'xlDateOrder' => 2,
        'xl24HourClock' => false,
        'xlNonEnglishFunctions' => false,
        'xlMetric' => true,
        'xlCurrencySpaceBefore' => false,
        'xlCurrencyBefore' => true,
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
     * @var array<string,string> Formula current functions
     */
    protected $aFunctionsCurrent = [
        // توابع تاریخ و زمان (Date and time functions)
        'DAYS' => "\u{631}\u{648}\u{632}\u{647}\u{627}",

        // توابع منطقی (Logical functions)
        'IF' => "\u{627}\u{6AF}\u{631}",

        // بررسی و عملکرد مرجع (Lookup and reference functions)
        '*RC' => 'RC',
    ];
}
