<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_quz_pe extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0C6B;

    /**
     * @var string The locale tag
     */
    protected $tag = "quz-pe";

    /**
     * @var string The currency code "PEN"
     */
    protected $currencyCode = "PEN";

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
            "Lunes",
            "Martes",
            "Miércoles",
            "Jueves",
            "Viernes",
            "Sábado",
            "Domingo",
        ],
        // Short name
        "short" => [
            "Lun",
            "Mar",
            "Mié",
            "Jue",
            "Vie",
            "Sab",
            "Dom",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Qulla puquy",
            "Hatun puquy",
            "Pauqar waray",
            "ayriwa",
            "Aymuray",
            "Inti raymi",
            "Anta Sitwa",
            "Qhapaq Sitwa",
            "Uma raymi",
            "Kantaray",
            "Ayamarq'a",
            "Kapaq Raymi",
        ],
        // Short name
        "short" => [
            "Qul",
            "Hat",
            "Pau",
            "ayr",
            "Aym",
            "Int",
            "Ant",
            "Qha",
            "Uma",
            "Kan",
            "Aya",
            "Kap",
        ],
    ];

}
