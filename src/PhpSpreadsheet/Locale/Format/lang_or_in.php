<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_or_in extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0448;

    /**
     * @var string The locale tag
     */
    protected $tag = "or-in";

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
            "\u{B38}\u{B47}\u{B3E}\u{B2E}\u{B2C}\u{B3E}\u{B30}",
            "\u{B2E}\u{B19}\u{B4D}\u{B17}\u{B33}\u{B2C}\u{B3E}\u{B30}",
            "\u{B2C}\u{B41}\u{B27}\u{B2C}\u{B3E}\u{B30}",
            "\u{B17}\u{B41}\u{B30}\u{B41}\u{B2C}\u{B3E}\u{B30}",
            "\u{B36}\u{B41}\u{B15}\u{B4D}\u{B30}\u{B2C}\u{B3E}\u{B30}",
            "\u{B36}\u{B28}\u{B3F}\u{B2C}\u{B3E}\u{B30}",
            "\u{B30}\u{B2C}\u{B3F}\u{B2C}\u{B3E}\u{B30}",
        ],
        // Short name
        "short" => [
            "\u{B38}\u{B47}\u{B3E}\u{B2E}.",
            "\u{B2E}\u{B19}\u{B4D}\u{B17}\u{B33}.",
            "\u{B2C}\u{B41}\u{B27}.",
            "\u{B17}\u{B41}\u{B30}\u{B41}.",
            "\u{B36}\u{B41}\u{B15}\u{B4D}\u{B30}.",
            "\u{B36}\u{B28}\u{B3F}.",
            "\u{B30}\u{B2C}\u{B3F}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{B1C}\u{B3E}\u{B28}\u{B41}\u{B5F}\u{B3E}\u{B30}\u{B40}",
            "\u{B2B}\u{B47}\u{B2C}\u{B43}\u{B06}\u{B30}\u{B40}",
            "\u{B2E}\u{B3E}\u{B30}\u{B4D}\u{B1A}\u{B4D}\u{B1A}",
            "\u{B0F}\u{B2A}\u{B4D}\u{B30}\u{B3F}\u{B32}\u{B4D}\u{200C}",
            "\u{B2E}\u{B47}",
            "\u{B1C}\u{B41}\u{B28}\u{B4D}\u{200C}",
            "\u{B1C}\u{B41}\u{B32}\u{B3E}\u{B07}",
            "\u{B05}\u{B17}\u{B37}\u{B4D}\u{B1F}",
            "\u{B38}\u{B47}\u{B2A}\u{B4D}\u{B1F}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
            "\u{B05}\u{B15}\u{B4D}\u{B1F}\u{B4B}\u{B2C}\u{B30}",
            "\u{B28}\u{B2D}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
            "\u{B21}\u{B3F}\u{B38}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
        ],
        // Short name
        "short" => [
            "\u{B1C}\u{B3E}\u{B28}\u{B41}\u{B5F}\u{B3E}\u{B30}\u{B40}",
            "\u{B2B}\u{B47}\u{B2C}\u{B43}\u{B06}\u{B30}\u{B40}",
            "\u{B2E}\u{B3E}\u{B30}\u{B4D}\u{B1A}\u{B4D}\u{B1A}",
            "\u{B0F}\u{B2A}\u{B4D}\u{B30}\u{B3F}\u{B32}\u{B4D}\u{200C}",
            "\u{B2E}\u{B47}",
            "\u{B1C}\u{B41}\u{B28}\u{B4D}\u{200C}",
            "\u{B1C}\u{B41}\u{B32}\u{B3E}\u{B07}",
            "\u{B05}\u{B17}\u{B37}\u{B4D}\u{B1F}",
            "\u{B38}\u{B47}\u{B2A}\u{B4D}\u{B1F}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
            "\u{B05}\u{B15}\u{B4D}\u{B1F}\u{B4B}\u{B2C}\u{B30}",
            "\u{B28}\u{B2D}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
            "\u{B21}\u{B3F}\u{B38}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
        ],
    ];

}
