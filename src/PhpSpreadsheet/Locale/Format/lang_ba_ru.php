<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_ba_ru extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x046D;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ba-ru';

    /**
     * @var string The currency code "RUB"
     */
    protected $currencyCode = 'RUB';

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ',';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = '.';

    /**
     * @var string The date separator
     */
    protected $dateSeparator = '-';

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
            "\u{414}\u{4AF}\u{448}\u{4D9}\u{43C}\u{431}\u{435}",
            "\u{428}\u{438}\u{448}\u{4D9}\u{43C}\u{431}\u{435}",
            "\u{428}\u{430}\u{440}\u{448}\u{430}\u{43C}\u{431}\u{44B}",
            "\u{41A}\u{435}\u{441}\u{430}\u{499}\u{43D}\u{430}",
            "\u{419}\u{43E}\u{43C}\u{430}",
            "\u{428}\u{4D9}\u{43C}\u{431}\u{435}",
            "\u{419}\u{4D9}\u{43A}\u{448}\u{4D9}\u{43C}\u{431}\u{435}",
        ],
        // Short name
        'short' => [
            "\u{414}\u{448}",
            "\u{428}\u{448}",
            "\u{428}\u{440}",
            "\u{41A}\u{441}",
            "\u{419}\u{43C}",
            "\u{428}\u{431}",
            "\u{419}\u{448}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{493}\u{438}\u{43D}\u{443}\u{430}\u{440}",
            "\u{444}\u{435}\u{432}\u{440}\u{430}\u{43B}\u{44C}",
            "\u{43C}\u{430}\u{440}\u{442}",
            "\u{430}\u{43F}\u{440}\u{435}\u{43B}\u{44C}",
            "\u{43C}\u{430}\u{439}",
            "\u{438}\u{44E}\u{43D}\u{44C}",
            "\u{438}\u{44E}\u{43B}\u{44C}",
            "\u{430}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{441}\u{435}\u{43D}\u{442}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{43E}\u{43A}\u{442}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{43D}\u{43E}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{434}\u{435}\u{43A}\u{430}\u{431}\u{440}\u{44C}",
        ],
        // Short name
        'short' => [
            "\u{493}\u{438}\u{43D}",
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
