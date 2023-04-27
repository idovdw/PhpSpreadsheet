<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_ka_ge extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0437;

    /**
     * @var string The locale tag
     */
    protected $tag = "ka-ge";

    /**
     * @var string The currency code "₾"
     */
    protected $currencyCode = "\u{20BE}";

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
            "\u{10DD}\u{10E0}\u{10E8}\u{10D0}\u{10D1}\u{10D0}\u{10D7}\u{10D8}",
            "\u{10E1}\u{10D0}\u{10DB}\u{10E8}\u{10D0}\u{10D1}\u{10D0}\u{10D7}\u{10D8}",
            "\u{10DD}\u{10D7}\u{10EE}\u{10E8}\u{10D0}\u{10D1}\u{10D0}\u{10D7}\u{10D8}",
            "\u{10EE}\u{10E3}\u{10D7}\u{10E8}\u{10D0}\u{10D1}\u{10D0}\u{10D7}\u{10D8}",
            "\u{10DE}\u{10D0}\u{10E0}\u{10D0}\u{10E1}\u{10D9}\u{10D4}\u{10D5}\u{10D8}",
            "\u{10E8}\u{10D0}\u{10D1}\u{10D0}\u{10D7}\u{10D8}",
            "\u{10D9}\u{10D5}\u{10D8}\u{10E0}\u{10D0}",
        ],
        // Short name
        "short" => [
            "\u{10DD}\u{10E0}\u{10E8}.",
            "\u{10E1}\u{10D0}\u{10DB}\u{10E8}.",
            "\u{10DD}\u{10D7}\u{10EE}\u{10E8}.",
            "\u{10EE}\u{10E3}\u{10D7}\u{10E8}.",
            "\u{10DE}\u{10D0}\u{10E0}.",
            "\u{10E8}\u{10D0}\u{10D1}.",
            "\u{10D9}\u{10D5}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{10D8}\u{10D0}\u{10DC}\u{10D5}\u{10D0}\u{10E0}\u{10D8}",
            "\u{10D7}\u{10D4}\u{10D1}\u{10D4}\u{10E0}\u{10D5}\u{10D0}\u{10DA}\u{10D8}",
            "\u{10DB}\u{10D0}\u{10E0}\u{10E2}\u{10D8}",
            "\u{10D0}\u{10DE}\u{10E0}\u{10D8}\u{10DA}\u{10D8}",
            "\u{10DB}\u{10D0}\u{10D8}\u{10E1}\u{10D8}",
            "\u{10D8}\u{10D5}\u{10DC}\u{10D8}\u{10E1}\u{10D8}",
            "\u{10D8}\u{10D5}\u{10DA}\u{10D8}\u{10E1}\u{10D8}",
            "\u{10D0}\u{10D2}\u{10D5}\u{10D8}\u{10E1}\u{10E2}\u{10DD}",
            "\u{10E1}\u{10D4}\u{10E5}\u{10E2}\u{10D4}\u{10DB}\u{10D1}\u{10D4}\u{10E0}\u{10D8}",
            "\u{10DD}\u{10E5}\u{10E2}\u{10DD}\u{10DB}\u{10D1}\u{10D4}\u{10E0}\u{10D8}",
            "\u{10DC}\u{10DD}\u{10D4}\u{10DB}\u{10D1}\u{10D4}\u{10E0}\u{10D8}",
            "\u{10D3}\u{10D4}\u{10D9}\u{10D4}\u{10DB}\u{10D1}\u{10D4}\u{10E0}\u{10D8}",
        ],
        // Short name
        "short" => [
            "\u{10D8}\u{10D0}\u{10DC}",
            "\u{10D7}\u{10D4}\u{10D1}",
            "\u{10DB}\u{10D0}\u{10E0}",
            "\u{10D0}\u{10DE}\u{10E0}",
            "\u{10DB}\u{10D0}\u{10D8}",
            "\u{10D8}\u{10D5}\u{10DC}",
            "\u{10D8}\u{10D5}\u{10DA}",
            "\u{10D0}\u{10D2}\u{10D5}",
            "\u{10E1}\u{10D4}\u{10E5}",
            "\u{10DD}\u{10E5}\u{10E2}",
            "\u{10DC}\u{10DD}\u{10D4}",
            "\u{10D3}\u{10D4}\u{10D9}",
        ],
    ];

}
