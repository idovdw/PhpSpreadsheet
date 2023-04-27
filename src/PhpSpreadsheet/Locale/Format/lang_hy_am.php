<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_hy_am extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x042B;

    /**
     * @var string The locale tag
     */
    protected $tag = 'hy-am';

    /**
     * @var string The currency code "֏"
     */
    protected $currencyCode = "\u{58F}";

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
            "\u{535}\u{580}\u{56F}\u{578}\u{582}\u{577}\u{561}\u{562}\u{569}\u{56B}",
            "\u{535}\u{580}\u{565}\u{584}\u{577}\u{561}\u{562}\u{569}\u{56B}",
            "\u{549}\u{578}\u{580}\u{565}\u{584}\u{577}\u{561}\u{562}\u{569}\u{56B}",
            "\u{540}\u{56B}\u{576}\u{563}\u{577}\u{561}\u{562}\u{569}\u{56B}",
            "\u{548}\u{582}\u{580}\u{562}\u{561}\u{569}",
            "\u{547}\u{561}\u{562}\u{561}\u{569}",
            "\u{53F}\u{56B}\u{580}\u{561}\u{56F}\u{56B}",
        ],
        // Short name
        'short' => [
            "\u{535}\u{580}\u{56F}",
            "\u{535}\u{580}\u{584}",
            "\u{549}\u{580}\u{584}",
            "\u{540}\u{576}\u{563}",
            "\u{548}\u{582}\u{580}",
            "\u{547}\u{562}\u{569}",
            "\u{53F}\u{56B}\u{580}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{540}\u{578}\u{582}\u{576}\u{57E}\u{561}\u{580}",
            "\u{553}\u{565}\u{57F}\u{580}\u{57E}\u{561}\u{580}",
            "\u{544}\u{561}\u{580}\u{57F}",
            "\u{531}\u{57A}\u{580}\u{56B}\u{56C}",
            "\u{544}\u{561}\u{575}\u{56B}\u{57D}",
            "\u{540}\u{578}\u{582}\u{576}\u{56B}\u{57D}",
            "\u{540}\u{578}\u{582}\u{56C}\u{56B}\u{57D}",
            "\u{555}\u{563}\u{578}\u{57D}\u{57F}\u{578}\u{57D}",
            "\u{54D}\u{565}\u{57A}\u{57F}\u{565}\u{574}\u{562}\u{565}\u{580}",
            "\u{540}\u{578}\u{56F}\u{57F}\u{565}\u{574}\u{562}\u{565}\u{580}",
            "\u{546}\u{578}\u{575}\u{565}\u{574}\u{562}\u{565}\u{580}",
            "\u{534}\u{565}\u{56F}\u{57F}\u{565}\u{574}\u{562}\u{565}\u{580}",
        ],
        // Short name
        'short' => [
            "\u{540}\u{576}\u{57E}",
            "\u{553}\u{57F}\u{57E}",
            "\u{544}\u{580}\u{57F}",
            "\u{531}\u{57A}\u{580}",
            "\u{544}\u{575}\u{57D}",
            "\u{540}\u{576}\u{57D}",
            "\u{540}\u{56C}\u{57D}",
            "\u{555}\u{563}\u{57D}",
            "\u{54D}\u{57A}\u{57F}",
            "\u{540}\u{56F}\u{57F}",
            "\u{546}\u{575}\u{574}",
            "\u{534}\u{56F}\u{57F}",
        ],
    ];
}
