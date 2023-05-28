<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for कोंकणी / Konkani (India).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleKOKxIN extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'kok-in';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 91,
        'xlCountrySetting' => 91,
        'xlDecimalSeparator' => '.',
        'xlThousandsSeparator' => ',',
        'xlListSeparator' => ',',
        'xlUpperCaseRowLetter' => 'R',
        'xlUpperCaseColumnLetter' => 'C',
        'xlLowerCaseRowLetter' => 'r',
        'xlLowerCaseColumnLetter' => 'c',
        'xlLeftBracket' => '[',
        'xlRightBracket' => ']',
        'xlLeftBrace' => '{',
        'xlRightBrace' => '}',
        'xlColumnSeparator' => ',',
        'xlRowSeparator' => ';',
        'xlAlternateArraySeparator' => '@',
        'xlDateSeparator' => '-',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{20B9}",
        'xlGeneralFormatName' => 'General',
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 2,
        'xlNoncurrencyDigits' => 2,
        'xlMonthNameChars' => 3,
        'xlWeekdayNameChars' => 3,
        'xlDateOrder' => 1,
        'xl24HourClock' => true,
        'xlNonEnglishFunctions' => false,
        'xlMetric' => true,
        'xlCurrencySpaceBefore' => true,
        'xlCurrencyBefore' => true,
        'xlCurrencyMinusSign' => true,
        'xlCurrencyTrailingZeros' => true,
        'xlCurrencyLeadingZeros' => true,
        'xlMonthLeadingZero' => true,
        'xlDayLeadingZero' => true,
        'xl4DigitYears' => true,
        'xlMDY' => false,
        'xlTimeLeadingZero' => true,
    ];

    /**
     * @var array<string,string> Error codes - Current
     */
    protected $aErrorCodesCurrent = [
        'NULL' => '#NULL!',
        'DIV0' => '#DIV/0!',
        'VALUE' => '#VALUE!',
        'REF' => '#REF!',
        'NAME' => '#NAME?',
        'NUM' => '#NUM!',
        'NA' => '#N/A',
        'GETTINGDATA' => '#GETTING_DATA!',
        'SPILL' => "#\u{913}\u{924}\u{92A}!",
        'CONNECT' => "#\u{915}\u{928}\u{945}\u{915}\u{94D}\u{91F} \u{915}\u{930}\u{91A}\u{947}\u{902}!",
        'BLOCKED' => "#\u{906}\u{921}\u{93E}\u{92F}\u{932}\u{93E}\u{902}!",
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#FIELD!',
        'CALC' => '#CALC!',
        'EXTERNAL' => '#EXTERNAL!',
    ];
}
