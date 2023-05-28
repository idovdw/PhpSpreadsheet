<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Gàidhlig / Scottish Gaelic (United Kingdom).
 *
 * Do not alter this file; it is generated content.
 */
class FormatGDxGB extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0491;

    /**
     * @var string The locale tag
     */
    protected $tag = 'gd-gb';

    /**
     * @var string The currency code "£"
     */
    protected $strCurrencyCode = '£';

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
            'DiLuain',
            "DiM\u{E0}irt",
            'DiCiadain',
            'DiarDaoin',
            'DihAoine',
            'DiSathairne',
            'DiDòmhnaich',
        ],
        // Short name
        'short' => [
            'DiL',
            'DiM',
            'DiC',
            'Dia',
            'Dih',
            'DiS',
            'DiD',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Am Faoilleach',
            'An Gearran',
            "Am M\u{E0}rt",
            'An Giblean',
            'An Cèitean',
            'An t-Ògmhios',
            'An t-Iuchar',
            'An Lùnastal',
            'An t-Sultain',
            "An D\u{E0}mhair",
            'An t-Samhain',
            'An Dùbhlachd',
        ],
        // Short name
        'short' => [
            'Faoi',
            'Gear',
            "M\u{E0}rt",
            'Gibl',
            'Cèit',
            'Ògmh',
            'Iuch',
            'Lùna',
            'Sult',
            "D\u{E0}mh",
            'Samh',
            'Dùbh',
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
        '[$-F800]dddd, mmmm dd, yyyy' => '"{#######################}"',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
