<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_sma_no extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x183B;

    /**
     * @var string The locale tag
     */
    protected $tag = 'sma-no';

    /**
     * @var string The currency code "NOK"
     */
    protected $currencyCode = 'NOK';

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
            'måanta',
            'dæjsta',
            'gaskevåhkoe',
            'duarsta',
            'bearjadahke',
            'laavvardahke',
            'aejlege',
        ],
        // Short name
        'short' => [
            'måa',
            'dæj',
            'gask',
            'duar',
            'bearj',
            'laav',
            'aej',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'tsïengele',
            'goevte',
            'njoktje',
            'voerhtje',
            'suehpede',
            'ruffie',
            'snjaltje',
            'mïetske',
            'skïerede',
            'golke',
            'rahka',
            'goeve',
        ],
        // Short name
        'short' => [
            'tsïen',
            'goevt',
            'njok',
            'voer',
            'sueh',
            'ruff',
            'snja',
            'mïet',
            'skïer',
            'golk',
            'rahk',
            'goev',
        ],
    ];
}
