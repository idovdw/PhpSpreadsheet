<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Kiswahili / Swahili (Kenya).
 *
 * Do not alter this file; it is generated content.
 */
class FormatSWxKE extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0441;

    /**
     * @var string The locale tag
     */
    protected $tag = 'sw-ke';

    /**
     * @var string The currency code "Ksh"
     */
    protected $strCurrencyCode = 'Ksh';

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
            'Jumatatu',
            'Jumanne',
            'Jumatano',
            'Alhamisi',
            'Ijumaa',
            'Jumamosi',
            'Jumapili',
        ],
        // Short name
        'short' => [
            'Jtt',
            'Jnn',
            'Jtn',
            'Alh',
            'Ijm',
            'Jms',
            'Jpl',
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
            'Machi',
            'Aprili',
            'Mei',
            'Juni',
            'Julai',
            'Agosti',
            'Septemba',
            'Oktoba',
            'Novemba',
            'Desemba',
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
            'Ago',
            'Sep',
            'Okt',
            'Nov',
            'Des',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
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
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"d mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
