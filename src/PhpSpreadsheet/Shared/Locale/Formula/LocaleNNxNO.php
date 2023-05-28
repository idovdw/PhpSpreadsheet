<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for Norsk nynorsk / Norwegian Nynorsk (Norway).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleNNxNO extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'nn-no';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 47,
        'xlCountrySetting' => 47,
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
        'xlRowSeparator' => ';',
        'xlAlternateArraySeparator' => '@',
        'xlDateSeparator' => '.',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'å',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 't',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => 'kr',
        'xlGeneralFormatName' => 'Standard',
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
        'NULL' => '#NULL!',
        'DIV0' => '#DIV/0!',
        'VALUE' => '#VERDI!',
        'REF' => '#REF!',
        'NAME' => '#NAMN?',
        'NUM' => '#NUM!',
        'NA' => '#I/T',
        'GETTINGDATA' => '#HENTAR_DATA!',
        'SPILL' => '#OVERFLYT!',
        'CONNECT' => '#KOPLE_TIL!',
        'BLOCKED' => '#BLOKKERT!',
        'UNKNOWN' => '#UKJEND!',
        'FIELD' => '#FELT!',
        'CALC' => '#BEREKN!',
        'EXTERNAL' => '#EKSTERN!',
    ];
}
