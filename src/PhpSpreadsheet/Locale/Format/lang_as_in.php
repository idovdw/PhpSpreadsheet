<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_as_in extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x044D;

    /**
     * @var string The locale tag
     */
    protected $tag = "as-in";

    /**
     * @var string The currency code "₹"
     */
    protected $currencyCode = "\u{20B9}";

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
            "\u{9B8}\u{9CB}\u{9AE}\u{9AC}\u{9BE}\u{9F0}",
            "\u{9AE}\u{999}\u{9CD}\u{997}\u{9B2}\u{9AC}\u{9BE}\u{9F0}",
            "\u{9AC}\u{9C1}\u{9A7}\u{9AC}\u{9BE}\u{9F0}",
            "\u{9AC}\u{9C3}\u{9B9}\u{9B8}\u{9CD}\u{9AA}\u{9A4}\u{9BF}\u{9AC}\u{9BE}\u{9F0}",
            "\u{9B6}\u{9C1}\u{995}\u{9CD}\u{9B0}\u{9AC}\u{9BE}\u{9F0}",
            "\u{9B6}\u{9A8}\u{9BF}\u{9AC}\u{9BE}\u{9F0}",
            "\u{9F0}\u{9AC}\u{9BF}\u{9AC}\u{9BE}\u{9F0}",
        ],
        // Short name
        "short" => [
            "\u{9B8}\u{9CB}\u{9AE}.",
            "\u{9AE}\u{999}\u{9CD}\u{997}\u{9B2}.",
            "\u{9AC}\u{9C1}\u{9A7}.",
            "\u{9AC}\u{9C3}\u{9B9}.",
            "\u{9B6}\u{9C1}\u{995}\u{9CD}\u{9B0}.",
            "\u{9B6}\u{9A8}\u{9BF}.",
            "\u{9F0}\u{9AC}\u{9BF}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{99C}\u{9BE}\u{9A8}\u{9C1}\u{9F1}\u{9BE}\u{9F0}\u{9C0}",
            "\u{9AB}\u{9C7}\u{9AC}\u{9CD}\u{9B0}\u{9C1}\u{9F1}\u{9BE}\u{9F0}\u{9C0}",
            "\u{9AE}\u{9BE}\u{9B0}\u{9CD}\u{99A}",
            "\u{98F}\u{9AA}\u{9CD}\u{9B0}\u{9BF}\u{9B2}",
            "\u{9AE}\u{9C7}",
            "\u{99C}\u{9C1}\u{9A8}",
            "\u{99C}\u{9C1}\u{9B2}\u{9BE}\u{987}",
            "\u{986}\u{997}\u{9B7}\u{9CD}\u{99F}",
            "\u{99A}\u{9C7}\u{9AA}\u{9CD}\u{99F}\u{9C7}\u{9AE}\u{9CD}\u{9AC}\u{9F0}",
            "\u{985}\u{995}\u{9CD}\u{99F}\u{9CB}\u{9AC}\u{9F0}",
            "\u{9A8}\u{9AC}\u{9C7}\u{9AE}\u{9CD}\u{9AC}\u{9F0}",
            "\u{9A1}\u{9BF}\u{99A}\u{9C7}\u{9AE}\u{9CD}\u{9AC}\u{9F0}",
        ],
        // Short name
        "short" => [
            "\u{99C}\u{9BE}\u{9A8}\u{9C1}",
            "\u{9AB}\u{9C7}\u{9AC}\u{9CD}\u{9B0}\u{9C1}",
            "\u{9AE}\u{9BE}\u{9B0}\u{9CD}\u{99A}",
            "\u{98F}\u{9AA}\u{9CD}\u{9B0}\u{9BF}\u{9B2}",
            "\u{9AE}\u{9C7}",
            "\u{99C}\u{9C1}\u{9A8}",
            "\u{99C}\u{9C1}\u{9B2}\u{9BE}\u{987}",
            "\u{986}\u{997}\u{9B7}\u{9CD}\u{99F}",
            "\u{99A}\u{9C7}\u{9AA}\u{9CD}\u{99F}\u{9C7}",
            "\u{985}\u{995}\u{9CD}\u{99F}\u{9CB}",
            "\u{9A8}\u{9AC}\u{9C7}",
            "\u{9A1}\u{9BF}\u{99A}\u{9C7}",
        ],
    ];

}
