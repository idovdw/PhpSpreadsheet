<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_fy_nl extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0462;

    /**
     * @var string The locale tag
     */
    protected $tag = 'fy-nl';

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
            'moandei',
            'tiisdei',
            'woansdei',
            'tongersdei',
            'freed',
            'sneon',
            'snein',
        ],
        // Short name
        'short' => [
            'moa',
            'tii',
            'woa',
            'ton',
            'fre',
            'sno',
            'sni',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Jannewaris',
            'Febrewaris',
            'Maart',
            'April',
            'Maaie',
            'Juny',
            'July',
            'Augustus',
            'Septimber',
            'Oktober',
            'Novimber',
            'Desimber',
        ],
        // Short name
        'short' => [
            'jan',
            'feb',
            'Mrt',
            'Apr',
            'maa',
            'Jun',
            'Jul',
            'Aug',
            'sep',
            'Okt',
            'Nov',
            'Des',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        'm/d/yyyy' => 'd/m/yyyy',
        'd-mmm-yy' => 'd/mmm/yy',
        'd-mmm' => 'd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'd/m/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_(* #,##0_);_(* (#,##0);_(* "-"_);_(@_)' => '_ * #,##0_ ;_ * -#,##0_ ;_ * "-"_ ;_ @_ ',
        '_(* #,##0.00_);_(* (#,##0.00);_(* "-"??_);_(@_)' => '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * "-"??_ ;_ @_ ',
        '$ #,##0.00' => '$ #,##0.00',
        '$ #,##0.00;[Red]$ #,##0.00' => '$ #,##0.00;[Red]$ #,##0.00',
        '$#,##0.00_);($#,##0.00)' => '$ #,##0.00;$ -#,##0.00',
        '$#,##0.00_);[Red]($#,##0.00)' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_($* #,##0_);_($* (#,##0);_($* "-"_);_(@_)' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ',
        '_ $ * #,##0.0_ ;_ $ * -#,##0.0_ ;_ $ * "-"?_ ;_ @_ ' => '_ $ * #,##0.0_ ;_ $ * -#,##0.0_ ;_ $ * "-"?_ ;_ @_ ',
        '_($* #,##0.00_);_($* (#,##0.00);_($* "-"??_);_(@_)' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ',
        '_ $ * #,##0.000_ ;_ $ * -#,##0.000_ ;_ $ * "-"???_ ;_ @_ ' => '_ $ * #,##0.000_ ;_ $ * -#,##0.000_ ;_ $ * "-"???_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd d mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
