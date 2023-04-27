<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_tr_tr extends FormatLocale
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
    protected $currencyCode = "\u{20BA}";

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
    protected $dateSeparator = '.';

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
    protected $monthNames = [
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
    protected $formatReplacements = [
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
