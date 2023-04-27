<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_om_et extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0472;

    /**
     * @var string The locale tag
     */
    protected $tag = 'om-et';

    /**
     * @var string The currency code "Br"
     */
    protected $currencyCode = 'Br';

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
            'Wiixata',
            'Qibxata',
            'Roobii',
            'Kamiisa',
            'Jimaata',
            'Sanbata',
            'Dilbata',
        ],
        // Short name
        'short' => [
            'Wix',
            'Qib',
            'Rob',
            'Kam',
            'Jim',
            'San',
            'Dil',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Amajjii',
            'Guraandhala',
            'Bitooteessa',
            'Elba',
            'Caamsa',
            'Waxabajjii',
            'Adooleessa',
            'Hagayya',
            'Fuulbana',
            'Onkololeessa',
            'Sadaasa',
            'Muddee',
        ],
        // Short name
        'short' => [
            'Ama',
            'Gur',
            'Bit',
            'Elb',
            'Cam',
            'Wax',
            'Ado',
            'Hag',
            'Ful',
            'Onk',
            'Sad',
            'Mud',
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
