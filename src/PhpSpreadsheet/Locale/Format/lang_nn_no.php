<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_nn_no extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0814;

    /**
     * @var string The locale tag
     */
    protected $tag = 'nn-no';

    /**
     * @var string The currency code "kr"
     */
    protected $currencyCode = 'kr';

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
            'måndag',
            'tysdag',
            'onsdag',
            'torsdag',
            'fredag',
            'laurdag',
            'søndag',
        ],
        // Short name
        'short' => [
            'mån',
            'tys',
            'ons',
            'tor',
            'fre',
            'lau',
            'søn',
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
            'mars',
            'april',
            'mai',
            'juni',
            'juli',
            'august',
            'september',
            'oktober',
            'november',
            'desember',
        ],
        // Short name
        'short' => [
            'jan',
            'feb',
            'mar',
            'apr',
            'mai',
            'jun',
            'jul',
            'aug',
            'sep',
            'okt',
            'nov',
            'des',
        ],
    ];
}
