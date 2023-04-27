<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_af_za extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0436;

    /**
     * @var string The locale tag
     */
    protected $tag = "af-za";

    /**
     * @var string The currency code "R"
     */
    protected $currencyCode = "R";

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
            "Maandag",
            "Dinsdag",
            "Woensdag",
            "Donderdag",
            "Vrydag",
            "Saterdag",
            "Sondag",
        ],
        // Short name
        "short" => [
            "Ma.",
            "Di.",
            "Wo.",
            "Do.",
            "Vr.",
            "Sa.",
            "So.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Januarie",
            "Februarie",
            "Maart",
            "April",
            "Mei",
            "Junie",
            "Julie",
            "Augustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ],
        // Short name
        "short" => [
            "Jan.",
            "Feb.",
            "Mrt.",
            "Apr.",
            "Mei",
            "Jun.",
            "Jul.",
            "Aug.",
            "Sep.",
            "Okt.",
            "Nov.",
            "Des.",
        ],
    ];

}
