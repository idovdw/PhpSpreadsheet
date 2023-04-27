<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_arn_cl extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x047A;

    /**
     * @var string The locale tag
     */
    protected $tag = 'arn-cl';

    /**
     * @var string The currency code "CLP"
     */
    protected $currencyCode = 'CLP';

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
            'Epu Ante',
            'Kila Ante',
            'Meli Ante',
            'Kechu Ante',
            'Cayu Ante',
            'Regle Ante',
            'Kiñe Ante',
        ],
        // Short name
        'short' => [
            'Epu',
            'Kila',
            'Meli',
            'Kechu',
            'Cayu',
            'Regle',
            'Kiñe',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Kiñe Tripantu',
            'Epu',
            'Kila',
            'Meli',
            'Kechu',
            'Cayu',
            'Regle',
            'Purha',
            'Aiya',
            'Marhi',
            'Marhi Kiñe',
            'Marhi Epu',
        ],
        // Short name
        'short' => [
            'Kiñe Tripantu',
            'Epu',
            'Kila',
            'Meli',
            'Kechu',
            'Cayu',
            'Regle',
            'Purha',
            'Aiya',
            'Marhi',
            'Marhi Kiñe',
            'Marhi Epu',
        ],
    ];
}
