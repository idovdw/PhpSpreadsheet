<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_az_cyrl_az extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x082C;

    /**
     * @var string The locale tag
     */
    protected $tag = 'az-cyrl-az';

    /**
     * @var string The currency code "₼"
     */
    protected $currencyCode = "\u{20BC}";

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
            "\u{431}\u{430}\u{437}\u{430}\u{440}\u{a0}\u{435}\u{440}\u{442}\u{4D9}\u{441}\u{438}",
            "\u{447}\u{4D9}\u{440}\u{448}\u{4D9}\u{43D}\u{431}\u{4D9}\u{a0}\u{430}\u{445}\u{448}\u{430}\u{43C}\u{44B}",
            "\u{447}\u{4D9}\u{440}\u{448}\u{4D9}\u{43D}\u{431}\u{4D9}",
            "\u{4B9}\u{4AF}\u{43C}\u{4D9}\u{a0}\u{430}\u{445}\u{448}\u{430}\u{43C}\u{44B}",
            "\u{4B9}\u{4AF}\u{43C}\u{4D9}",
            "\u{448}\u{4D9}\u{43D}\u{431}\u{4D9}",
            "\u{431}\u{430}\u{437}\u{430}\u{440}",
        ],
        // Short name
        'short' => [
            "\u{411}\u{435}",
            "\u{427}\u{430}",
            "\u{427}",
            "\u{4B8}\u{430}",
            "\u{4B8}",
            "\u{428}",
            "\u{411}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "j\u{430}\u{43D}\u{432}\u{430}\u{440}",
            "\u{444}\u{435}\u{432}\u{440}\u{430}\u{43B}",
            "\u{43C}\u{430}\u{440}\u{442}",
            "\u{430}\u{43F}\u{440}\u{435}\u{43B}",
            "\u{43C}\u{430}\u{458}",
            "\u{438}\u{458}\u{443}\u{43D}",
            "\u{438}\u{458}\u{443}\u{43B}",
            "\u{430}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{441}\u{435}\u{43D}\u{442}\u{458}\u{430}\u{431}\u{440}",
            "\u{43E}\u{43A}\u{442}\u{458}\u{430}\u{431}\u{440}",
            "\u{43D}\u{43E}\u{458}\u{430}\u{431}\u{440}",
            "\u{434}\u{435}\u{43A}\u{430}\u{431}\u{440}",
        ],
        // Short name
        'short' => [
            "\u{408}\u{430}\u{43D}",
            "\u{424}\u{435}\u{432}",
            "\u{41C}\u{430}\u{440}",
            "\u{410}\u{43F}\u{440}",
            "\u{41C}\u{430}\u{458}",
            "\u{418}\u{458}\u{443}\u{43D}",
            "\u{418}\u{458}\u{443}\u{43B}",
            "\u{410}\u{432}\u{433}",
            "\u{421}\u{435}\u{43D}",
            "\u{41E}\u{43A}\u{442}",
            "\u{41D}\u{43E}\u{44F}",
            "\u{414}\u{435}\u{43A}",
        ],
    ];
}
