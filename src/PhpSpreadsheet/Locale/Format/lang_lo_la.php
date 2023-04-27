<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_lo_la extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0454;

    /**
     * @var string The locale tag
     */
    protected $tag = 'lo-la';

    /**
     * @var string The currency code "₭"
     */
    protected $currencyCode = "\u{20AD}";

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
            "\u{EA7}\u{EB1}\u{E99}\u{E88}\u{EB1}\u{E99}",
            "\u{EA7}\u{EB1}\u{E99}\u{EAD}\u{EB1}\u{E87}\u{E84}\u{EB2}\u{E99}",
            "\u{EA7}\u{EB1}\u{E99}\u{E9E}\u{EB8}\u{E94}",
            "\u{EA7}\u{EB1}\u{E99}\u{E9E}\u{EB0}\u{EAB}\u{EB1}\u{E94}",
            "\u{EA7}\u{EB1}\u{E99}\u{EAA}\u{EB8}\u{E81}",
            "\u{EA7}\u{EB1}\u{E99}\u{EC0}\u{EAA}\u{EBB}\u{EB2}",
            "\u{EA7}\u{EB1}\u{E99}\u{EAD}\u{EB2}\u{E97}\u{EB4}\u{E94}",
        ],
        // Short name
        'short' => [
            "\u{E88}\u{EB1}\u{E99}",
            "\u{EAD}\u{EB1}\u{E87}\u{E84}\u{EB2}\u{E99}",
            "\u{E9E}\u{EB8}\u{E94}",
            "\u{E9E}\u{EB0}\u{EAB}\u{EB1}\u{E94}",
            "\u{EAA}\u{EB8}\u{E81}",
            "\u{EC0}\u{EAA}\u{EBB}\u{EB2}",
            "\u{EAD}\u{EB2}\u{E97}\u{EB4}\u{E94}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{EA1}\u{EB1}\u{E87}\u{E81}\u{EAD}\u{E99}",
            "\u{E81}\u{EB8}\u{EA1}\u{E9E}\u{EB2}",
            "\u{EA1}\u{EB5}\u{E99}\u{EB2}",
            "\u{EC0}\u{EA1}\u{EAA}\u{EB2}",
            "\u{E9E}\u{EB6}\u{E94}\u{EAA}\u{EB0}\u{E9E}\u{EB2}",
            "\u{EA1}\u{EB4}\u{E96}\u{EB8}\u{E99}\u{EB2}",
            "\u{E81}\u{ECD}\u{EA5}\u{EB0}\u{E81}\u{EBB}\u{E94}",
            "\u{EAA}\u{EB4}\u{E87}\u{EAB}\u{EB2}",
            "\u{E81}\u{EB1}\u{E99}\u{E8D}\u{EB2}",
            "\u{E95}\u{EB8}\u{EA5}\u{EB2}",
            "\u{E9E}\u{EB0}\u{E88}\u{EB4}\u{E81}",
            "\u{E97}\u{EB1}\u{E99}\u{EA7}\u{EB2}",
        ],
        // Short name
        'short' => [
            "\u{EA1}.\u{E81}.",
            "\u{E81}.\u{E9E}.",
            "\u{EA1}.\u{E99}.",
            "\u{EA1}.\u{EAA}.",
            "\u{E9E}.\u{E9E}.",
            "\u{EA1}\u{EB4}.\u{E96}.",
            "\u{E81}.\u{EA5}.",
            "\u{EAA}.\u{EAB}.",
            "\u{E81}.\u{E8D}.",
            "\u{E95}.\u{EA5}.",
            "\u{E9E}.\u{E88}.",
            "\u{E97}.\u{EA7}.",
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
