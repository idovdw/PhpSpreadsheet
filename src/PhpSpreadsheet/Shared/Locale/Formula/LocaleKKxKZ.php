<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for қазақ тілі / Kazakh (Kazakhstan).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleKKxKZ extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'kk-kz';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 7,
        'xlCountrySetting' => 7,
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
        'xlYearCode' => "\u{413}",
        'xlMonthCode' => "\u{41C}",
        'xlDayCode' => "\u{414}",
        'xlHourCode' => "\u{447}",
        'xlMinuteCode' => "\u{43C}",
        'xlSecondCode' => "\u{441}",
        'xlCurrencyCode' => "\u{20B8}",
        'xlGeneralFormatName' => "\u{41E}\u{441}\u{43D}\u{43E}\u{432}\u{43D}\u{43E}\u{439}",
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
        'SPILL' => "#\u{42B}\u{492}\u{42B}\u{421}\u{422}\u{42B}\u{420}\u{423}!",
        'CONNECT' => '#CONNECT!',
        'BLOCKED' => '#BLOCKED!',
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => "#\u{4E8}\u{420}\u{406}\u{421}!",
        'CALC' => '#CALC!',
        'EXTERNAL' => '#EXTERNAL!',
    ];
}