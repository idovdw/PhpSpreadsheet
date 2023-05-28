<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for српски / Serbian (Serbia).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleSRxCYRLxRS extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'sr-cyrl-rs';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 381,
        'xlCountrySetting' => 381,
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
        'xlDateSeparator' => '.',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{434}\u{438}\u{43D}.",
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
        'DIV0' => '#DIV/0!',
        'VALUE' => '#VALUE!',
        'REF' => '#REF!',
        'NAME' => '#NAME?',
        'NUM' => '#NUM!',
        'NA' => '#N/A',
        'GETTINGDATA' => "#GETTING_DAT\u{410}!",
        'SPILL' => "#\u{41F}\u{420}\u{415}\u{41B}\u{418}\u{412}\u{410}\u{40A}\u{415}!",
        'CONNECT' => '#CONNECT!',
        'BLOCKED' => '#BLOCKED!',
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#FIELD!',
        'CALC' => '#CALC!',
        'EXTERNAL' => '#EXTERNAL!',
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $aFunctionsCurrent = [
        // Информативне функције (Information functions)
        'SHEETS' => "\u{41B}\u{418}\u{421}\u{422}\u{41E}\u{412}\u{418}",

        // Функције претраге и референце (Lookup and reference functions)
        '*RC' => 'RC',
        'FORMULATEXT' => "\u{422}\u{415}\u{41A}\u{421}\u{422}\u{424}\u{41E}\u{420}\u{41C}\u{423}\u{41B}\u{415}",

        // Математичке и тригонометријске функције (Math and trigonometry functions)
        'SEC' => "\u{421}\u{415}\u{41A}.",
    ];
}
