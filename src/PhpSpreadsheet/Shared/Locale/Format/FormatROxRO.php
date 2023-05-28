<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Română / Romanian (Romania).
 *
 * Do not alter this file; it is generated content.
 */
class FormatROxRO extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0418;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ro-ro';

    /**
     * @var string The currency code "lei"
     */
    protected $strCurrencyCode = 'lei';

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
            'luni',
            "mar\u{21B}i",
            'miercuri',
            'joi',
            'vineri',
            "sâmb\u{103}t\u{103}",
            "duminic\u{103}",
        ],
        // Short name
        'short' => [
            'lun.',
            'mar.',
            'mie.',
            'joi',
            'vin.',
            'sâm.',
            'dum.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'ianuarie',
            'februarie',
            'martie',
            'aprilie',
            'mai',
            'iunie',
            'iulie',
            'august',
            'septembrie',
            'octombrie',
            'noiembrie',
            'decembrie',
        ],
        // Short name
        'short' => [
            'ian.',
            'feb.',
            'mar.',
            'apr.',
            'mai',
            'iun.',
            'iul.',
            'aug.',
            'sept.',
            'oct.',
            'nov.',
            'dec.',
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            'luni',
            "mar\u{21B}i",
            'miercuri',
            'joi',
            'vineri',
            "sâmb\u{103}t\u{103}",
            "duminic\u{103}",
        ],
        // Short name
        'short' => [
            'lun',
            'mar',
            'mie',
            'joi',
            'vin',
            'sâm',
            'dum',
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            'ianuarie',
            'februarie',
            'martie',
            'aprilie',
            'mai',
            'iunie',
            'iulie',
            'august',
            'septembrie',
            'octombrie',
            'noiembrie',
            'decembrie',
        ],
        // Short name
        'short' => [
            'ian',
            'feb',
            'mar',
            'apr',
            'mai',
            'iun',
            'iul',
            'aug',
            'sept',
            'oct',
            'nov',
            'dec',
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
        '[$-F800]dddd, mmmm dd, yyyy' => 'ddd"{, }"d mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
