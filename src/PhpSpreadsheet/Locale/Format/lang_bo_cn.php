<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_bo_cn extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0451;

    /**
     * @var string The locale tag
     */
    protected $tag = "bo-cn";

    /**
     * @var string The currency code "¥"
     */
    protected $currencyCode = "¥";

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
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F0D}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F58}\u{F72}\u{F42}\u{F0B}\u{F51}\u{F58}\u{F62}\u{F0D}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F63}\u{FB7}\u{F42}\u{F0B}\u{F54}\u{F0D}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F55}\u{F74}\u{F62}\u{F0B}\u{F56}\u{F74}\u{F0D}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F54}\u{F0B}\u{F66}\u{F44}\u{F66}\u{F0D}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F66}\u{FA4}\u{F7A}\u{F53}\u{F0B}\u{F54}\u{F0D}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F49}\u{F72}\u{F0B}\u{F58}\u{F0D}",
        ],
        // Short name
        "short" => [
            "\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F0D}",
            "\u{F58}\u{F72}\u{F42}\u{F0B}\u{F51}\u{F58}\u{F62}\u{F0D}",
            "\u{F63}\u{FB7}\u{F42}\u{F0B}\u{F54}\u{F0D}",
            "\u{F55}\u{F74}\u{F62}\u{F0B}\u{F56}\u{F74}\u{F0D}",
            "\u{F54}\u{F0B}\u{F66}\u{F44}\u{F66}\u{F0D}",
            "\u{F66}\u{FA4}\u{F7A}\u{F53}\u{F0B}\u{F54}\u{F0D}",
            "\u{F49}\u{F72}\u{F0B}\u{F58}\u{F0D}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F51}\u{F44}\u{F0B}\u{F54}\u{F7C}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F42}\u{F49}\u{F72}\u{F66}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F42}\u{F66}\u{F74}\u{F58}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F5E}\u{F72}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F63}\u{F94}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F51}\u{FB2}\u{F74}\u{F42}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F51}\u{F74}\u{F53}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F62}\u{F92}\u{FB1}\u{F51}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F51}\u{F42}\u{F74}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F45}\u{F74}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F45}\u{F74}\u{F0B}\u{F42}\u{F45}\u{F72}\u{F42}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F45}\u{F74}\u{F0B}\u{F42}\u{F49}\u{F72}\u{F66}\u{F0B}\u{F54}\u{F0D}",
        ],
        // Short name
        "short" => [
            "\u{F5F}\u{FB3}\u{F0B} \u{F21}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F22}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F23}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F24}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F25}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F26}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F27}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F28}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F29}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F21}\u{F20}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F21}\u{F21}",
            "\u{F5F}\u{FB3}\u{F0B} \u{F21}\u{F22}",
        ],
    ];

}
