<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Hausa (Nigeria).
 *
 * Do not alter this file; it is generated content.
 */
class FormatHAxLATNxNG extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0468;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ha-latn-ng';

    /**
     * @var string The currency code "₦"
     */
    protected $strCurrencyCode = "\u{20A6}";

    /**
     * @var string The decimal separator "."
     */
    protected $strDecimalSeparator = '.';

    /**
     * @var string The thousands separator ","
     */
    protected $strThousandsSeparator = ',';

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = '/';

    /**
     * @var string The time separator
     */
    protected $strTimeSeparator = ':';

    /**
     * @var string[] The numerals representation (0 up to 9)
     */
    protected $aNumerals = [
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        // Full name
        'full' => [
            'Litinin',
            'Talata',
            'Laraba',
            'Alhamis',
            "Jumma\u{2BC}a",
            'Asabar',
            'Lahadi',
        ],
        // Short name
        'short' => [
            'Lit',
            'Tal',
            'Lar',
            'Alh',
            'Jum',
            'Asa',
            'Lah',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Janairu',
            'Fabrairu',
            'Maris',
            'Afirilu',
            'Mayu',
            'Yuni',
            'Yuli',
            'Agusta',
            'Satumba',
            'Oktoba',
            'Nuwamba',
            'Disamba',
        ],
        // Short name
        'short' => [
            'Jan',
            'Fab',
            'Mar',
            'Afi',
            'May',
            'Yun',
            'Yul',
            'Agu',
            'Sat',
            'Okt',
            'Nuw',
            'Dis',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        '\$ #,##0;\$ -#,##0' => '$ #,##0;$ -#,##0',
        '\$ #,##0;[Red]\$ -#,##0' => '$ #,##0;[Red]$ -#,##0',
        '\$ #,##0.00;\$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '\$ #,##0.00;[Red]\$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * \"-\"_ ;_ @_ ',
        '_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"mmmm d"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
