<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_az_latn_az extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x042C;

    /**
     * @var string The locale tag
     */
    protected $tag = 'az-latn-az';

    /**
     * @var string The currency code "₼"
     */
    protected $currencyCode = "\u{20BC}";

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
            "bazarçert\u{259}si",
            "ç\u{259}r\u{15F}\u{259}nb\u{259}\u{a0}ax\u{15F}am\u{131}",
            "ç\u{259}r\u{15F}\u{259}nb\u{259}",
            "cüm\u{259} ax\u{15F}am\u{131}",
            "cüm\u{259}",
            "\u{15F}\u{259}nb\u{259}",
            'bazar',
        ],
        // Short name
        'short' => [
            'B.E.',
            'Ç.A.',
            'Ç.',
            'C.A.',
            'C.',
            "\u{15E}.",
            'B.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'yanvar',
            'fevral',
            'mart',
            'aprel',
            'may',
            'iyun',
            'iyul',
            'avgust',
            'sentyabr',
            'oktyabr',
            'noyabr',
            'dekabr',
        ],
        // Short name
        'short' => [
            'yan',
            'fev',
            'mar',
            'apr',
            'may',
            'iyn',
            'iyl',
            'avq',
            'sen',
            'okt',
            'noy',
            'dek',
        ],
    ];
}
