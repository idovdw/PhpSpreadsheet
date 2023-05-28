<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Noord-Sotho / Northern Sotho (South Africa).
 *
 * Do not alter this file; it is generated content.
 */
class FormatNSOxZA extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x046C;

    /**
     * @var string The locale tag
     */
    protected $tag = 'nso-za';

    /**
     * @var string The currency code "ZAR"
     */
    protected $strCurrencyCode = 'ZAR';

    /**
     * @var string The decimal separator ","
     */
    protected $strDecimalSeparator = ',';

    /**
     * @var string The thousands separator "."
     */
    protected $strThousandsSeparator = '.';

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = '-';

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
            'Musopologo',
            'Labobedi',
            'Laboraro',
            'Labone',
            'Labohlano',
            'Mokibelo',
            'Lamorena',
        ],
        // Short name
        'short' => [
            "Mo\u{161}",
            'Lbb',
            'Lbr',
            'Lbn',
            'Lbh',
            'Mok',
            'Lam',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Janaware',
            'Feberware',
            "Mat\u{161}he",
            'Aprele',
            'Mei',
            'June',
            'Julae',
            'Agostose',
            'Setemere',
            'Oktoboro',
            'Nofemere',
            'Disemere',
        ],
        // Short name
        'short' => [
            'Jan',
            'Feb',
            "Mat\u{161}",
            'Apr',
            'Mei',
            'June',
            'Julae',
            'Agost',
            'Set',
            'Oky',
            'Nof',
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
