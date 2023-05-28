<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for беларуская / Belarusian (Belarus).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleBExBY extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'be-by';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 375,
        'xlCountrySetting' => 375,
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
        'xlCurrencyCode' => 'Br',
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
        'xl4DigitYears' => false,
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
        'NULL' => "#\u{41F}\u{423}\u{421}\u{422}\u{410}!",
        'DIV0' => "#\u{414}\u{417}\u{42F}\u{41B}/0!",
        'VALUE' => "#\u{417}\u{41D}\u{410}\u{427}!",
        'REF' => "#\u{421}\u{41F}\u{410}\u{421}\u{42B}\u{41B}\u{41A}\u{410}!",
        'NAME' => "#\u{406}\u{41C}\u{42F}?",
        'NUM' => "#\u{41B}\u{406}\u{41A}!",
        'NA' => "#\u{41D}/\u{414}",
        'GETTINGDATA' => "#\u{410}\u{422}\u{420}\u{42B}\u{41C}\u{410}\u{41D}\u{41D}\u{415}_\u{414}\u{410}\u{414}\u{417}\u{415}\u{41D}\u{42B}\u{425}!",
        'SPILL' => "#\u{41F}\u{415}\u{420}\u{410}\u{426}\u{42F}\u{41A}\u{410}\u{41D}\u{41D}\u{415}!",
        'CONNECT' => "#\u{41F}\u{410}\u{414}\u{41B}\u{423}\u{427}\u{42D}\u{41D}\u{41D}\u{415}!",
        'BLOCKED' => "#\u{417}\u{410}\u{411}\u{41B}\u{410}\u{41A}\u{406}\u{420}\u{410}\u{412}\u{410}\u{41D}\u{410}!",
        'UNKNOWN' => "#\u{41D}\u{415}\u{412}\u{42F}\u{414}\u{41E}\u{41C}\u{410}!",
        'FIELD' => "#\u{41F}\u{41E}\u{41B}\u{415}!",
        'CALC' => "#\u{412}\u{42B}\u{41B}\u{406}\u{427}!",
        'EXTERNAL' => '#EXTERNAL!',
    ];
}
