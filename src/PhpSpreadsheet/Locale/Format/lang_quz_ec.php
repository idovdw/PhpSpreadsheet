<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_quz_ec extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x086B;

    /**
     * @var string The locale tag
     */
    protected $tag = 'quz-ec';

    /**
     * @var string The currency code "US$"
     */
    protected $currencyCode = 'US$';

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
            'awaki',
            'wanra',
            'chillay',
            'kullka',
            'chaska',
            'wakma',
            'inti',
        ],
        // Short name
        'short' => [
            'awk',
            'wan',
            'chy',
            'kuk',
            'cha',
            'wak',
            'int',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'kulla',
            'panchi',
            'pawkar',
            'ayriwa',
            'aymuray',
            'raymi',
            'sitwa',
            'karwa',
            'kuski',
            'wayru',
            'sasi',
            'kapak',
        ],
        // Short name
        'short' => [
            'kull',
            'pan',
            'paw',
            'ayr',
            'aym',
            'ray',
            'sit',
            'kar',
            'kus',
            'way',
            'sas',
            'kap',
        ],
    ];
}
