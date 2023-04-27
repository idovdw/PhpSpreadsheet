<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_eu_es extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x042D;

    /**
     * @var string The locale tag
     */
    protected $tag = 'eu-es';

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
    protected $thousandsSeparator = '.';

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
            'astelehena',
            'asteartea',
            'asteazkena',
            'osteguna',
            'ostirala',
            'larunbata',
            'igandea',
        ],
        // Short name
        'short' => [
            'al.',
            'ar.',
            'az.',
            'og.',
            'or.',
            'lr.',
            'ig.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'urtarrila',
            'otsaila',
            'martxoa',
            'apirila',
            'maiatza',
            'ekaina',
            'uztaila',
            'abuztua',
            'iraila',
            'urria',
            'azaroa',
            'abendua',
        ],
        // Short name
        'short' => [
            'urt.',
            'ots.',
            'mar.',
            'api.',
            'mai.',
            'eka.',
            'uzt.',
            'abu.',
            'ira.',
            'urr.',
            'aza.',
            'abe.',
        ],
    ];
}
