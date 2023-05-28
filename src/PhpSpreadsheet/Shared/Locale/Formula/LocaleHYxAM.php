<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for հայերեն / Armenian (Armenia).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleHYxAM extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'hy-am';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 374,
        'xlCountrySetting' => 374,
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
        'xlDateSeparator' => '.',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{58F}",
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
        'xlTimeLeadingZero' => true,
    ];

    /**
     * @var array<string,string> Error codes - Current
     */
    protected $aErrorCodesCurrent = [
        'NULL' => "#\u{536}\u{550}\u{548}!",
        'DIV0' => "#\u{532}\u{531}\u{53A}\u{531}\u{546}\u{548}\u{552}\u{544}/0!",
        'VALUE' => "#\u{531}\u{550}\u{53A}\u{535}\u{554}!",
        'REF' => "#\u{540}\u{542}\u{548}\u{552}\u{544}!",
        'NAME' => "#\u{531}\u{546}\u{548}\u{552}\u{546}?",
        'NUM' => "#\u{539}\u{53B}\u{54E}!",
        'NA' => "#\u{53F}\u{53B}\u{54C}/\u{549}\u{537}",
        'GETTINGDATA' => "#\u{54F}\u{54E}\u{545}\u{531}\u{53C}\u{546}\u{535}\u{550}\u{53B}_\u{54D}\u{54F}\u{531}\u{551}\u{548}\u{552}\u{544}!",
        'SPILL' => "#\u{54E}\u{531}\u{546}\u{534}\u{531}\u{53F}\u{531}\u{540}\u{531}\u{54F}\u{548}\u{552}\u{544}!",
        'CONNECT' => "#\u{53F}\u{531}\u{54A}\u{531}\u{53F}\u{551}\u{548}\u{552}\u{544}!",
        'BLOCKED' => "#\u{531}\u{550}\u{533}\u{535}\u{53C}\u{531}\u{553}\u{531}\u{53F}\u{54E}\u{531}\u{53E}!",
        'UNKNOWN' => "#\u{531}\u{546}\u{540}\u{531}\u{545}\u{54F}!",
        'FIELD' => "#\u{534}\u{531}\u{547}\u{54F}!",
        'CALC' => "#\u{540}\u{531}\u{547}\u{54E}\u{531}\u{550}\u{53F}!",
        'EXTERNAL' => '#EXTERNAL!',
    ];
}
