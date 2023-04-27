<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_xh_za extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0434;

    /**
     * @var string The locale tag
     */
    protected $tag = 'xh-za';

    /**
     * @var string The currency code "R"
     */
    protected $currencyCode = 'R';

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = '.';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = "\u{a0}";

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
            'Mvulo',
            'Lwesibini',
            'Lwesithathu',
            'Lwesine',
            'Lwesihlanu',
            'Mgqibelo',
            'Cawe',
        ],
        // Short name
        'short' => [
            'uMv.',
            'uLwesib.',
            'uLwesith.',
            'uLwesin.',
            'uLwesihl.',
            'uMgq.',
            'iCa.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'uJanuwari',
            'uFebuwari',
            'uMatshi',
            'uAprili',
            'uMeyi',
            'uJuni',
            'uJulayi',
            'uAgasti',
            'uSeptemba',
            'uOktobha',
            'uNovemba',
            'uDisemba',
        ],
        // Short name
        'short' => [
            'uJan.',
            'uFeb.',
            'uMat.',
            'uEpr.',
            'uMey.',
            'uJun.',
            'uJul.',
            'uAg.',
            'uSep.',
            'uOkt.',
            'uNov.',
            'uDis.',
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
