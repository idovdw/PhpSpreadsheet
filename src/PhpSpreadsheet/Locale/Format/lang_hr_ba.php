<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_hr_ba extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x101A;

    /**
     * @var string The locale tag
     */
    protected $tag = 'hr-ba';

    /**
     * @var string The currency code "KM"
     */
    protected $currencyCode = 'KM';

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
    protected $dateSeparator = '. ';

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
            'ponedjeljak',
            'utorak',
            'srijeda',
            "\u{10D}etvrtak",
            'petak',
            'subota',
            'nedjelja',
        ],
        // Short name
        'short' => [
            'pon',
            'uto',
            'sri',
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
            "sije\u{10D}anj",
            "velja\u{10D}a",
            "o\u{17E}ujak",
            'travanj',
            'svibanj',
            'lipanj',
            'srpanj',
            'kolovoz',
            'rujan',
            'listopad',
            'studeni',
            'prosinac',
        ],
        // Short name
        'short' => [
            'sij',
            'velj',
            "o\u{17E}u",
            'tra',
            'svi',
            'lip',
            'srp',
            'kol',
            'ruj',
            'lis',
            'stu',
            'pro',
        ],
    ];
}
