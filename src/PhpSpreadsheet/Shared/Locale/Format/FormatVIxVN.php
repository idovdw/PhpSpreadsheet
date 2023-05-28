<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Tiếng Việt / Vietnamese (Vietnam).
 *
 * Do not alter this file; it is generated content.
 */
class FormatVIxVN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x042A;

    /**
     * @var string The locale tag
     */
    protected $tag = 'vi-vn';

    /**
     * @var string The currency code "₫"
     */
    protected $strCurrencyCode = "\u{20AB}";

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
            "Th\u{1B0}\u{301} Hai",
            "Th\u{1B0}\u{301} Ba",
            "Th\u{1B0}\u{301} T\u{1B0}",
            "Th\u{1B0}\u{301} N\u{103}m",
            "Th\u{1B0}\u{301} Sa\u{301}u",
            "Th\u{1B0}\u{301} Ba\u{309}y",
            "Chu\u{309} Nhâ\u{323}t",
        ],
        // Short name
        'short' => [
            'T2',
            'T3',
            'T4',
            'T5',
            'T6',
            'T7',
            'CN',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "Tha\u{301}ng Giêng",
            "Tha\u{301}ng Hai",
            "Tha\u{301}ng Ba",
            "Tha\u{301}ng T\u{1B0}",
            "Tha\u{301}ng N\u{103}m",
            "Tha\u{301}ng Sa\u{301}u",
            "Tha\u{301}ng Ba\u{309}y",
            "Tha\u{301}ng Ta\u{301}m",
            "Tha\u{301}ng Chi\u{301}n",
            "Tha\u{301}ng M\u{1B0}\u{1A1}\u{300}i",
            "Tha\u{301}ng M\u{1B0}\u{1A1}\u{300}i Mô\u{323}t",
            "Tha\u{301}ng M\u{1B0}\u{1A1}\u{300}i Hai",
        ],
        // Short name
        'short' => [
            'Thg1',
            'Thg2',
            'Thg3',
            'Thg4',
            'Thg5',
            'Thg6',
            'Thg7',
            'Thg8',
            'Thg9',
            'Thg10',
            'Thg11',
            'Thg12',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dd mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss"{ S}"A/P',
    ];
}
