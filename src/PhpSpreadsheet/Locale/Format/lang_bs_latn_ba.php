<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_bs_latn_ba extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x141A;

    /**
     * @var string The locale tag
     */
    protected $tag = "bs-latn-ba";

    /**
     * @var string The currency code "KM"
     */
    protected $currencyCode = "KM";

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
    protected $dateSeparator = ". ";

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
            "ponedjeljak",
            "utorak",
            "srijeda",
            "\u{10D}etvrtak",
            "petak",
            "subota",
            "nedjelja",
        ],
        // Short name
        "short" => [
            "pon",
            "uto",
            "sri",
            "\u{10D}et",
            "pet",
            "sub",
            "ned",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "januar",
            "februar",
            "mart",
            "april",
            "maj",
            "juni",
            "juli",
            "august",
            "septembar",
            "oktobar",
            "novembar",
            "decembar",
        ],
        // Short name
        "short" => [
            "jan",
            "feb",
            "mar",
            "apr",
            "maj",
            "jun",
            "jul",
            "aug",
            "sep",
            "okt",
            "nov",
            "dec",
        ],
    ];

}
