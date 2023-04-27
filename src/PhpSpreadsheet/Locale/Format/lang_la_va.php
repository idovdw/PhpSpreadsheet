<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_la_va extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0476;

    /**
     * @var string The locale tag
     */
    protected $tag = 'la-va';

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
            'dies Lunae',
            'dies Martis',
            'dies Mercurii',
            'dies Iovis',
            'dies Veneris',
            'dies Sabbati',
            'Dominica',
        ],
        // Short name
        'short' => [
            'Lun',
            'Mar',
            'Mer',
            'Iov',
            'Ven',
            'Sab',
            'Dom',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Ianuarius',
            'Februarius',
            'Martius',
            'Aprilis',
            'Maius',
            'Iunius',
            'Iulius',
            'Augustus',
            'September',
            'October',
            'November',
            'December',
        ],
        // Short name
        'short' => [
            'Ian',
            'Feb',
            'Mar',
            'Apr',
            'Mai',
            'Iun',
            'Iul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        '$ #,##0;$ -#,##0' => '$ #,##0;$ -#,##0',
        '$ #,##0;[Red]$ -#,##0' => '$ #,##0;[Red]$ -#,##0',
        '$ #,##0.00;$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '$ #,##0.00;[Red]$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ',
        '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"mmmm d"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
