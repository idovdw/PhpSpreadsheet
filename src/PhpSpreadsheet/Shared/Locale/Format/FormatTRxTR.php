<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Türkçe / Turkish (Turkey).
 *
 * Do not alter this file; it is generated content.
 */
class FormatTRxTR extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x041F;

    /**
     * @var string The locale tag
     */
    protected $tag = 'tr-tr';

    /**
     * @var string The currency code "₺"
     */
    protected $strCurrencyCode = "\u{20BA}";

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
    protected $strDateSeparator = '.';

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
            'Pazartesi',
            "Sal\u{131}",
            "Çar\u{15F}amba",
            "Per\u{15F}embe",
            'Cuma',
            'Cumartesi',
            'Pazar',
        ],
        // Short name
        'short' => [
            'Pzt',
            'Sal',
            'Çar',
            'Per',
            'Cum',
            'Cmt',
            'Paz',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Ocak',
            "\u{15E}ubat",
            'Mart',
            'Nisan',
            "May\u{131}s",
            'Haziran',
            'Temmuz',
            "A\u{11F}ustos",
            'Eylül',
            'Ekim',
            "Kas\u{131}m",
            "Aral\u{131}k",
        ],
        // Short name
        'short' => [
            'Oca',
            "\u{15E}ub",
            'Mar',
            'Nis',
            'May',
            'Haz',
            'Tem',
            "A\u{11F}u",
            'Eyl',
            'Eki',
            'Kas',
            'Ara',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'd/mm/yyyy',
        'd-mmm-yy' => 'd/mmm/yy',
        'd-mmm' => 'd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'd/mm/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'm mmmm yyyy mmmm',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:hh',
    ];
}
