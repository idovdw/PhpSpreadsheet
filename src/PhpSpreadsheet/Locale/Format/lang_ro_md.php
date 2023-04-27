<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_ro_md extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0818;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ro-md';

    /**
     * @var string The currency code "L"
     */
    protected $currencyCode = 'L';

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
            'luni',
            "mar\u{21B}i",
            'miercuri',
            'joi',
            'vineri',
            "sâmb\u{103}t\u{103}",
            "duminic\u{103}",
        ],
        // Short name
        'short' => [
            'Lu',
            'Mar',
            'Mie',
            'Jo',
            'Vi',
            'Sâ',
            'Du',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'ianuarie',
            'februarie',
            'martie',
            'aprilie',
            'mai',
            'iunie',
            'iulie',
            'august',
            'septembrie',
            'octombrie',
            'noiembrie',
            'decembrie',
        ],
        // Short name
        'short' => [
            'ian.',
            'feb.',
            'mar.',
            'apr.',
            'mai',
            'iun.',
            'iul.',
            'aug.',
            'sept.',
            'oct.',
            'nov.',
            'dec.',
        ],
    ];
}
