<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Davvisámegiella / Northern Sami (Norway).
 *
 * Do not alter this file; it is generated content.
 */
class FormatSExNO extends FormatLocale
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
    protected $strCurrencyCode = 'kr';

    /**
     * @var string The decimal separator ","
     */
    protected $strDecimalSeparator = ',';

    /**
     * @var string The thousands separator " "
     */
    protected $strThousandsSeparator = "\u{A0}";

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = '-';

    /**
     * @var string The time separator
     */
    protected $strTimeSeparator = ':';

    /**
     * @var string[] The numerals representation (0 up to 9)
     */
    protected $aNumerals = [
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
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
    protected $aMonthNames = [
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
