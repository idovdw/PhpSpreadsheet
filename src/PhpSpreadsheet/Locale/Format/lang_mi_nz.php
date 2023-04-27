<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_mi_nz extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0481;

    /**
     * @var string The locale tag
     */
    protected $tag = "mi-nz";

    /**
     * @var string The currency code "$"
     */
    protected $currencyCode = "\$";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ".";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ",";

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
            "R\u{101}hina",
            "R\u{101}t\u{16B}",
            "R\u{101}apa",
            "R\u{101}pare",
            "R\u{101}mere",
            "R\u{101}horoi",
            "R\u{101}tapu",
        ],
        // Short name
        "short" => [
            "Hi",
            "T\u{16B}",
            "Apa",
            "Pa",
            "Me",
            "Ho",
            "Ta",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Kohit\u{101}tea",
            "Huitanguru",
            "Pout\u{16B}terangi",
            "Paengawh\u{101}wh\u{101}",
            "Haratua",
            "Pipiri",
            "H\u{14D}ngongoi",
            "Hereturik\u{14D}k\u{101}",
            "Mahuru",
            "Whiringa \u{101}-nuku",
            "Whiringa \u{101}-rangi",
            "Hakihea",
        ],
        // Short name
        "short" => [
            "Kohi",
            "Hui",
            "Pou",
            "Pae",
            "Hara",
            "Pipi",
            "H\u{14D}ngo",
            "Here",
            "Mahu",
            "Nuku",
            "Rangi",
            "Haki",
        ],
    ];

}
