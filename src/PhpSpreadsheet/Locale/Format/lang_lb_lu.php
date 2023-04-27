<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_lb_lu extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x046E;

    /**
     * @var string The locale tag
     */
    protected $tag = 'lb-lu';

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
            'Méindeg',
            'Dënschdeg',
            'Mëttwoch',
            'Donneschdeg',
            'Freideg',
            'Samschdeg',
            'Sonndeg',
        ],
        // Short name
        'short' => [
            'Méi',
            'Dën',
            'Mët',
            'Don',
            'Fre',
            'Sam',
            'Son',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Januar',
            'Februar',
            'Mäerz',
            'Abrëll',
            'Mee',
            'Juni',
            'Juli',
            'August',
            'September',
            'Oktober',
            'November',
            'Dezember',
        ],
        // Short name
        'short' => [
            'Jan',
            'Feb',
            'Mäe',
            'Abr',
            'Mee',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Okt',
            'Nov',
            'Dez',
        ],
    ];
}
