<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_uk_ua extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0422;

    /**
     * @var string The locale tag
     */
    protected $tag = "uk-ua";

    /**
     * @var string The currency code "₴"
     */
    protected $currencyCode = "\u{20B4}";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ",";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = " ";

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
            "\u{43F}\u{43E}\u{43D}\u{435}\u{434}\u{456}\u{43B}\u{43E}\u{43A}",
            "\u{432}\u{456}\u{432}\u{442}\u{43E}\u{440}\u{43E}\u{43A}",
            "\u{441}\u{435}\u{440}\u{435}\u{434}\u{430}",
            "\u{447}\u{435}\u{442}\u{432}\u{435}\u{440}",
            "\u{43F}'\u{44F}\u{442}\u{43D}\u{438}\u{446}\u{44F}",
            "\u{441}\u{443}\u{431}\u{43E}\u{442}\u{430}",
            "\u{43D}\u{435}\u{434}\u{456}\u{43B}\u{44F}",
        ],
        // Short name
        "short" => [
            "\u{41F}\u{43D}",
            "\u{412}\u{442}",
            "\u{421}\u{440}",
            "\u{427}\u{442}",
            "\u{41F}\u{442}",
            "\u{421}\u{431}",
            "\u{41D}\u{434}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{441}\u{456}\u{447}\u{435}\u{43D}\u{44C}",
            "\u{43B}\u{44E}\u{442}\u{438}\u{439}",
            "\u{431}\u{435}\u{440}\u{435}\u{437}\u{435}\u{43D}\u{44C}",
            "\u{43A}\u{432}\u{456}\u{442}\u{435}\u{43D}\u{44C}",
            "\u{442}\u{440}\u{430}\u{432}\u{435}\u{43D}\u{44C}",
            "\u{447}\u{435}\u{440}\u{432}\u{435}\u{43D}\u{44C}",
            "\u{43B}\u{438}\u{43F}\u{435}\u{43D}\u{44C}",
            "\u{441}\u{435}\u{440}\u{43F}\u{435}\u{43D}\u{44C}",
            "\u{432}\u{435}\u{440}\u{435}\u{441}\u{435}\u{43D}\u{44C}",
            "\u{436}\u{43E}\u{432}\u{442}\u{435}\u{43D}\u{44C}",
            "\u{43B}\u{438}\u{441}\u{442}\u{43E}\u{43F}\u{430}\u{434}",
            "\u{433}\u{440}\u{443}\u{434}\u{435}\u{43D}\u{44C}",
        ],
        // Short name
        "short" => [
            "\u{421}\u{456}\u{447}",
            "\u{41B}\u{44E}\u{442}",
            "\u{411}\u{435}\u{440}",
            "\u{41A}\u{432}\u{456}",
            "\u{422}\u{440}\u{430}",
            "\u{427}\u{435}\u{440}",
            "\u{41B}\u{438}\u{43F}",
            "\u{421}\u{435}\u{440}",
            "\u{412}\u{435}\u{440}",
            "\u{416}\u{43E}\u{432}",
            "\u{41B}\u{438}\u{441}",
            "\u{413}\u{440}\u{443}",
        ],
    ];

}
