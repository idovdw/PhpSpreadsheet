<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for Cymraeg / Welsh (United Kingdom).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleCYxGB extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'cy-gb';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 44,
        'xlCountrySetting' => 44,
        'xlDecimalSeparator' => '.',
        'xlThousandsSeparator' => ',',
        'xlListSeparator' => ';',
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
        'xlDateSeparator' => '/',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => '£',
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
        'xlCurrencySpaceBefore' => false,
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
     * @var string Argument separator
     */
    public $strArgumentSeparator = ';';

    /**
     * @var array<string,string> Error codes - Current
     */
    protected $aErrorCodesCurrent = [
        'NULL' => '#NWL!',
        'DIV0' => '#RH/0!',
        'VALUE' => '#GWERTH!',
        'REF' => '#REF!',
        'NAME' => '#ENW?',
        'NUM' => '#RHIF!',
        'NA' => '#N/A',
        'GETTINGDATA' => '#NÔL_DATA!',
        'SPILL' => '#SPILL!',
        'CONNECT' => '#CYSYLLTU!',
        'BLOCKED' => '#RHWYSTRWYD!',
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#MAES!',
        'CALC' => '#CALC!',
        'EXTERNAL' => '#ALLANOL!',
    ];
}
