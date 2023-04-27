<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_gl_es extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0456;

    /**
     * @var string The locale tag
     */
    protected $tag = 'gl-es';

    /**
     * @var string The currency code "€"
     */
    protected $currencyCode = "\u{20AC}";

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
            'luns',
            'martes',
            'mércores',
            'xoves',
            'venres',
            'sábado',
            'domingo',
        ],
        // Short name
        'short' => [
            'Luns',
            'Mar.',
            'Mér.',
            'Xov.',
            'Ven.',
            'Sáb.',
            'Dom.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Xaneiro',
            'Febreiro',
            'Marzo',
            'Abril',
            'Maio',
            'Xuño',
            'Xullo',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Decembro',
        ],
        // Short name
        'short' => [
            'Xan.',
            'Feb.',
            'Mar.',
            'Abr.',
            'Maio',
            'Xuño',
            'Xul.',
            'Ago.',
            'Set.',
            'Out.',
            'Nov.',
            'Dec.',
        ],
    ];
}
