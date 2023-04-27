<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_sk_sk extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x041B;

    /**
     * @var string The locale tag
     */
    protected $tag = "sk-sk";

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
    protected $thousandsSeparator = " ";

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
            "pondelok",
            "utorok",
            "streda",
            "\u{161}tvrtok",
            "piatok",
            "sobota",
            "nede\u{13E}a",
        ],
        // Short name
        "short" => [
            "po",
            "ut",
            "st",
            "\u{161}t",
            "pi",
            "so",
            "ne",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "január",
            "február",
            "marec",
            "apríl",
            "máj",
            "jún",
            "júl",
            "august",
            "september",
            "október",
            "november",
            "december",
        ],
        // Short name
        "short" => [
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9",
            "10",
            "11",
            "12",
        ],
    ];

}
