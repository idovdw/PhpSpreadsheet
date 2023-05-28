<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for Te reo Māori / Māori (New Zealand).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleMIxNZ extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'mi-nz';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 64,
        'xlCountrySetting' => 64,
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
        'xlDateSeparator' => '/',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => '$',
        'xlGeneralFormatName' => 'General',
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 1,
        'xlNoncurrencyDigits' => 2,
        'xlMonthNameChars' => 3,
        'xlWeekdayNameChars' => 3,
        'xlDateOrder' => 1,
        'xl24HourClock' => false,
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
        'xlTimeLeadingZero' => false,
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
        'SPILL' => '#MARINGI!',
        'CONNECT' => "#T\u{16A}HONO!",
        'BLOCKED' => "#KUA \u{100}RAITIA!",
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#FIELD!',
        'CALC' => '#CALC!',
        'EXTERNAL' => '#WAHO!',
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $aFunctionsCurrent = [
        // Ngā mahi rapu whakaahua me te hononga (Lookup and reference functions)
        '*RC' => 'RC',

        // Ngā mahi tatauranga (Statistical functions)
        'FORECAST.ETS.STAT' => 'MATAPAE.ETS.STAT',
    ];
}
