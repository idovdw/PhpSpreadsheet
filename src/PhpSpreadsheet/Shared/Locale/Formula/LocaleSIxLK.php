<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for සිංහල / Sinhala (Sri Lanka).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleSIxLK extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'si-lk';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 94,
        'xlCountrySetting' => 94,
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
        'xlDateSeparator' => '-',
        'xlTimeSeparator' => '.',
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{DBB}\u{DD4}.",
        'xlGeneralFormatName' => 'General',
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 1,
        'xlNoncurrencyDigits' => 2,
        'xlMonthNameChars' => 3,
        'xlWeekdayNameChars' => 3,
        'xlDateOrder' => 2,
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
        'xlMDY' => true,
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
        'VALUE' => '#VALUE!',
        'REF' => '#REF!',
        'NAME' => '#NAME?',
        'NUM' => '#NUM!',
        'NA' => '#N/A',
        'GETTINGDATA' => '#GETTING_DATA!',
        'SPILL' => "#\u{D9A}\u{DA9}\u{DAF}\u{DCF}\u{DC3}\u{DD2} \u{D9A}\u{DD6}\u{DBB}!",
        'CONNECT' => "#\u{DC3}\u{DB6}\u{DB3}\u{DD2}\u{DB1}\u{DCA}\u{DB1}!",
        'BLOCKED' => "#\u{D85}\u{DC0}\u{DC4}\u{DD2}\u{DBB}\u{DBA}\u{DD2}!",
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => "#\u{D9A}\u{DCA}\u{DC2}\u{DDA}\u{DAD}\u{DCA}\u{200D}\u{DBB}\u{DBA}!",
        'CALC' => '#CALC!',
        'EXTERNAL' => '#EXTERNAL!',
    ];
}
