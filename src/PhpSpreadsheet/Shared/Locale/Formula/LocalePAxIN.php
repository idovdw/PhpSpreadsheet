<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for ਪੰਜਾਬੀ / Punjabi (India).
 *
 * Do not alter this file; it is generated content.
 */
class LocalePAxIN extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'pa-in';

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
        'xl24HourClock' => false,
        'xlNonEnglishFunctions' => false,
        'xlMetric' => true,
        'xlCurrencySpaceBefore' => true,
        'xlCurrencyBefore' => true,
        'xlCurrencyMinusSign' => true,
        'xlCurrencyTrailingZeros' => true,
        'xlCurrencyLeadingZeros' => true,
        'xlMonthLeadingZero' => true,
        'xlDayLeadingZero' => true,
        'xl4DigitYears' => false,
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
        'SPILL' => '#SPILL!',
        'CONNECT' => '#CONNECT!',
        'BLOCKED' => '#BLOCKED!',
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#FIELD!',
        'CALC' => '#CALC!',
        'EXTERNAL' => "#\u{A2C}\u{A3E}\u{A39}\u{A30}\u{A40}!",
    ];
}
