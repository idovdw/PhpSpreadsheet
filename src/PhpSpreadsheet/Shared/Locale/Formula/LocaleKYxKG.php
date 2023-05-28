<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for кыргызча / Kyrgyz (Kyrgyzstan).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleKYxKG extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'ky-kg';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 996,
        'xlCountrySetting' => 996,
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
        'xlDateSeparator' => '/',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{441}\u{43E}\u{43C}",
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
        'NULL' => "#\u{411}\u{41E}\u{428}!",
        'DIV0' => "#\u{411}\u{4E8}\u{41B}/0!",
        'VALUE' => "#\u{41D}\u{410}\u{420}\u{41A}!",
        'REF' => "#\u{41A}\u{410}\u{419}\u{420}!",
        'NAME' => "#\u{410}\u{422}\u{42B}?",
        'NUM' => "#\u{421}\u{410}\u{41D}!",
        'NA' => "#\u{411}/\u{411}",
        'GETTINGDATA' => "#\u{411}\u{415}\u{420}\u{418}\u{41B}\u{41C}\u{415}_\u{410}\u{41B}\u{423}\u{423}!",
        'SPILL' => "#\u{410}\u{428}\u{42B}\u{41F}\u{422}\u{410}\u{428}\u{423}\u{423}!",
        'CONNECT' => '#CONNECT!',
        'BLOCKED' => "#\u{411}\u{4E8}\u{413}\u{4E8}\u{41B}\u{413}\u{4E8}\u{41D}!",
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => "#\u{422}\u{410}\u{41B}\u{410}\u{410}!",
        'CALC' => '#CALC!',
        'EXTERNAL' => '#EXTERNAL!',
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $aFunctionsCurrent = [
        // Издөө жана сыдыруу функциялары (Lookup and reference functions)
        '*RC' => 'RC',

        // Статистикалык функциялар (Statistical functions)
        'FORECAST.ETS.STAT' => "\u{411}\u{41E}\u{41B}\u{416}\u{41E}\u{41B}.\u{41A}\u{416}.CTAT",
    ];
}
