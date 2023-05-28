<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Zuid-Samisch / Southern Sami (Norway).
 *
 * Do not alter this file; it is generated content.
 */
class FormatSMAxNO extends FormatLocale
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
    protected $strCurrencyCode = 'NOK';

    /**
     * @var string The decimal separator ","
     */
    protected $strDecimalSeparator = ',';

    /**
     * @var string The thousands separator "."
     */
    protected $strThousandsSeparator = '.';

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = '-';

    /**
     * @var string The time separator
     */
    protected $strTimeSeparator = ':';

    /**
     * @var string[] The numerals representation (0 up to 9)
     */
    protected $aNumerals = [
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
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
    protected $aMonthNames = [
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
