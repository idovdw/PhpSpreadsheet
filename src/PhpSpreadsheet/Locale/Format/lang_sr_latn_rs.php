<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_sr_latn_rs extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x241A;

    /**
     * @var string The locale tag
     */
    protected $tag = 'sr-latn-rs';

    /**
     * @var string The currency code "RSD"
     */
    protected $currencyCode = 'RSD';

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
            'ponedeljak',
            'utorak',
            'sreda',
            "\u{10D}etvrtak",
            'petak',
            'subota',
            'nedelja',
        ],
        // Short name
        'short' => [
            'pon',
            'uto',
            'sre',
            "\u{10D}et",
            'pet',
            'sub',
            'ned',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'januar',
            'februar',
            'mart',
            'april',
            'maj',
            'jun',
            'jul',
            'avgust',
            'septembar',
            'oktobar',
            'novembar',
            'decembar',
        ],
        // Short name
        'short' => [
            'jan',
            'feb',
            'mar',
            'apr',
            'maj',
            'jun',
            'jul',
            'avg',
            'sep',
            'okt',
            'nov',
            'dec',
        ],
    ];
}
