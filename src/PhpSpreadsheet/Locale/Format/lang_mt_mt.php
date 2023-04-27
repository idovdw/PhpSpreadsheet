<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_mt_mt extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x043A;

    /**
     * @var string The locale tag
     */
    protected $tag = 'mt-mt';

    /**
     * @var string The currency code "€"
     */
    protected $currencyCode = "\u{20AC}";

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
            'It-Tnejn',
            'It-Tlieta',
            "L-Erbg\u{127}a",
            "Il-\u{126}amis",
            "Il-\u{120}img\u{127}a",
            'Is-Sibt',
            "Il-\u{126}add",
        ],
        // Short name
        'short' => [
            'Tne',
            'Tli',
            'Erb',
            "\u{126}am",
            "\u{120}im",
            'Sib',
            "\u{126}ad",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Jannar',
            'Frar',
            'Marzu',
            'April',
            'Mejju',
            "\u{120}unju",
            'Lulju',
            'Awwissu',
            'Settembru',
            'Ottubru',
            'Novembru',
            "Di\u{10B}embru",
        ],
        // Short name
        'short' => [
            'Jan',
            'Fra',
            'Mar',
            'Apr',
            'Mej',
            "\u{120}un",
            'Lul',
            'Aww',
            'Set',
            'Ott',
            'Nov',
            "Di\u{10B}",
        ],
    ];
}
