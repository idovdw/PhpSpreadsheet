<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Lule-Samisch / Lule Sami (Norway).
 *
 * Do not alter this file; it is generated content.
 */
class FormatSMJxNO extends FormatLocale
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
    protected $strCurrencyCode = 'NOK';

    /**
     * @var string The decimal separator ","
     */
    protected $strDecimalSeparator = ',';

    /**
     * @var string The thousands separator "."
     */
    protected $strThousandsSeparator = '.';

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
    protected $aMonthNames = [
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
