<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_smj_no extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x103B;

    /**
     * @var string The locale tag
     */
    protected $tag = 'smj-no';

    /**
     * @var string The currency code "NOK"
     */
    protected $currencyCode = 'NOK';

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
            'mánnodahka',
            'dijstahka',
            'gasskavahkko',
            'duorastahka',
            'bierjjedahka',
            'lávvodahka',
            'sådnåbiejvve',
        ],
        // Short name
        'short' => [
            'mán',
            'dis',
            'gas',
            'duor',
            'bier',
            'láv',
            'såd',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'ådåjakmánno',
            'guovvamánno',
            'sjnjuktjamánno',
            'vuoratjismánno',
            'moarmesmánno',
            'biehtsemánno',
            'sjnjilltjamánno',
            'bårggemánno',
            'ragátmánno',
            'gålgådismánno',
            'basádismánno',
            'javllamánno',
        ],
        // Short name
        'short' => [
            'ådåj',
            'guov',
            'snju',
            'vuor',
            'moar',
            'bieh',
            'snji',
            'bårg',
            'ragá',
            'gålg',
            'basá',
            'javl',
        ],
    ];
}
