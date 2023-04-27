<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_uz_latn_uz extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0443;

    /**
     * @var string The locale tag
     */
    protected $tag = 'uz-latn-uz';

    /**
     * @var string The currency code "soʻm"
     */
    protected $currencyCode = "so\u{2BB}m";

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
            'dushanba',
            'seshanba',
            'chorshanba',
            'payshanba',
            'juma',
            'shanba',
            'yakshanba',
        ],
        // Short name
        'short' => [
            'Dush',
            'Sesh',
            'Chor',
            'Pay',
            'Jum',
            'Shan',
            'Yak',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Yanvar',
            'Fevral',
            'Mart',
            'Aprel',
            'May',
            'Iyun',
            'Iyul',
            'Avgust',
            'Sentabr',
            'Oktabr',
            'Noyabr',
            'Dekabr',
        ],
        // Short name
        'short' => [
            'Yan',
            'Fev',
            'Mar',
            'Apr',
            'May',
            'Iyn',
            'Iyl',
            'Avg',
            'Sen',
            'Okt',
            'Noy',
            'Dek',
        ],
    ];
}
