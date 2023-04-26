<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_fa_ir extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0429;

    /**
     * @var string The locale tag
     */
    protected $tag = "fa-ir";

    /**
     * @var string The currency code "ریال"
     */
    protected $currencyCode = "\u{631}\u{6CC}\u{627}\u{644}";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = "\u{66B}";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = "\u{66C}";

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
            "\u{62F}\u{648}\u{634}\u{646}\u{628}\u{647}",
            "\u{633}\u{647} \u{634}\u{646}\u{628}\u{647}",
            "\u{686}\u{647}\u{627}\u{631}\u{634}\u{646}\u{628}\u{647}",
            "\u{67E}\u{646}\u{62C}\u{634}\u{646}\u{628}\u{647}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{634}\u{646}\u{628}\u{647}",
            "\u{64A}\u{643}\u{634}\u{646}\u{628}\u{647}",
        ],
        // Short name
        "short" => [
            "\u{62F}\u{648}\u{634}\u{646}\u{628}\u{647}",
            "\u{633}\u{647} \u{634}\u{646}\u{628}\u{647}",
            "\u{686}\u{647}\u{627}\u{631}\u{634}\u{646}\u{628}\u{647}",
            "\u{67E}\u{646}\u{62C}\u{634}\u{646}\u{628}\u{647}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{634}\u{646}\u{628}\u{647}",
            "\u{64A}\u{643}\u{634}\u{646}\u{628}\u{647}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{698}\u{627}\u{646}\u{648}\u{64A}\u{647}",
            "\u{641}\u{648}\u{631}\u{64A}\u{647}",
            "\u{645}\u{627}\u{631}\u{633}",
            "\u{622}\u{648}\u{631}\u{64A}\u{644}",
            "\u{645}\u{647}",
            "\u{698}\u{648}\u{626}\u{646}",
            "\u{698}\u{648}\u{626}\u{64A}\u{647}",
            "\u{627}\u{648}\u{62A}",
            "\u{633}\u{67E}\u{62A}\u{627}\u{645}\u{628}\u{631}",
            "\u{627}\u{64F}\u{643}\u{62A}\u{628}\u{631}",
            "\u{646}\u{648}\u{627}\u{645}\u{628}\u{631}",
            "\u{62F}\u{633}\u{627}\u{645}\u{628}\u{631}",
        ],
        // Short name
        "short" => [
            "\u{698}\u{627}\u{646}\u{648}\u{64A}\u{647}",
            "\u{641}\u{648}\u{631}\u{64A}\u{647}",
            "\u{645}\u{627}\u{631}\u{633}",
            "\u{622}\u{648}\u{631}\u{64A}\u{644}",
            "\u{645}\u{647}",
            "\u{698}\u{648}\u{626}\u{646}",
            "\u{698}\u{648}\u{626}\u{64A}\u{647}",
            "\u{627}\u{648}\u{62A}",
            "\u{633}\u{67E}\u{62A}\u{627}\u{645}\u{628}\u{631}",
            "\u{627}\u{64F}\u{643}\u{62A}\u{628}\u{631}",
            "\u{646}\u{648}\u{627}\u{645}\u{628}\u{631}",
            "\u{62F}\u{633}\u{627}\u{645}\u{628}\u{631}",
        ],
    ];

}
