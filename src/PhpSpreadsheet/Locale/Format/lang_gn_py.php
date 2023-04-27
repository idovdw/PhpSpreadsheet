<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_gn_py extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0474;

    /**
     * @var string The locale tag
     */
    protected $tag = 'gn-py';

    /**
     * @var string The currency code "PYG"
     */
    protected $currencyCode = 'PYG';

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
            'arakõi',
            'araapy',
            'ararundy',
            'arapo',
            "arapote\u{129}",
            'arapokõi',
            "arate\u{129}",
        ],
        // Short name
        'short' => [
            'kõi',
            'apy',
            'ndy',
            'po',
            "ote\u{129}",
            'okõi',
            "te\u{129}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "jasyte\u{129}",
            'jasykõi',
            'jasyapy',
            'jasyrundy',
            'jasypo',
            "jasypote\u{129}",
            'jasypokõi',
            'jasypoapy',
            'jasyporundy',
            'jasypa',
            "jasypate\u{129}",
            'jasypakõi',
        ],
        // Short name
        'short' => [
            "jte\u{129}",
            'jkõi',
            'japy',
            'jrun',
            'jpo',
            'jpot',
            'jpok',
            'jpoa',
            'jpor',
            'jpa',
            'jpat',
            'jpak',
        ],
    ];
}
