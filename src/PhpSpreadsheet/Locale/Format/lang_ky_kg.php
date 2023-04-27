<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_ky_kg extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0440;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ky-kg';

    /**
     * @var string The currency code "сом"
     */
    protected $currencyCode = "\u{441}\u{43E}\u{43C}";

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
    protected $dateSeparator = '/';

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
            "\u{434}\u{4AF}\u{439}\u{448}\u{4E9}\u{43C}\u{431}\u{4AF}",
            "\u{448}\u{435}\u{439}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{448}\u{430}\u{440}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{431}\u{435}\u{439}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{436}\u{443}\u{43C}\u{430}",
            "\u{438}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{436}\u{435}\u{43A}\u{448}\u{435}\u{43C}\u{431}\u{438}",
        ],
        // Short name
        'short' => [
            "\u{434}\u{4AF}\u{439}.",
            "\u{448}\u{435}\u{439}\u{448}.",
            "\u{448}\u{430}\u{440}\u{448}.",
            "\u{431}\u{435}\u{439}\u{448}.",
            "\u{436}\u{443}\u{43C}\u{430}",
            "\u{438}\u{448}\u{43C}.",
            "\u{436}\u{435}\u{43A}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{42F}\u{43D}\u{432}\u{430}\u{440}\u{44C}",
            "\u{424}\u{435}\u{432}\u{440}\u{430}\u{43B}\u{44C}",
            "\u{41C}\u{430}\u{440}\u{442}",
            "\u{410}\u{43F}\u{440}\u{435}\u{43B}\u{44C}",
            "\u{41C}\u{430}\u{439}",
            "\u{418}\u{44E}\u{43D}\u{44C}",
            "\u{418}\u{44E}\u{43B}\u{44C}",
            "\u{410}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{421}\u{435}\u{43D}\u{442}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{41E}\u{43A}\u{442}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{41D}\u{43E}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{414}\u{435}\u{43A}\u{430}\u{431}\u{440}\u{44C}",
        ],
        // Short name
        'short' => [
            "\u{42F}\u{43D}\u{432}",
            "\u{424}\u{435}\u{432}",
            "\u{41C}\u{430}\u{440}",
            "\u{410}\u{43F}\u{440}",
            "\u{41C}\u{430}\u{439}",
            "\u{418}\u{44E}\u{43D}",
            "\u{418}\u{44E}\u{43B}",
            "\u{410}\u{432}\u{433}",
            "\u{421}\u{435}\u{43D}",
            "\u{41E}\u{43A}\u{442}",
            "\u{41D}\u{43E}\u{44F}",
            "\u{414}\u{435}\u{43A}",
        ],
    ];
}
