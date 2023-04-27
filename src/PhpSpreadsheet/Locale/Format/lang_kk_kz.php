<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_kk_kz extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x043F;

    /**
     * @var string The locale tag
     */
    protected $tag = 'kk-kz';

    /**
     * @var string The currency code "₸"
     */
    protected $currencyCode = "\u{20B8}";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ',';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = "\u{a0}";

    /**
     * @var string The date separator
     */
    protected $dateSeparator = '.';

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
            "\u{434}\u{4AF}\u{439}\u{441}\u{435}\u{43D}\u{431}\u{456}",
            "\u{441}\u{435}\u{439}\u{441}\u{435}\u{43D}\u{431}\u{456}",
            "\u{441}\u{4D9}\u{440}\u{441}\u{435}\u{43D}\u{431}\u{456}",
            "\u{431}\u{435}\u{439}\u{441}\u{435}\u{43D}\u{431}\u{456}",
            "\u{436}\u{4B1}\u{43C}\u{430}",
            "\u{441}\u{435}\u{43D}\u{431}\u{456}",
            "\u{436}\u{435}\u{43A}\u{441}\u{435}\u{43D}\u{431}\u{456}",
        ],
        // Short name
        'short' => [
            "\u{434}\u{4AF}\u{439}",
            "\u{441}\u{435}\u{439}",
            "\u{441}\u{4D9}\u{440}",
            "\u{431}\u{435}\u{439}",
            "\u{436}\u{4B1}\u{43C}",
            "\u{441}\u{435}\u{43D}",
            "\u{436}\u{435}\u{43A}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{49A}\u{430}\u{4A3}\u{442}\u{430}\u{440}",
            "\u{410}\u{49B}\u{43F}\u{430}\u{43D}",
            "\u{41D}\u{430}\u{443}\u{440}\u{44B}\u{437}",
            "\u{421}\u{4D9}\u{443}\u{456}\u{440}",
            "\u{41C}\u{430}\u{43C}\u{44B}\u{440}",
            "\u{41C}\u{430}\u{443}\u{441}\u{44B}\u{43C}",
            "\u{428}\u{456}\u{43B}\u{434}\u{435}",
            "\u{422}\u{430}\u{43C}\u{44B}\u{437}",
            "\u{49A}\u{44B}\u{440}\u{43A}\u{4AF}\u{439}\u{435}\u{43A}",
            "\u{49A}\u{430}\u{437}\u{430}\u{43D}",
            "\u{49A}\u{430}\u{440}\u{430}\u{448}\u{430}",
            "\u{416}\u{435}\u{43B}\u{442}\u{43E}\u{49B}\u{441}\u{430}\u{43D}",
        ],
        // Short name
        'short' => [
            "\u{49B}\u{430}\u{4A3}",
            "\u{430}\u{49B}\u{43F}",
            "\u{43D}\u{430}\u{443}",
            "\u{441}\u{4D9}\u{443}",
            "\u{43C}\u{430}\u{43C}",
            "\u{43C}\u{430}\u{443}",
            "\u{448}\u{456}\u{43B}",
            "\u{442}\u{430}\u{43C}",
            "\u{49B}\u{44B}\u{440}",
            "\u{49B}\u{430}\u{437}",
            "\u{49B}\u{430}\u{440}",
            "\u{436}\u{435}\u{43B}",
        ],
    ];
}
