<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_lt_lt extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0427;

    /**
     * @var string The locale tag
     */
    protected $tag = "lt-lt";

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
    protected $thousandsSeparator = " ";

    /**
     * @var string The date separator
     */
    protected $dateSeparator = "-";

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
            "pirmadienis",
            "antradienis",
            "tre\u{10D}iadienis",
            "ketvirtadienis",
            "penktadienis",
            "\u{161}e\u{161}tadienis",
            "sekmadienis",
        ],
        // Short name
        "short" => [
            "pr",
            "an",
            "tr",
            "kt",
            "pn",
            "\u{161}t",
            "sk",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "sausis",
            "vasaris",
            "kovas",
            "balandis",
            "gegu\u{17E}\u{117}",
            "bir\u{17E}elis",
            "liepa",
            "rugpj\u{16B}tis",
            "rugs\u{117}jis",
            "spalis",
            "lapkritis",
            "gruodis",
        ],
        // Short name
        "short" => [
            "saus.",
            "vas.",
            "kov.",
            "bal.",
            "geg.",
            "bir\u{17E}.",
            "liep.",
            "rugp.",
            "rugs.",
            "spal.",
            "lapkr.",
            "gruod.",
        ],
    ];

}
