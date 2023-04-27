<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_se_no extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x043B;

    /**
     * @var string The locale tag
     */
    protected $tag = 'se-no';

    /**
     * @var string The currency code "kr"
     */
    protected $currencyCode = 'kr';

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
            'vuossárga',
            "ma\u{14B}\u{14B}ebárga",
            'gaskavahkku',
            'duorasdat',
            'bearjadat',
            'lávvardat',
            'sotnabeaivi',
        ],
        // Short name
        'short' => [
            'vuos',
            "ma\u{14B}",
            'gask',
            'duor',
            'bear',
            'láv',
            'sotn',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "o\u{111}\u{111}ajagemánnu",
            'guovvamánnu',
            "njuk\u{10D}amánnu",
            "cuo\u{14B}ománnu",
            'miessemánnu',
            'geassemánnu',
            'suoidnemánnu',
            'borgemánnu',
            "\u{10D}ak\u{10D}amánnu",
            'golggotmánnu',
            'skábmamánnu',
            'juovlamánnu',
        ],
        // Short name
        'short' => [
            "o\u{111}\u{111}j",
            'guov',
            'njuk',
            "cuo\u{14B}",
            'mies',
            'geas',
            'suoi',
            'borg',
            "\u{10D}ak\u{10D}",
            'golg',
            'skáb',
            'juov',
        ],
    ];
}
