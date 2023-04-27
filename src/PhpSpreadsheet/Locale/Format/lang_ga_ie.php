<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_ga_ie extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x083C;

    /**
     * @var string The locale tag
     */
    protected $tag = "ga-ie";

    /**
     * @var string The currency code "€"
     */
    protected $currencyCode = "\u{20AC}";

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
            "Dé Luain",
            "Dé Máirt",
            "Dé Céadaoin",
            "Déardaoin",
            "Dé hAoine",
            "Dé Sathairn",
            "Dé Domhnaigh",
        ],
        // Short name
        "short" => [
            "Luan",
            "Máirt",
            "Céad",
            "Déar",
            "Aoine",
            "Sath",
            "Domh",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Eanáir",
            "Feabhra",
            "Márta",
            "Aibreán",
            "Bealtaine",
            "Meitheamh",
            "Iúil",
            "Lúnasa",
            "Meán Fómhair",
            "Deireadh Fómhair",
            "Samhain",
            "Nollaig",
        ],
        // Short name
        "short" => [
            "Ean",
            "Feabh",
            "Márta",
            "Aib",
            "Beal",
            "Meith",
            "Iúil",
            "Lún",
            "MFómh",
            "DFómh",
            "Samh",
            "Noll",
        ],
    ];

}
