<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_pa_arab_pk extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0846;

    /**
     * @var string The locale tag
     */
    protected $tag = "pa-arab-pk";

    /**
     * @var string The currency code "ر"
     */
    protected $currencyCode = "\u{631}";

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
            "\u{645}\u{646}\u{6AF}\u{644}",
            "\u{628}\u{62F}\u{6BE}",
            "\u{62C}\u{645}\u{639}\u{631}\u{627}\u{62A}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{647}\u{641}\u{62A}\u{647}",
            "\u{627}\u{62A}\u{648}\u{627}\u{631}",
            "\u{67E}\u{64A}\u{631}",
        ],
        // Short name
        "short" => [
            "\u{645}\u{646}\u{6AF}\u{644}",
            "\u{628}\u{62F}\u{6BE}",
            "\u{62C}\u{645}\u{639}\u{631}\u{627}\u{62A}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{647}\u{641}\u{62A}\u{647}",
            "\u{627}\u{62A}\u{648}\u{627}\u{631}",
            "\u{67E}\u{64A}\u{631}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{62C}\u{646}\u{648}\u{631}\u{6CC}",
            "\u{641}\u{631}\u{648}\u{631}\u{6CC}",
            "\u{645}\u{627}\u{631}\u{686}",
            "\u{627}\u{67E}\u{631}\u{6CC}\u{644}",
            "\u{645}\u{626}\u{6CC}",
            "\u{62C}\u{648}\u{646}",
            "\u{62C}\u{648}\u{644}\u{627}\u{626}\u{6CC}",
            "\u{627}\u{6AF}\u{633}\u{62A}",
            "\u{633}\u{62A}\u{645}\u{628}\u{631}",
            "\u{627}\u{6A9}\u{62A}\u{648}\u{628}\u{631}",
            "\u{646}\u{648}\u{645}\u{628}\u{631}",
            "\u{62F}\u{633}\u{645}\u{628}\u{631}",
        ],
        // Short name
        "short" => [
            "\u{62C}\u{646}\u{648}\u{631}\u{6CC}",
            "\u{641}\u{631}\u{648}\u{631}\u{6CC}",
            "\u{645}\u{627}\u{631}\u{686}",
            "\u{627}\u{67E}\u{631}\u{6CC}\u{644}",
            "\u{645}\u{626}\u{6CC}",
            "\u{62C}\u{648}\u{646}",
            "\u{62C}\u{648}\u{644}\u{627}\u{626}\u{6CC}",
            "\u{627}\u{6AF}\u{633}\u{62A}",
            "\u{633}\u{62A}\u{645}\u{628}\u{631}",
            "\u{627}\u{6A9}\u{62A}\u{648}\u{628}\u{631}",
            "\u{646}\u{648}\u{645}\u{628}\u{631}",
            "\u{62F}\u{633}\u{645}\u{628}\u{631}",
        ],
    ];

}
