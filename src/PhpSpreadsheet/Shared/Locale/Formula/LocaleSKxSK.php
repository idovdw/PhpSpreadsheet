<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for Slovenčina / Slovak (Slovakia).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleSKxSK extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'sk-sk';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 421,
        'xlCountrySetting' => 421,
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
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{20AC}",
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
        'NULL' => '#NEPLATNÝ!',
        'DIV0' => '#DELENIENULOU!',
        'VALUE' => '#HODNOTA!',
        'REF' => '#ODKAZ!',
        'NAME' => '#NÁZOV?',
        'NUM' => "#\u{10C}ÍSLO!",
        'NA' => '#NEDOSTUPNÝ',
        'GETTINGDATA' => '#ZÍSKANIE_ÚDAJOV!',
        'SPILL' => '#PRESAHOVANIE!',
        'CONNECT' => "#PRIPOJI\u{164}!",
        'BLOCKED' => '#BLOKOVANÉ!',
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#FIELD!',
        'CALC' => "#VÝPO\u{10C}ET!",
        'EXTERNAL' => '#EXTERNAL!',
    ];
}
