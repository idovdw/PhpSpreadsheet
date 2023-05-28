<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Euskara / Basque (Spain).
 *
 * Do not alter this file; it is generated content.
 */
class FormatEUxES extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x042D;

    /**
     * @var string The locale tag
     */
    protected $tag = 'eu-es';

    /**
     * @var string The currency code "€"
     */
    protected $strCurrencyCode = "\u{20AC}";

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
    protected $strDateSeparator = '/';

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
            'astelehena',
            'asteartea',
            'asteazkena',
            'osteguna',
            'ostirala',
            'larunbata',
            'igandea',
        ],
        // Short name
        'short' => [
            'al.',
            'ar.',
            'az.',
            'og.',
            'or.',
            'lr.',
            'ig.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'urtarrila',
            'otsaila',
            'martxoa',
            'apirila',
            'maiatza',
            'ekaina',
            'uztaila',
            'abuztua',
            'iraila',
            'urria',
            'azaroa',
            'abendua',
        ],
        // Short name
        'short' => [
            'urt.',
            'ots.',
            'mar.',
            'api.',
            'mai.',
            'eka.',
            'uzt.',
            'abu.',
            'ira.',
            'urr.',
            'aza.',
            'abe.',
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            'astelehena',
            'asteartea',
            'asteazkena',
            'osteguna',
            'ostirala',
            'larunbata',
            'igandea',
        ],
        // Short name
        'short' => [
            'al',
            'ar',
            'az',
            'og',
            'or',
            'lr',
            'ig',
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            'urtarrila',
            'otsaila',
            'martxoa',
            'apirila',
            'maiatza',
            'ekaina',
            'uztaila',
            'abuztua',
            'iraila',
            'urria',
            'azaroa',
            'abendua',
        ],
        // Short name
        'short' => [
            'urt',
            'ots',
            'mar',
            'api',
            'mai',
            'eka',
            'uzt',
            'abu',
            'ira',
            'urr',
            'aza',
            'abe',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'yyyy/m/d',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'yyyy/m/d hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '\$ #,##0.00' => '$ #,##0.00',
        '\$ #,##0.00;[Red]\$ #,##0.00' => '$ #,##0.00;[Red]$ #,##0.00',
        '\$ #,##0.00;\$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '\$ #,##0.00;[Red]\$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * \"-\"_ ;_ @_ ',
        '_ \$ * #,##0.0_ ;_ \$ * -#,##0.0_ ;_ \$ * \"-\"?_ ;_ @_ ' => '_ $ * #,##0.0_ ;_ $ * -#,##0.0_ ;_ $ * \"-\"?_ ;_ @_ ',
        '_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * \"-\"??_ ;_ @_ ',
        '_ \$ * #,##0.000_ ;_ \$ * -#,##0.000_ ;_ \$ * \"-\"???_ ;_ @_ ' => '_ $ * #,##0.000_ ;_ $ * -#,##0.000_ ;_ $ * \"-\"???_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => '"{#######################}"',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
