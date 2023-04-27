<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_prs_af extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x048C;

    /**
     * @var string The locale tag
     */
    protected $tag = 'prs-af';

    /**
     * @var string The currency code "AFN"
     */
    protected $currencyCode = 'AFN';

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ',';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = '.';

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
            "\u{62F}\u{648}\u{634}\u{646}\u{628}\u{647}",
            "\u{633}\u{647}\u{200C} \u{634}\u{646}\u{628}\u{647}",
            "\u{686}\u{647}\u{627}\u{631} \u{634}\u{646}\u{628}\u{647}",
            "\u{67E}\u{646}\u{62C}\u{634}\u{646}\u{628}\u{647}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{634}\u{646}\u{628}\u{647}",
            "\u{6CC}\u{6A9}\u{634}\u{646}\u{628}\u{647}",
        ],
        // Short name
        'short' => [
            "\u{62F}\u{648}\u{634}\u{646}\u{628}\u{647}",
            "\u{633}\u{647}\u{200C} \u{634}\u{646}\u{628}\u{647}",
            "\u{686}\u{647}\u{627}\u{631} \u{634}\u{646}\u{628}\u{647}",
            "\u{67E}\u{646}\u{62C}\u{634}\u{646}\u{628}\u{647}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{634}\u{646}\u{628}\u{647}",
            "\u{6CC}\u{6A9}\u{634}\u{646}\u{628}\u{647}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{62C}\u{62F}\u{6CC}",
            "\u{62F}\u{644}\u{648}",
            "\u{62D}\u{648}\u{62A}",
            "\u{62D}\u{645}\u{644}",
            "\u{62B}\u{648}\u{631}",
            "\u{62C}\u{648}\u{632}\u{627}",
            "\u{633}\u{631}\u{637}\u{627}\u{646}",
            "\u{627}\u{633}\u{62F}",
            "\u{633}\u{646}\u{628}\u{644}\u{647}",
            "\u{645}\u{6CC}\u{632}\u{627}\u{646}",
            "\u{639}\u{642}\u{631}\u{628}",
            "\u{642}\u{648}\u{633}",
        ],
        // Short name
        'short' => [
            "\u{62C}\u{62F}\u{6CC}",
            "\u{62F}\u{644}\u{648}",
            "\u{62D}\u{648}\u{62A}",
            "\u{62D}\u{645}\u{644}",
            "\u{62B}\u{648}\u{631}",
            "\u{62C}\u{648}\u{632}\u{627}",
            "\u{633}\u{631}\u{637}\u{627}\u{646}",
            "\u{627}\u{633}\u{62F}",
            "\u{633}\u{646}\u{628}\u{644}\u{647}",
            "\u{645}\u{6CC}\u{632}\u{627}\u{646}",
            "\u{639}\u{642}\u{631}\u{628}",
            "\u{642}\u{648}\u{633}",
        ],
    ];
}
