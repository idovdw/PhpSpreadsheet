<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_et_ee extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0425;

    /**
     * @var string The locale tag
     */
    protected $tag = 'et-ee';

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
            'esmaspäev',
            'teisipäev',
            'kolmapäev',
            'neljapäev',
            'reede',
            'laupäev',
            'pühapäev',
        ],
        // Short name
        'short' => [
            'E',
            'T',
            'K',
            'N',
            'R',
            'L',
            'P',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'jaanuar',
            'veebruar',
            'märts',
            'aprill',
            'mai',
            'juuni',
            'juuli',
            'august',
            'september',
            'oktoober',
            'november',
            'detsember',
        ],
        // Short name
        'short' => [
            'jaan',
            'veebr',
            'märts',
            'apr',
            'mai',
            'juuni',
            'juuli',
            'aug',
            'sept',
            'okt',
            'nov',
            'dets',
        ],
    ];
}
