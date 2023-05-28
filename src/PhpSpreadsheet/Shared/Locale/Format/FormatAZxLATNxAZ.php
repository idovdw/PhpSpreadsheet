<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Azərbaycan / Azerbaijani (Azerbaijan).
 *
 * Do not alter this file; it is generated content.
 */
class FormatAZxLATNxAZ extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x042C;

    /**
     * @var string The locale tag
     */
    protected $tag = 'az-latn-az';

    /**
     * @var string The currency code "₼"
     */
    protected $strCurrencyCode = "\u{20BC}";

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
            "bazarçert\u{259}si",
            "ç\u{259}r\u{15F}\u{259}nb\u{259}\u{A0}ax\u{15F}am\u{131}",
            "ç\u{259}r\u{15F}\u{259}nb\u{259}",
            "cüm\u{259} ax\u{15F}am\u{131}",
            "cüm\u{259}",
            "\u{15F}\u{259}nb\u{259}",
            'bazar',
        ],
        // Short name
        'short' => [
            'B.E.',
            'Ç.A.',
            'Ç.',
            'C.A.',
            'C.',
            "\u{15E}.",
            'B.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'yanvar',
            'fevral',
            'mart',
            'aprel',
            'may',
            'iyun',
            'iyul',
            'avgust',
            'sentyabr',
            'oktyabr',
            'noyabr',
            'dekabr',
        ],
        // Short name
        'short' => [
            'yan',
            'fev',
            'mar',
            'apr',
            'may',
            'iyn',
            'iyl',
            'avq',
            'sen',
            'okt',
            'noy',
            'dek',
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            "bazarçert\u{259}si",
            "ç\u{259}r\u{15F}\u{259}nb\u{259}\u{A0}ax\u{15F}am\u{131}",
            "ç\u{259}r\u{15F}\u{259}nb\u{259}",
            "cüm\u{259} ax\u{15F}am\u{131}",
            "cüm\u{259}",
            "\u{15F}\u{259}nb\u{259}",
            'bazar',
        ],
        // Short name
        'short' => [
            'B.E',
            'Ç.A',
            'Ç',
            'C.A',
            'C',
            "\u{15E}",
            'B',
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            'yanvar',
            'fevral',
            'mart',
            'aprel',
            'may',
            'iyun',
            'iyul',
            'avgust',
            'sentyabr',
            'oktyabr',
            'noyabr',
            'dekabr',
        ],
        // Short name
        'short' => [
            'yan',
            'fev',
            'mar',
            'apr',
            'may',
            'iyn',
            'iyl',
            'avq',
            'sen',
            'okt',
            'noy',
            'dek',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd/mmm/yy',
        'd-mmm' => 'dd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'd mmmm yyyy"{, }"dddd',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
