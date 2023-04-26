<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_fil_ph extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0464;

    /**
     * @var string The locale tag
     */
    protected $tag = "fil-ph";

    /**
     * @var string The currency code "₱"
     */
    protected $currencyCode = "\u{20B1}";

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
            "Lunes",
            "Martes",
            "Miyerkules",
            "Huwebes",
            "Biyernes",
            "Sabado",
            "Linggo",
        ],
        // Short name
        "short" => [
            "Lun",
            "Mar",
            "Miy",
            "Huw",
            "Biy",
            "Sab",
            "Lin",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Enero",
            "Pebrero",
            "Marso",
            "Abril",
            "Mayo",
            "Hunyo",
            "Hulyo",
            "Agosto",
            "Setyembre",
            "Oktubre",
            "Nobyembre",
            "Disyembre",
        ],
        // Short name
        "short" => [
            "Ene",
            "Peb",
            "Mar",
            "Abr",
            "May",
            "Hun",
            "Hul",
            "Ago",
            "Set",
            "Okt",
            "Nob",
            "Dis",
        ],
    ];

}
