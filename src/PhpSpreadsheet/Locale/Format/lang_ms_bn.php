<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_ms_bn extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x083E;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ms-bn';

    /**
     * @var string The currency code "$"
     */
    protected $currencyCode = '$';

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
            'Isnin',
            'Selasa',
            'Rabu',
            'Khamis',
            'Jumaat',
            'Sabtu',
            'Ahad',
        ],
        // Short name
        'short' => [
            'Isnin',
            'Sel',
            'Rabu',
            'Khamis',
            'Jumaat',
            'Sabtu',
            'Ahad',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Januari',
            'Februari',
            'Mac',
            'April',
            'Mei',
            'Jun',
            'Julai',
            'Ogos',
            'September',
            'Oktober',
            'November',
            'Disember',
        ],
        // Short name
        'short' => [
            'Jan',
            'Feb',
            'Mac',
            'Apr',
            'Mei',
            'Jun',
            'Jul',
            'Ogo',
            'Sep',
            'Okt',
            'Nov',
            'Dis',
        ],
    ];
}
