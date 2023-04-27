<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_tg_cyrl_tj extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0428;

    /**
     * @var string The locale tag
     */
    protected $tag = 'tg-cyrl-tj';

    /**
     * @var string The currency code "сом."
     */
    protected $currencyCode = "\u{441}\u{43E}\u{43C}.";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ',';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = "\u{a0}";

    /**
     * @var string The date separator
     */
    protected $dateSeparator = '/';

    /**
     * @var string[] The numerals representation (0 up to 9)
     */
    protected $numerals = [
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $weekdayNames = [
        // Full name
        'full' => [
            "\u{434}\u{443}\u{448}\u{430}\u{43D}\u{431}\u{435}",
            "\u{441}\u{435}\u{448}\u{430}\u{43D}\u{431}\u{435}",
            "\u{447}\u{43E}\u{440}\u{448}\u{430}\u{43D}\u{431}\u{435}",
            "\u{43F}\u{430}\u{43D}\u{4B7}\u{448}\u{430}\u{43D}\u{431}\u{435}",
            "\u{4B7}\u{443}\u{43C}\u{44A}\u{430}",
            "\u{448}\u{430}\u{43D}\u{431}\u{435}",
            "\u{42F}\u{43A}\u{448}\u{430}\u{43D}\u{431}\u{435}",
        ],
        // Short name
        'short' => [
            "\u{434}\u{448}\u{431}",
            "\u{441}\u{448}\u{431}",
            "\u{447}\u{448}\u{431}",
            "\u{43F}\u{448}\u{431}",
            "\u{4B7}\u{443}\u{43C}",
            "\u{448}\u{43D}\u{431}",
            "\u{43F}\u{43A}\u{448}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{44F}\u{43D}\u{432}\u{430}\u{440}",
            "\u{444}\u{435}\u{432}\u{440}\u{430}\u{43B}",
            "\u{43C}\u{430}\u{440}\u{442}",
            "\u{430}\u{43F}\u{440}\u{435}\u{43B}",
            "\u{43C}\u{430}\u{439}",
            "\u{438}\u{44E}\u{43D}",
            "\u{438}\u{44E}\u{43B}",
            "\u{430}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{441}\u{435}\u{43D}\u{442}\u{44F}\u{431}\u{440}",
            "\u{43E}\u{43A}\u{442}\u{44F}\u{431}\u{440}",
            "\u{43D}\u{43E}\u{44F}\u{431}\u{440}",
            "\u{434}\u{435}\u{43A}\u{430}\u{431}\u{440}",
        ],
        // Short name
        'short' => [
            "\u{44F}\u{43D}\u{432}",
            "\u{444}\u{435}\u{432}",
            "\u{43C}\u{430}\u{440}",
            "\u{430}\u{43F}\u{440}",
            "\u{43C}\u{430}\u{439}",
            "\u{438}\u{44E}\u{43D}",
            "\u{438}\u{44E}\u{43B}",
            "\u{430}\u{432}\u{433}",
            "\u{441}\u{435}\u{43D}",
            "\u{43E}\u{43A}\u{442}",
            "\u{43D}\u{43E}\u{44F}",
            "\u{434}\u{435}\u{43A}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        '$ #,##0;$ -#,##0' => '$ #,##0;$ -#,##0',
        '$ #,##0;[Red]$ -#,##0' => '$ #,##0;[Red]$ -#,##0',
        '$ #,##0.00;$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '$ #,##0.00;[Red]$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ',
        '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"mmmm d"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
