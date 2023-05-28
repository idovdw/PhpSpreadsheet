<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for українська / Ukrainian (Ukraine).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleUKxUA extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'uk-ua';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 380,
        'xlCountrySetting' => 380,
        'xlDecimalSeparator' => ',',
        'xlThousandsSeparator' => ' ',
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
        'xlRowSeparator' => ':',
        'xlAlternateArraySeparator' => '@',
        'xlDateSeparator' => '.',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{20B4}",
        'xlGeneralFormatName' => 'General',
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 1,
        'xlNoncurrencyDigits' => 2,
        'xlMonthNameChars' => 3,
        'xlWeekdayNameChars' => 3,
        'xlDateOrder' => 1,
        'xl24HourClock' => true,
        'xlNonEnglishFunctions' => false,
        'xlMetric' => true,
        'xlCurrencySpaceBefore' => true,
        'xlCurrencyBefore' => false,
        'xlCurrencyMinusSign' => true,
        'xlCurrencyTrailingZeros' => true,
        'xlCurrencyLeadingZeros' => true,
        'xlMonthLeadingZero' => true,
        'xlDayLeadingZero' => true,
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
        'NULL' => '#NULL!',
        'DIV0' => "#\u{414}\u{406}\u{41B}\u{415}\u{41D}\u{41D}\u{42F}/0!",
        'VALUE' => "#\u{417}\u{41D}\u{410}\u{427}\u{415}\u{41D}\u{41D}\u{42F}!",
        'REF' => "#\u{41F}\u{41E}\u{421}\u{418}\u{41B}\u{410}\u{41D}\u{41D}\u{42F}!",
        'NAME' => "#\u{406}\u{41C}\u{2019}\u{42F}?",
        'NUM' => "#\u{41D}\u{41E}\u{41C}\u{415}\u{420}!",
        'NA' => "#\u{41D}/\u{414}",
        'GETTINGDATA' => "#\u{41E}\u{422}\u{420}\u{418}\u{41C}\u{410}\u{41D}\u{41D}\u{42F}_\u{414}\u{410}\u{41D}\u{418}\u{425}!",
        'SPILL' => "#\u{420}\u{41E}\u{417}\u{413}\u{41E}\u{420}\u{422}\u{410}\u{41D}\u{41D}\u{42F}!",
        'CONNECT' => "#\u{41F}\u{406}\u{414}\u{41A}\u{41B}\u{42E}\u{427}\u{415}\u{41D}\u{41D}\u{42F}!",
        'BLOCKED' => "#\u{417}\u{410}\u{411}\u{41B}\u{41E}\u{41A}\u{41E}\u{412}\u{410}\u{41D}\u{41E}!",
        'UNKNOWN' => "#\u{41D}\u{415}\u{412}\u{406}\u{414}\u{41E}\u{41C}\u{41E}!",
        'FIELD' => "#\u{41F}\u{41E}\u{41B}\u{415}!",
        'CALC' => "#\u{41E}\u{411}\u{427}\u{418}\u{421}\u{41B}\u{415}\u{41D}\u{41D}\u{42F}!",
        'EXTERNAL' => "#\u{417}\u{41E}\u{412}\u{41D}\u{406}\u{428}\u{41D}\u{404}!",
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $aFunctionsCurrent = [
        // Функції пошуку та посилання (Lookup and reference functions)
        '*RC' => 'RC',

        // Функції сумісності (Compatibility functions)
        'FTEST' => 'FTEST1',
    ];
}
