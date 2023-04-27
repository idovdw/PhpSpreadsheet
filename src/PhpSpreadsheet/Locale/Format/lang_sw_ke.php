<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_sw_ke extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0441;

    /**
     * @var string The locale tag
     */
    protected $tag = "sw-ke";

    /**
     * @var string The currency code "Ksh"
     */
    protected $currencyCode = "Ksh";

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
            "Jumatatu",
            "Jumanne",
            "Jumatano",
            "Alhamisi",
            "Ijumaa",
            "Jumamosi",
            "Jumapili",
        ],
        // Short name
        "short" => [
            "Jtt",
            "Jnn",
            "Jtn",
            "Alh",
            "Ijm",
            "Jms",
            "Jpl",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Januari",
            "Februari",
            "Machi",
            "Aprili",
            "Mei",
            "Juni",
            "Julai",
            "Agosti",
            "Septemba",
            "Oktoba",
            "Novemba",
            "Desemba",
        ],
        // Short name
        "short" => [
            "Jan",
            "Feb",
            "Mac",
            "Apr",
            "Mei",
            "Jun",
            "Jul",
            "Ago",
            "Sep",
            "Okt",
            "Nov",
            "Des",
        ],
    ];

}
