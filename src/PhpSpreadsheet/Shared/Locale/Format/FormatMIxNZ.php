<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Te reo Māori / Māori (New Zealand).
 *
 * Do not alter this file; it is generated content.
 */
class FormatMIxNZ extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0481;

    /**
     * @var string The locale tag
     */
    protected $tag = 'mi-nz';

    /**
     * @var string The currency code "$"
     */
    protected $strCurrencyCode = '$';

    /**
     * @var string The decimal separator "."
     */
    protected $strDecimalSeparator = '.';

    /**
     * @var string The thousands separator ","
     */
    protected $strThousandsSeparator = ',';

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
            "R\u{101}hina",
            "R\u{101}t\u{16B}",
            "R\u{101}apa",
            "R\u{101}pare",
            "R\u{101}mere",
            "R\u{101}horoi",
            "R\u{101}tapu",
        ],
        // Short name
        'short' => [
            'Hi',
            "T\u{16B}",
            'Apa',
            'Pa',
            'Me',
            'Ho',
            'Ta',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "Kohit\u{101}tea",
            'Huitanguru',
            "Pout\u{16B}terangi",
            "Paengawh\u{101}wh\u{101}",
            'Haratua',
            'Pipiri',
            "H\u{14D}ngongoi",
            "Hereturik\u{14D}k\u{101}",
            'Mahuru',
            "Whiringa \u{101}-nuku",
            "Whiringa \u{101}-rangi",
            'Hakihea',
        ],
        // Short name
        'short' => [
            'Kohi',
            'Hui',
            'Pou',
            'Pae',
            'Hara',
            'Pipi',
            "H\u{14D}ngo",
            'Here',
            'Mahu',
            'Nuku',
            'Rangi',
            'Haki',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        '\$ #,##0;\$ -#,##0' => '$ #,##0;$ -#,##0',
        '\$ #,##0;[Red]\$ -#,##0' => '$ #,##0;[Red]$ -#,##0',
        '\$ #,##0.00;\$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '\$ #,##0.00;[Red]\$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * \"-\"_ ;_ @_ ',
        '_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => '"{#######################}"',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss"{ a.m.}"',
    ];
}
