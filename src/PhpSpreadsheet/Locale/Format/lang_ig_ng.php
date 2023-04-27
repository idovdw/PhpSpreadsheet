<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_ig_ng extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0470;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ig-ng';

    /**
     * @var string The currency code "₦"
     */
    protected $currencyCode = "\u{20A6}";

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
            "M\u{1ECD}nde",
            'Tiuzdee',
            'Wenezdee',
            "T\u{1ECD}\u{1ECD}zdee",
            "Fra\u{1ECB}dee",
            "Sat\u{1ECD}dee",
            "\u{1EE4}b\u{1ECD}ch\u{1ECB} \u{1EE4}ka",
        ],
        // Short name
        'short' => [
            "M\u{1ECD}n",
            'Tiu',
            'Wen',
            "T\u{1ECD}\u{1ECD}",
            "Fra\u{1ECB}",
            'Sat',
            "\u{1EE4}ka",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "Jen\u{1EE5}war\u{1ECB}",
            "Feb\u{1EE5}war\u{1ECB}",
            "Mach\u{1ECB}",
            'Eprelu',
            'Mey',
            'Juun',
            "Jula\u{1ECB}",
            "\u{1ECC}g\u{1ECD}st",
            'Septemba',
            "\u{1ECC}ckt\u{1ECD}ba",
            "N\u{1ECD}vemba",
            'Disemba',
        ],
        // Short name
        'short' => [
            'Jen',
            'Feb',
            'Mac',
            'Epr',
            'Mey',
            'Jun',
            'Jul',
            "\u{1ECC}g\u{1ECD}",
            'Sep',
            "\u{1ECC}kt",
            "N\u{1ECD}v",
            'Dis',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '$ #,##0.00' => '$ #,##0.00',
        '$ #,##0.00;[Red]$ #,##0.00' => '$ #,##0.00;[Red]$ #,##0.00',
        '$ #,##0.00;$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '$ #,##0.00;[Red]$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ',
        '_ $ * #,##0.0_ ;_ $ * -#,##0.0_ ;_ $ * "-"?_ ;_ @_ ' => '_ $ * #,##0.0_ ;_ $ * -#,##0.0_ ;_ $ * "-"?_ ;_ @_ ',
        '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ',
        '_ $ * #,##0.000_ ;_ $ * -#,##0.000_ ;_ $ * "-"???_ ;_ @_ ' => '_ $ * #,##0.000_ ;_ $ * -#,##0.000_ ;_ $ * "-"???_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd d mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
