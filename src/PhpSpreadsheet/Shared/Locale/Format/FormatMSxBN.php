<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Melayu / Malay (Brunei Darussalam).
 *
 * Do not alter this file; it is generated content.
 */
class FormatMSxBN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x083E;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ms-bn';

    /**
     * @var string The currency code "$"
     */
    protected $strCurrencyCode = '$';

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
    protected $strTimeSeparator = ': a';

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
            'Isnin',
            'Selasa',
            'Rabu',
            'Khamis',
            'Jumaat',
            'Sabtu',
            'Ahad',
        ],
        // Short name
        'short' => [
            'Isnin',
            'Sel',
            'Rabu',
            'Khamis',
            'Jumaat',
            'Sabtu',
            'Ahad',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Januari',
            'Februari',
            'Mac',
            'April',
            'Mei',
            'Jun',
            'Julai',
            'Ogos',
            'September',
            'Oktober',
            'November',
            'Disember',
        ],
        // Short name
        'short' => [
            'Jan',
            'Feb',
            'Mac',
            'Apr',
            'Mei',
            'Jun',
            'Jul',
            'Ogo',
            'Sep',
            'Okt',
            'Nov',
            'Dis',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'd/mm/yyyy',
        'm/d/yyyy h:mm' => 'd/mm/yyyy h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"d mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss"{ PG}"',
    ];
}
