<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_sr_cyrl_cs extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0C1A;

    /**
     * @var string The locale tag
     */
    protected $tag = "sr-cyrl-cs";

    /**
     * @var string The currency code "CSD"
     */
    protected $currencyCode = "CSD";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ",";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ".";

    /**
     * @var string The date separator
     */
    protected $dateSeparator = ".";

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
        "full" => [
            "\u{43F}\u{43E}\u{43D}\u{435}\u{434}\u{435}\u{459}\u{430}\u{43A}",
            "\u{443}\u{442}\u{43E}\u{440}\u{430}\u{43A}",
            "\u{441}\u{440}\u{435}\u{434}\u{430}",
            "\u{447}\u{435}\u{442}\u{432}\u{440}\u{442}\u{430}\u{43A}",
            "\u{43F}\u{435}\u{442}\u{430}\u{43A}",
            "\u{441}\u{443}\u{431}\u{43E}\u{442}\u{430}",
            "\u{43D}\u{435}\u{434}\u{435}\u{459}\u{430}",
        ],
        // Short name
        "short" => [
            "\u{43F}\u{43E}\u{43D}.",
            "\u{443}\u{442}.",
            "\u{441}\u{440}.",
            "\u{447}\u{435}\u{442}.",
            "\u{43F}\u{435}\u{442}.",
            "\u{441}\u{443}\u{431}.",
            "\u{43D}\u{435}\u{434}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{458}\u{430}\u{43D}\u{443}\u{430}\u{440}",
            "\u{444}\u{435}\u{431}\u{440}\u{443}\u{430}\u{440}",
            "\u{43C}\u{430}\u{440}\u{442}",
            "\u{430}\u{43F}\u{440}\u{438}\u{43B}",
            "\u{43C}\u{430}\u{458}",
            "\u{458}\u{443}\u{43D}",
            "\u{458}\u{443}\u{43B}",
            "\u{430}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{441}\u{435}\u{43F}\u{442}\u{435}\u{43C}\u{431}\u{430}\u{440}",
            "\u{43E}\u{43A}\u{442}\u{43E}\u{431}\u{430}\u{440}",
            "\u{43D}\u{43E}\u{432}\u{435}\u{43C}\u{431}\u{430}\u{440}",
            "\u{434}\u{435}\u{446}\u{435}\u{43C}\u{431}\u{430}\u{440}",
        ],
        // Short name
        "short" => [
            "\u{458}\u{430}\u{43D}.",
            "\u{444}\u{435}\u{431}.",
            "\u{43C}\u{430}\u{440}\u{442}",
            "\u{430}\u{43F}\u{440}.",
            "\u{43C}\u{430}\u{458}",
            "\u{458}\u{443}\u{43D}",
            "\u{458}\u{443}\u{43B}",
            "\u{430}\u{432}\u{433}.",
            "\u{441}\u{435}\u{43F}\u{442}.",
            "\u{43E}\u{43A}\u{442}.",
            "\u{43D}\u{43E}\u{432}.",
            "\u{434}\u{435}\u{446}.",
        ],
    ];

}
