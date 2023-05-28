<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Filipino (Philippines).
 *
 * Do not alter this file; it is generated content.
 */
class FormatFILxPH extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0464;

    /**
     * @var string The locale tag
     */
    protected $tag = 'fil-ph';

    /**
     * @var string The currency code "₱"
     */
    protected $strCurrencyCode = "\u{20B1}";

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
            'Lunes',
            'Martes',
            'Miyerkules',
            'Huwebes',
            'Biyernes',
            'Sabado',
            'Linggo',
        ],
        // Short name
        'short' => [
            'Lun',
            'Mar',
            'Miy',
            'Huw',
            'Biy',
            'Sab',
            'Lin',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Enero',
            'Pebrero',
            'Marso',
            'Abril',
            'Mayo',
            'Hunyo',
            'Hulyo',
            'Agosto',
            'Setyembre',
            'Oktubre',
            'Nobyembre',
            'Disyembre',
        ],
        // Short name
        'short' => [
            'Ene',
            'Peb',
            'Mar',
            'Abr',
            'May',
            'Hun',
            'Hul',
            'Ago',
            'Set',
            'Okt',
            'Nob',
            'Dis',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"mmmm d"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
