<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_is_is extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x040F;

    /**
     * @var string The locale tag
     */
    protected $tag = 'is-is';

    /**
     * @var string The currency code "ISK"
     */
    protected $currencyCode = 'ISK';

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
            'mánudagur',
            "\u{FE}riðjudagur",
            'miðvikudagur',
            'fimmtudagur',
            'föstudagur',
            'laugardagur',
            'sunnudagur',
        ],
        // Short name
        'short' => [
            'mán.',
            "\u{FE}ri.",
            'mið.',
            'fim.',
            'fös.',
            'lau.',
            'sun.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'janúar',
            'febrúar',
            'mars',
            'apríl',
            'maí',
            'júní',
            'júlí',
            'ágúst',
            'september',
            'október',
            'nóvember',
            'desember',
        ],
        // Short name
        'short' => [
            'jan.',
            'feb.',
            'mar.',
            'apr.',
            'maí',
            'jún.',
            'júl.',
            'ágú.',
            'sep.',
            'okt.',
            'nóv.',
            'des.',
        ],
    ];
}
