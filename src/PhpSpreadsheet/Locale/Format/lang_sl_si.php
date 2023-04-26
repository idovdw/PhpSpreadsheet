<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_sl_si extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0424;

    /**
     * @var string The locale tag
     */
    protected $tag = "sl-si";

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
            "ponedeljek",
            "torek",
            "sreda",
            "\u{10D}etrtek",
            "petek",
            "sobota",
            "nedelja",
        ],
        // Short name
        "short" => [
            "pon.",
            "tor.",
            "sre.",
            "\u{10D}et.",
            "pet.",
            "sob.",
            "ned.",
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
            "marec",
            "april",
            "maj",
            "junij",
            "julij",
            "avgust",
            "september",
            "oktober",
            "november",
            "december",
        ],
        // Short name
        "short" => [
            "jan.",
            "feb.",
            "mar.",
            "apr.",
            "maj",
            "jun.",
            "jul.",
            "avg.",
            "sep.",
            "okt.",
            "nov.",
            "dec.",
        ],
    ];

}
