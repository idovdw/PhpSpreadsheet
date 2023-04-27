<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_sd_arab_pk extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0859;

    /**
     * @var string The locale tag
     */
    protected $tag = 'sd-arab-pk';

    /**
     * @var string The currency code "Rs"
     */
    protected $currencyCode = 'Rs';

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
    protected $dateSeparator = '-';

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
        'full' => [
            "\u{627}\u{6B1}\u{627}\u{631}\u{648}",
            "\u{627}\u{631}\u{628}\u{639}",
            "\u{62E}\u{645}\u{64A}\u{633}",
            "\u{62C}\u{645}\u{639}\u{648}",
            "\u{687}\u{646}\u{687}\u{631}",
            "\u{622}\u{686}\u{631}",
            "\u{633}\u{648}\u{645}\u{631}",
        ],
        // Short name
        'short' => [
            "\u{627}\u{6B1}",
            "\u{627}\u{631}",
            "\u{62E}\u{645}",
            "\u{62C}\u{645}\u{639}\u{648}",
            "\u{687}\u{646}",
            "\u{622}\u{686}",
            "\u{633}\u{648}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{62C}\u{646}\u{648}\u{631}\u{64A}",
            "\u{641}\u{631}\u{648}\u{631}\u{64A}",
            "\u{645}\u{627}\u{631}\u{686}",
            "\u{627}\u{67E}\u{631}\u{64A}\u{644}",
            "\u{645}\u{654}\u{64A}",
            "\u{62C}\u{648}\u{646}",
            "\u{62C}\u{648}\u{644}\u{627}\u{621}\u{650}",
            "\u{622}\u{6AF}\u{633}\u{62A}",
            "\u{633}\u{62A}\u{645}\u{628}\u{631}",
            "\u{622}\u{6A9}\u{62A}\u{648}\u{628}\u{631}",
            "\u{646}\u{648}\u{645}\u{628}\u{631}",
            "\u{68A}\u{633}\u{645}\u{628}\u{631}",
        ],
        // Short name
        'short' => [
            "\u{62C}\u{646}\u{648}\u{631}\u{64A}",
            "\u{641}\u{631}\u{648}\u{631}\u{64A}",
            "\u{645}\u{627}\u{631}\u{686}",
            "\u{627}\u{67E}\u{631}\u{64A}\u{644}",
            "\u{645}\u{654}\u{64A}",
            "\u{62C}\u{648}\u{646}",
            "\u{62C}\u{648}\u{644}\u{627}\u{621}\u{650}",
            "\u{622}\u{6AF}\u{633}\u{62A}",
            "\u{633}\u{62A}\u{645}\u{628}\u{631}",
            "\u{622}\u{6A9}\u{62A}\u{648}\u{628}\u{631}",
            "\u{646}\u{648}\u{645}\u{628}\u{631}",
            "\u{68A}\u{633}\u{645}\u{628}\u{631}",
        ],
    ];
}
