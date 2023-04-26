<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_tk_tm extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0442;

    /**
     * @var string The locale tag
     */
    protected $tag = "tk-tm";

    /**
     * @var string The currency code "TMT"
     */
    protected $currencyCode = "TMT";

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
            "Du\u{15F}enbe",
            "Si\u{15F}enbe",
            "Çar\u{15F}enbe",
            "Pen\u{15F}enbe",
            "Anna",
            "\u{15E}enbe",
            "Ýek\u{15F}enbe",
        ],
        // Short name
        "short" => [
            "Db",
            "Sb",
            "Çb",
            "Pb",
            "An",
            "\u{15E}b",
            "Ýb",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Ýanwar",
            "Fewral",
            "Mart",
            "Aprel",
            "Ma\u{FD}",
            "l\u{FD}un",
            "l\u{FD}ul",
            "Awgust",
            "Sent\u{FD}abr",
            "Okt\u{FD}abr",
            "No\u{FD}abr",
            "Dekabr",
        ],
        // Short name
        "short" => [
            "Ýan",
            "Few",
            "Mart",
            "Apr",
            "Ma\u{FD}",
            "l\u{FD}un",
            "l\u{FD}ul",
            "Awg",
            "Sen",
            "Okt",
            "No\u{FD}",
            "Dek",
        ],
    ];

}
