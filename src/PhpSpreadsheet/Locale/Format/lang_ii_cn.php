<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_ii_cn extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0478;

    /**
     * @var string The locale tag
     */
    protected $tag = "ii-cn";

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
            "\u{A18F}\u{A282}\u{A494}",
            "\u{A18F}\u{A282}\u{A44D}",
            "\u{A18F}\u{A282}\u{A315}",
            "\u{A18F}\u{A282}\u{A1D6}",
            "\u{A18F}\u{A282}\u{A26C}",
            "\u{A18F}\u{A282}\u{A0D8}",
            "\u{A46D}\u{A18F}\u{A44D}",
        ],
        // Short name
        "short" => [
            "\u{A18F}\u{A494}",
            "\u{A18F}\u{A44D}",
            "\u{A18F}\u{A315}",
            "\u{A18F}\u{A1D6}",
            "\u{A18F}\u{A26C}",
            "\u{A18F}\u{A0D8}",
            "\u{A46D}\u{A18F}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{A2CD}\u{A1AA}",
            "\u{A44D}\u{A1AA}",
            "\u{A315}\u{A1AA}",
            "\u{A1D6}\u{A1AA}",
            "\u{A26C}\u{A1AA}",
            "\u{A0D8}\u{A1AA}",
            "\u{A3C3}\u{A1AA}",
            "\u{A246}\u{A1AA}",
            "\u{A22C}\u{A1AA}",
            "\u{A2B0}\u{A1AA}",
            "\u{A2AF}\u{A2AA}\u{A1AA}",
            "\u{A2B0}\u{A44B}\u{A1AA}",
        ],
        // Short name
        "short" => [
            "\u{A2CD}\u{A1AA}",
            "\u{A44D}\u{A1AA}",
            "\u{A315}\u{A1AA}",
            "\u{A1D6}\u{A1AA}",
            "\u{A26C}\u{A1AA}",
            "\u{A0D8}\u{A1AA}",
            "\u{A3C3}\u{A1AA}",
            "\u{A246}\u{A1AA}",
            "\u{A22C}\u{A1AA}",
            "\u{A2B0}\u{A1AA}",
            "\u{A2AF}\u{A2AA}\u{A1AA}",
            "\u{A2B0}\u{A44B}\u{A1AA}",
        ],
    ];

}
