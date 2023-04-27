<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_uz_cyrl_uz extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0843;

    /**
     * @var string The locale tag
     */
    protected $tag = 'uz-cyrl-uz';

    /**
     * @var string The currency code "сўм"
     */
    protected $currencyCode = "\u{441}\u{45E}\u{43C}";

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
            "\u{434}\u{443}\u{448}\u{430}\u{43D}\u{431}\u{430}",
            "\u{441}\u{435}\u{448}\u{430}\u{43D}\u{431}\u{430}",
            "\u{447}\u{43E}\u{440}\u{448}\u{430}\u{43D}\u{431}\u{430}",
            "\u{43F}\u{430}\u{439}\u{448}\u{430}\u{43D}\u{431}\u{430}",
            "\u{436}\u{443}\u{43C}\u{430}",
            "\u{448}\u{430}\u{43D}\u{431}\u{430}",
            "\u{44F}\u{43A}\u{448}\u{430}\u{43D}\u{431}\u{430}",
        ],
        // Short name
        'short' => [
            "\u{434}\u{443}\u{448}",
            "\u{441}\u{435}\u{448}",
            "\u{447}\u{43E}\u{440}",
            "\u{43F}\u{430}\u{439}",
            "\u{436}\u{443}\u{43C}",
            "\u{448}\u{430}\u{43D}",
            "\u{44F}\u{43A}\u{448}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{44F}\u{43D}\u{432}\u{430}\u{440}",
            "\u{444}\u{435}\u{432}\u{440}\u{430}\u{43B}",
            "\u{43C}\u{430}\u{440}\u{442}",
            "\u{430}\u{43F}\u{440}\u{435}\u{43B}",
            "\u{43C}\u{430}\u{439}",
            "\u{438}\u{44E}\u{43D}",
            "\u{438}\u{44E}\u{43B}",
            "\u{430}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{441}\u{435}\u{43D}\u{442}\u{44F}\u{431}\u{440}",
            "\u{43E}\u{43A}\u{442}\u{44F}\u{431}\u{440}",
            "\u{43D}\u{43E}\u{44F}\u{431}\u{440}",
            "\u{434}\u{435}\u{43A}\u{430}\u{431}\u{440}",
        ],
        // Short name
        'short' => [
            "\u{44F}\u{43D}\u{432}",
            "\u{444}\u{435}\u{432}",
            "\u{43C}\u{430}\u{440}",
            "\u{430}\u{43F}\u{440}",
            "\u{43C}\u{430}\u{439}",
            "\u{438}\u{44E}\u{43D}",
            "\u{438}\u{44E}\u{43B}",
            "\u{430}\u{432}\u{433}",
            "\u{441}\u{435}\u{43D}",
            "\u{43E}\u{43A}\u{442}",
            "\u{43D}\u{43E}\u{44F}",
            "\u{434}\u{435}\u{43A}",
        ],
    ];
}
