<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_be_by extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0423;

    /**
     * @var string The locale tag
     */
    protected $tag = "be-by";

    /**
     * @var string The currency code "Br"
     */
    protected $currencyCode = "Br";

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
            "\u{43F}\u{430}\u{43D}\u{44F}\u{434}\u{437}\u{435}\u{43B}\u{430}\u{43A}",
            "\u{430}\u{45E}\u{442}\u{43E}\u{440}\u{430}\u{43A}",
            "\u{441}\u{435}\u{440}\u{430}\u{434}\u{430}",
            "\u{447}\u{430}\u{446}\u{432}\u{435}\u{440}",
            "\u{43F}\u{44F}\u{442}\u{43D}\u{456}\u{446}\u{430}",
            "\u{441}\u{443}\u{431}\u{43E}\u{442}\u{430}",
            "\u{43D}\u{44F}\u{434}\u{437}\u{435}\u{43B}\u{44F}",
        ],
        // Short name
        "short" => [
            "\u{43F}\u{43D}",
            "\u{430}\u{45E}\u{442}",
            "\u{441}\u{440}",
            "\u{447}\u{446}",
            "\u{43F}\u{442}",
            "\u{441}\u{431}",
            "\u{43D}\u{434}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{441}\u{442}\u{443}\u{434}\u{437}\u{435}\u{43D}\u{44C}",
            "\u{43B}\u{44E}\u{442}\u{44B}",
            "\u{441}\u{430}\u{43A}\u{430}\u{432}\u{456}\u{43A}",
            "\u{43A}\u{440}\u{430}\u{441}\u{430}\u{432}\u{456}\u{43A}",
            "\u{43C}\u{430}\u{439}",
            "\u{447}\u{44D}\u{440}\u{432}\u{435}\u{43D}\u{44C}",
            "\u{43B}\u{456}\u{43F}\u{435}\u{43D}\u{44C}",
            "\u{436}\u{43D}\u{456}\u{432}\u{435}\u{43D}\u{44C}",
            "\u{432}\u{435}\u{440}\u{430}\u{441}\u{435}\u{43D}\u{44C}",
            "\u{43A}\u{430}\u{441}\u{442}\u{440}\u{44B}\u{447}\u{43D}\u{456}\u{43A}",
            "\u{43B}\u{456}\u{441}\u{442}\u{430}\u{43F}\u{430}\u{434}",
            "\u{441}\u{43D}\u{435}\u{436}\u{430}\u{43D}\u{44C}",
        ],
        // Short name
        "short" => [
            "\u{441}\u{442}\u{443}\u{434}\u{437}",
            "\u{43B}\u{44E}\u{442}",
            "\u{441}\u{430}\u{43A}",
            "\u{43A}\u{440}\u{430}\u{441}",
            "\u{43C}\u{430}\u{439}",
            "\u{447}\u{44D}\u{440}\u{432}",
            "\u{43B}\u{456}\u{43F}",
            "\u{436}\u{43D}",
            "\u{432}\u{435}\u{440}",
            "\u{43A}\u{430}\u{441}\u{442}\u{440}",
            "\u{43B}\u{456}\u{441}\u{442}",
            "\u{441}\u{43D}\u{435}\u{436}",
        ],
    ];

}
