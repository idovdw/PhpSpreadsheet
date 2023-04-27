<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_lv_lv extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0426;

    /**
     * @var string The locale tag
     */
    protected $tag = 'lv-lv';

    /**
     * @var string The currency code "€"
     */
    protected $currencyCode = "\u{20AC}";

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
            'pirmdiena',
            'otrdiena',
            "tre\u{161}diena",
            'ceturtdiena',
            'piektdiena',
            'sestdiena',
            "sv\u{113}tdiena",
        ],
        // Short name
        'short' => [
            'Pirmd.',
            'Otrd.',
            "Tre\u{161}d.",
            'Ceturtd.',
            'Piektd.',
            'Sestd.',
            "Sv\u{113}td.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "janv\u{101}ris",
            "febru\u{101}ris",
            'marts',
            "apr\u{12B}lis",
            'maijs',
            "j\u{16B}nijs",
            "j\u{16B}lijs",
            'augusts',
            'septembris',
            'oktobris',
            'novembris',
            'decembris',
        ],
        // Short name
        'short' => [
            'janv.',
            'febr.',
            'marts',
            'apr.',
            'maijs',
            "j\u{16B}n.",
            "j\u{16B}l.",
            'aug.',
            'sept.',
            'okt.',
            'nov.',
            'dec.',
        ],
    ];
}
