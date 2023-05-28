<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Srpski / Serbian (Serbia).
 *
 * Do not alter this file; it is generated content.
 */
class FormatSRxLATNxRS extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x241A;

    /**
     * @var string The locale tag
     */
    protected $tag = 'sr-latn-rs';

    /**
     * @var string The currency code "RSD"
     */
    protected $strCurrencyCode = 'RSD';

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
            'ponedeljak',
            'utorak',
            'sreda',
            "\u{10D}etvrtak",
            'petak',
            'subota',
            'nedelja',
        ],
        // Short name
        'short' => [
            'pon',
            'uto',
            'sre',
            "\u{10D}et",
            'pet',
            'sub',
            'ned',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'januar',
            'februar',
            'mart',
            'april',
            'maj',
            'jun',
            'jul',
            'avgust',
            'septembar',
            'oktobar',
            'novembar',
            'decembar',
        ],
        // Short name
        'short' => [
            'jan',
            'feb',
            'mar',
            'apr',
            'maj',
            'jun',
            'jul',
            'avg',
            'sep',
            'okt',
            'nov',
            'dec',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'd/m/yyyy',
        'd-mmm-yy' => 'd/mmm/yy',
        'd-mmm' => 'd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'd/m/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"dd"{. }"mmm yyyy/',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
