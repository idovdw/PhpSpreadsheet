<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_vi_vn extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x042A;

    /**
     * @var string The locale tag
     */
    protected $tag = "vi-vn";

    /**
     * @var string The currency code "₫"
     */
    protected $currencyCode = "\u{20AB}";

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
            "Th\u{1B0}\u{301} Hai",
            "Th\u{1B0}\u{301} Ba",
            "Th\u{1B0}\u{301} T\u{1B0}",
            "Th\u{1B0}\u{301} N\u{103}m",
            "Th\u{1B0}\u{301} Sa\u{301}u",
            "Th\u{1B0}\u{301} Ba\u{309}y",
            "Chu\u{309} Nhâ\u{323}t",
        ],
        // Short name
        "short" => [
            "T2",
            "T3",
            "T4",
            "T5",
            "T6",
            "T7",
            "CN",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Tha\u{301}ng Giêng",
            "Tha\u{301}ng Hai",
            "Tha\u{301}ng Ba",
            "Tha\u{301}ng T\u{1B0}",
            "Tha\u{301}ng N\u{103}m",
            "Tha\u{301}ng Sa\u{301}u",
            "Tha\u{301}ng Ba\u{309}y",
            "Tha\u{301}ng Ta\u{301}m",
            "Tha\u{301}ng Chi\u{301}n",
            "Tha\u{301}ng M\u{1B0}\u{1A1}\u{300}i",
            "Tha\u{301}ng M\u{1B0}\u{1A1}\u{300}i Mô\u{323}t",
            "Tha\u{301}ng M\u{1B0}\u{1A1}\u{300}i Hai",
        ],
        // Short name
        "short" => [
            "Thg1",
            "Thg2",
            "Thg3",
            "Thg4",
            "Thg5",
            "Thg6",
            "Thg7",
            "Thg8",
            "Thg9",
            "Thg10",
            "Thg11",
            "Thg12",
        ],
    ];

}
