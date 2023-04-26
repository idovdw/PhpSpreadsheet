<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_he_il extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x040D;

    /**
     * @var string The locale tag
     */
    protected $tag = "he-il";

    /**
     * @var string The currency code "₪"
     */
    protected $currencyCode = "\u{20AA}";

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
            "\u{5D9}\u{5D5}\u{5DD} \u{5E9}\u{5E0}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5DD} \u{5E9}\u{5DC}\u{5D9}\u{5E9}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5DD} \u{5E8}\u{5D1}\u{5D9}\u{5E2}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5DD} \u{5D7}\u{5DE}\u{5D9}\u{5E9}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5DD} \u{5E9}\u{5D9}\u{5E9}\u{5D9}",
            "\u{5E9}\u{5D1}\u{5EA}",
            "\u{5D9}\u{5D5}\u{5DD} \u{5E8}\u{5D0}\u{5E9}\u{5D5}\u{5DF}",
        ],
        // Short name
        "short" => [
            "\u{5D9}\u{5D5}\u{5DD} \u{5D1}",
            "\u{5D9}\u{5D5}\u{5DD} \u{5D2}",
            "\u{5D9}\u{5D5}\u{5DD} \u{5D3}",
            "\u{5D9}\u{5D5}\u{5DD} \u{5D4}",
            "\u{5D9}\u{5D5}\u{5DD} \u{5D5}",
            "\u{5E9}\u{5D1}\u{5EA}",
            "\u{5D9}\u{5D5}\u{5DD} \u{5D0}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{5D9}\u{5E0}\u{5D5}\u{5D0}\u{5E8}",
            "\u{5E4}\u{5D1}\u{5E8}\u{5D5}\u{5D0}\u{5E8}",
            "\u{5DE}\u{5E8}\u{5E5}",
            "\u{5D0}\u{5E4}\u{5E8}\u{5D9}\u{5DC}",
            "\u{5DE}\u{5D0}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5E0}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5DC}\u{5D9}",
            "\u{5D0}\u{5D5}\u{5D2}\u{5D5}\u{5E1}\u{5D8}",
            "\u{5E1}\u{5E4}\u{5D8}\u{5DE}\u{5D1}\u{5E8}",
            "\u{5D0}\u{5D5}\u{5E7}\u{5D8}\u{5D5}\u{5D1}\u{5E8}",
            "\u{5E0}\u{5D5}\u{5D1}\u{5DE}\u{5D1}\u{5E8}",
            "\u{5D3}\u{5E6}\u{5DE}\u{5D1}\u{5E8}",
        ],
        // Short name
        "short" => [
            "\u{5D9}\u{5E0}\u{5D5}",
            "\u{5E4}\u{5D1}\u{5E8}",
            "\u{5DE}\u{5E8}\u{5E5}",
            "\u{5D0}\u{5E4}\u{5E8}",
            "\u{5DE}\u{5D0}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5E0}",
            "\u{5D9}\u{5D5}\u{5DC}",
            "\u{5D0}\u{5D5}\u{5D2}",
            "\u{5E1}\u{5E4}\u{5D8}",
            "\u{5D0}\u{5D5}\u{5E7}",
            "\u{5E0}\u{5D5}\u{5D1}",
            "\u{5D3}\u{5E6}\u{5DE}",
        ],
    ];

}
