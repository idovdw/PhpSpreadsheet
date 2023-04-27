<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_cy_gb extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0452;

    /**
     * @var string The locale tag
     */
    protected $tag = 'cy-gb';

    /**
     * @var string The currency code "£"
     */
    protected $currencyCode = '£';

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = '.';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ',';

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
            'Dydd Llun',
            'Dydd Mawrth',
            'Dydd Mercher',
            'Dydd Iau',
            'Dydd Gwener',
            'Dydd Sadwrn',
            'Dydd Sul',
        ],
        // Short name
        'short' => [
            'Llun',
            'Maw',
            'Mer',
            'Iau',
            'Gwe',
            'Sad',
            'Sul',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Ionawr',
            'Chwefror',
            'Mawrth',
            'Ebrill',
            'Mai',
            'Mehefin',
            'Gorffennaf',
            'Awst',
            'Medi',
            'Hydref',
            'Tachwedd',
            'Rhagfyr',
        ],
        // Short name
        'short' => [
            'Ion',
            'Chwef',
            'Maw',
            'Ebr',
            'Mai',
            'Meh',
            'Gorff',
            'Awst',
            'Medi',
            'Hyd',
            'Tach',
            'Rhag',
        ],
    ];
}
