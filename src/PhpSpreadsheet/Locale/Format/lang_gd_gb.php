<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_gd_gb extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0491;

    /**
     * @var string The locale tag
     */
    protected $tag = 'gd-gb';

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
            'DiLuain',
            "DiM\u{E0}irt",
            'DiCiadain',
            'DiarDaoin',
            'DihAoine',
            'DiSathairne',
            'DiDòmhnaich',
        ],
        // Short name
        'short' => [
            'DiL',
            'DiM',
            'DiC',
            'Dia',
            'Dih',
            'DiS',
            'DiD',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Am Faoilleach',
            'An Gearran',
            "Am M\u{E0}rt",
            'An Giblean',
            'An Cèitean',
            'An t-Ògmhios',
            'An t-Iuchar',
            'An Lùnastal',
            'An t-Sultain',
            "An D\u{E0}mhair",
            'An t-Samhain',
            'An Dùbhlachd',
        ],
        // Short name
        'short' => [
            'Faoi',
            'Gear',
            "M\u{E0}rt",
            'Gibl',
            'Cèit',
            'Ògmh',
            'Iuch',
            'Lùna',
            'Sult',
            "D\u{E0}mh",
            'Samh',
            'Dùbh',
        ],
    ];
}
