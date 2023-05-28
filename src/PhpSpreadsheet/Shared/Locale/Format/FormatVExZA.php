<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Venda (South Africa).
 *
 * Do not alter this file; it is generated content.
 */
class FormatVExZA extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0433;

    /**
     * @var string The locale tag
     */
    protected $tag = 've-za';

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
            'Musumbuluwo',
            "\u{1E3C}avhuvhili",
            "\u{1E3C}avhuraru",
            "\u{1E3C}avhu\u{1E4B}a",
            "\u{1E3C}avhu\u{1E71}anu",
            'Mugivhela',
            'Swondaha',
        ],
        // Short name
        'short' => [
            'Mus',
            'Vhi',
            'Rar',
            "\u{1E4A}a",
            "\u{1E70}an",
            'Mug',
            'Swo',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Phando',
            'Luhuhi',
            "\u{1E70}hafamuhwe",
            'Lambamai',
            'Shundunthule',
            'Fulwi',
            'Fulwana',
            "\u{1E70}hangule",
            'Khubvumedzi',
            'Tshimedzi',
            "\u{1E3C}ara",
            'Nyendavhusiku',
        ],
        // Short name
        'short' => [
            'Pha',
            'Luh',
            "\u{1E70}hf",
            'Lam',
            'Shu',
            'Lwi',
            'Lwa',
            "\u{1E70}ha",
            'Khu',
            'Tsh',
            "\u{1E3C}ar",
            'Nye',
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
