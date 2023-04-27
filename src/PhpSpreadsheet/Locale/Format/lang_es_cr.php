<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_es_cr extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x140A;

    /**
     * @var string The locale tag
     */
    protected $tag = 'es-cr';

    /**
     * @var string The currency code "₡"
     */
    protected $currencyCode = "\u{20A1}";

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
            'lunes',
            'martes',
            'miércoles',
            'jueves',
            'viernes',
            'sábado',
            'domingo',
        ],
        // Short name
        'short' => [
            'lun.',
            'mar.',
            'mié.',
            'jue.',
            'vie.',
            'sáb.',
            'dom.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'enero',
            'febrero',
            'marzo',
            'abril',
            'mayo',
            'junio',
            'julio',
            'agosto',
            'septiembre',
            'octubre',
            'noviembre',
            'diciembre',
        ],
        // Short name
        'short' => [
            'ene.',
            'feb.',
            'mar.',
            'abr.',
            'may.',
            'jun.',
            'jul.',
            'ago.',
            'sep.',
            'oct.',
            'nov.',
            'dic.',
        ],
    ];
}
