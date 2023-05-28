<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for ئۇيغۇرچە / Uyghur (People\'s Republic of China).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleUGxCN extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'ug-cn';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 86,
        'xlCountrySetting' => 86,
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
        'xlCurrencyCode' => '¥',
        'xlGeneralFormatName' => "G/\u{901A}\u{7528}\u{683C}\u{5F0F}",
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 2,
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
        'xlMonthLeadingZero' => false,
        'xlDayLeadingZero' => false,
        'xl4DigitYears' => true,
        'xlMDY' => true,
        'xlTimeLeadingZero' => false,
    ];

    /**
     * @var array<string,string> Error codes - Current
     */
    protected $aErrorCodesCurrent = [
        'NULL' => "#\u{642}\u{6C7}\u{631}\u{6C7}\u{642}!",
        'DIV0' => "#\u{643}\u{627}\u{62A}\u{6D5}\u{643}\u{686}\u{6D5}/0!",
        'VALUE' => "#\u{642}\u{649}\u{645}\u{645}\u{649}\u{62A}\u{649}\u{61F}!",
        'REF' => '#REF!',
        'NAME' => "#\u{646}\u{627}\u{645}\u{649}\u{61F}?",
        'NUM' => '#NUM!',
        'NA' => '#N/A',
        'GETTINGDATA' => '#GETTING_DATA!',
        'SPILL' => "#\u{62A}\u{6D0}\u{634}\u{649}\u{634}!",
        'CONNECT' => "#\u{626}\u{6C7}\u{644}\u{627}\u{634}!",
        'BLOCKED' => "#\u{62A}\u{648}\u{633}\u{6C7}\u{642}!",
        'UNKNOWN' => "#\u{626}\u{6D0}\u{646}\u{649}\u{642}\u{633}\u{649}\u{632}!",
        'FIELD' => "#\u{628}\u{6C6}\u{644}\u{6D5}\u{643}!",
        'CALC' => "#\u{6BE}\u{6D0}\u{633}\u{627}\u{628}\u{644}\u{627}\u{634}!",
        'EXTERNAL' => '#EXTERNAL!',
    ];
}
