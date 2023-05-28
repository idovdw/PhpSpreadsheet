<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for Català / Catalan (Spain).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleCAxESxVALENCIA extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'ca-es-valencia';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 34,
        'xlCountrySetting' => 34,
        'xlDecimalSeparator' => ',',
        'xlThousandsSeparator' => '.',
        'xlListSeparator' => ';',
        'xlUpperCaseRowLetter' => 'F',
        'xlUpperCaseColumnLetter' => 'C',
        'xlLowerCaseRowLetter' => 'f',
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
        'xlYearCode' => 'a',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{20AC}",
        'xlGeneralFormatName' => 'Estándar',
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 1,
        'xlNoncurrencyDigits' => 2,
        'xlMonthNameChars' => 3,
        'xlWeekdayNameChars' => 3,
        'xlDateOrder' => 1,
        'xl24HourClock' => true,
        'xlNonEnglishFunctions' => true,
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
        'NULL' => '#NULL!',
        'DIV0' => '#DIV/0!',
        'VALUE' => '#VALUE!',
        'REF' => '#REF!',
        'NAME' => '#NAME?',
        'NUM' => '#NUM!',
        'NA' => '#N/A',
        'GETTINGDATA' => '#GETTING_DATA!',
        'SPILL' => '#DESBORDAMENT!',
        'CONNECT' => '#CONNECT!',
        'BLOCKED' => '#BLOCKED!',
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#CAMP!',
        'CALC' => '#CALC!',
        'EXTERNAL' => '#EXTERNAL!',
    ];

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $aFunctionsLegacy = [
        // Funcions de cerca i referència (Lookup and reference functions)
        '*RC' => 'FC',
        'CHOOSECOLS' => 'TRIACOLS',
        'DROP' => 'CAIGUDA',
        'EXPAND' => 'EXPANDEIX',
        'TAKE' => 'PREN',

        // Funcions de text (Text functions)
        'ARRAYTOTEXT' => 'MATRIUATEXT',
        'VALUETOTEXT' => 'VALORATEXT',
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $aFunctionsCurrent = [
        // Funcions de cerca i referència (Lookup and reference functions)
        '*RC' => 'FC',
        'CHOOSECOLS' => 'TRIACOLS',
        'DROP' => 'CAIGUDA',
        'EXPAND' => 'EXPANDEIX',
        'TAKE' => 'PREN',

        // Funcions de text (Text functions)
        'ARRAYTOTEXT' => 'MATRIUATEXT',
        'VALUETOTEXT' => 'VALORATEXT',
    ];
}
