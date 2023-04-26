<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_ca_es extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0403;

    /**
     * @var string The locale tag
     */
    protected $tag = "ca-es";

    /**
     * @var string The currency code "€"
     */
    protected $currencyCode = "\u{20AC}";

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
    protected $dateSeparator = "/";

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
            "dilluns",
            "dimarts",
            "dimecres",
            "dijous",
            "divendres",
            "dissabte",
            "diumenge",
        ],
        // Short name
        "short" => [
            "dl.",
            "dt.",
            "dc.",
            "dj.",
            "dv.",
            "ds.",
            "dg.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "gener",
            "febrer",
            "març",
            "abril",
            "maig",
            "juny",
            "juliol",
            "agost",
            "setembre",
            "octubre",
            "novembre",
            "desembre",
        ],
        // Short name
        "short" => [
            "gen.",
            "febr.",
            "març",
            "abr.",
            "maig",
            "juny",
            "jul.",
            "ag.",
            "set.",
            "oct.",
            "nov.",
            "des.",
        ],
    ];

}
