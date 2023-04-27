<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_haw_us extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0475;

    /**
     * @var string The locale tag
     */
    protected $tag = 'haw-us';

    /**
     * @var string The currency code "$"
     */
    protected $currencyCode = '$';

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
            "Po\u{2BB}akahi",
            "Po\u{2BB}alua",
            "Po\u{2BB}akolu",
            "Po\u{2BB}ah\u{101}",
            "Po\u{2BB}alima",
            "Po\u{2BB}aono",
            "L\u{101}pule",
        ],
        // Short name
        'short' => [
            'P1',
            'P2',
            'P3',
            'P4',
            'P5',
            'P6',
            'LP',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'Ianuali',
            'Pepeluali',
            'Malaki',
            "\u{2BB}Apelila",
            'Mei',
            'Iune',
            'Iulai',
            "\u{2BB}Aukake",
            'Kepakemapa',
            "\u{2BB}Okakopa",
            'Nowemapa',
            'Kekemapa',
        ],
        // Short name
        'short' => [
            'Ian.',
            'Pep.',
            'Mal.',
            "\u{2BB}Ap.",
            'Mei',
            'Iun.',
            'Iul.',
            "\u{2BB}Au.",
            'Kep.',
            "\u{2BB}Ok.",
            'Now.',
            'Kek.',
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
