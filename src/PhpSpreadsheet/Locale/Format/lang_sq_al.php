<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_sq_al extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x041C;

    /**
     * @var string The locale tag
     */
    protected $tag = "sq-al";

    /**
     * @var string The currency code "Lekë"
     */
    protected $currencyCode = "Lekë";

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
            "e hënë",
            "e martë",
            "e mërkurë",
            "e enjte",
            "e premte",
            "e shtunë",
            "e diel",
        ],
        // Short name
        "short" => [
            "hën",
            "mar",
            "mër",
            "enj",
            "pre",
            "sht",
            "die",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "janar",
            "shkurt",
            "mars",
            "prill",
            "maj",
            "qershor",
            "korrik",
            "gusht",
            "shtator",
            "tetor",
            "nëntor",
            "dhjetor",
        ],
        // Short name
        "short" => [
            "jan",
            "shk",
            "mar",
            "pri",
            "maj",
            "qer",
            "krr",
            "gush",
            "sht",
            "tet",
            "nën",
            "dhj",
        ],
    ];

}
