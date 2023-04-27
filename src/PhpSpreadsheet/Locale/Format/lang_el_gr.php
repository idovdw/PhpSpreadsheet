<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_el_gr extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0408;

    /**
     * @var string The locale tag
     */
    protected $tag = "el-gr";

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
            "\u{394}\u{3B5}\u{3C5}\u{3C4}\u{3AD}\u{3C1}\u{3B1}",
            "\u{3A4}\u{3C1}\u{3AF}\u{3C4}\u{3B7}",
            "\u{3A4}\u{3B5}\u{3C4}\u{3AC}\u{3C1}\u{3C4}\u{3B7}",
            "\u{3A0}\u{3AD}\u{3BC}\u{3C0}\u{3C4}\u{3B7}",
            "\u{3A0}\u{3B1}\u{3C1}\u{3B1}\u{3C3}\u{3BA}\u{3B5}\u{3C5}\u{3AE}",
            "\u{3A3}\u{3AC}\u{3B2}\u{3B2}\u{3B1}\u{3C4}\u{3BF}",
            "\u{39A}\u{3C5}\u{3C1}\u{3B9}\u{3B1}\u{3BA}\u{3AE}",
        ],
        // Short name
        "short" => [
            "\u{394}\u{3B5}\u{3C5}",
            "\u{3A4}\u{3C1}\u{3B9}",
            "\u{3A4}\u{3B5}\u{3C4}",
            "\u{3A0}\u{3B5}\u{3BC}",
            "\u{3A0}\u{3B1}\u{3C1}",
            "\u{3A3}\u{3B1}\u{3B2}",
            "\u{39A}\u{3C5}\u{3C1}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{399}\u{3B1}\u{3BD}\u{3BF}\u{3C5}\u{3AC}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
            "\u{3A6}\u{3B5}\u{3B2}\u{3C1}\u{3BF}\u{3C5}\u{3AC}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
            "\u{39C}\u{3AC}\u{3C1}\u{3C4}\u{3B9}\u{3BF}\u{3C2}",
            "\u{391}\u{3C0}\u{3C1}\u{3AF}\u{3BB}\u{3B9}\u{3BF}\u{3C2}",
            "\u{39C}\u{3AC}\u{3B9}\u{3BF}\u{3C2}",
            "\u{399}\u{3BF}\u{3CD}\u{3BD}\u{3B9}\u{3BF}\u{3C2}",
            "\u{399}\u{3BF}\u{3CD}\u{3BB}\u{3B9}\u{3BF}\u{3C2}",
            "\u{391}\u{3CD}\u{3B3}\u{3BF}\u{3C5}\u{3C3}\u{3C4}\u{3BF}\u{3C2}",
            "\u{3A3}\u{3B5}\u{3C0}\u{3C4}\u{3AD}\u{3BC}\u{3B2}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
            "\u{39F}\u{3BA}\u{3C4}\u{3CE}\u{3B2}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
            "\u{39D}\u{3BF}\u{3AD}\u{3BC}\u{3B2}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
            "\u{394}\u{3B5}\u{3BA}\u{3AD}\u{3BC}\u{3B2}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
        ],
        // Short name
        "short" => [
            "\u{399}\u{3B1}\u{3BD}",
            "\u{3A6}\u{3B5}\u{3B2}",
            "\u{39C}\u{3B1}\u{3C1}",
            "\u{391}\u{3C0}\u{3C1}",
            "\u{39C}\u{3B1}\u{3CA}",
            "\u{399}\u{3BF}\u{3C5}\u{3BD}",
            "\u{399}\u{3BF}\u{3C5}\u{3BB}",
            "\u{391}\u{3C5}\u{3B3}",
            "\u{3A3}\u{3B5}\u{3C0}",
            "\u{39F}\u{3BA}\u{3C4}",
            "\u{39D}\u{3BF}\u{3B5}",
            "\u{394}\u{3B5}\u{3BA}",
        ],
    ];

}
