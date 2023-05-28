<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for српски / Serbian (Bosnia and Herzegovina).
 *
 * Do not alter this file; it is generated content.
 */
class FormatSRxCYRLxBA extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x1C1A;

    /**
     * @var string The locale tag
     */
    protected $tag = 'sr-cyrl-ba';

    /**
     * @var string The currency code "КМ"
     */
    protected $strCurrencyCode = "\u{41A}\u{41C}";

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
            "\u{43F}\u{43E}\u{43D}\u{435}\u{434}\u{458}\u{435}\u{459}\u{430}\u{43A}",
            "\u{443}\u{442}\u{43E}\u{440}\u{430}\u{43A}",
            "\u{441}\u{440}\u{438}\u{458}\u{435}\u{434}\u{430}",
            "\u{447}\u{435}\u{442}\u{432}\u{440}\u{442}\u{430}\u{43A}",
            "\u{43F}\u{435}\u{442}\u{430}\u{43A}",
            "\u{441}\u{443}\u{431}\u{43E}\u{442}\u{430}",
            "\u{43D}\u{435}\u{434}\u{458}\u{435}\u{459}\u{430}",
        ],
        // Short name
        'short' => [
            "\u{43F}\u{43E}\u{43D}",
            "\u{443}\u{442}\u{43E}",
            "\u{441}\u{440}\u{438}",
            "\u{447}\u{435}\u{442}",
            "\u{43F}\u{435}\u{442}",
            "\u{441}\u{443}\u{431}",
            "\u{43D}\u{435}\u{434}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{458}\u{430}\u{43D}\u{443}\u{430}\u{440}",
            "\u{444}\u{435}\u{431}\u{440}\u{443}\u{430}\u{440}",
            "\u{43C}\u{430}\u{440}\u{442}",
            "\u{430}\u{43F}\u{440}\u{438}\u{43B}",
            "\u{43C}\u{430}\u{458}",
            "\u{458}\u{443}\u{43D}\u{438}",
            "\u{458}\u{443}\u{43B}\u{438}",
            "\u{430}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{441}\u{435}\u{43F}\u{442}\u{435}\u{43C}\u{431}\u{430}\u{440}",
            "\u{43E}\u{43A}\u{442}\u{43E}\u{431}\u{430}\u{440}",
            "\u{43D}\u{43E}\u{432}\u{435}\u{43C}\u{431}\u{430}\u{440}",
            "\u{434}\u{435}\u{446}\u{435}\u{43C}\u{431}\u{430}\u{440}",
        ],
        // Short name
        'short' => [
            "\u{458}\u{430}\u{43D}",
            "\u{444}\u{435}\u{431}",
            "\u{43C}\u{430}\u{440}",
            "\u{430}\u{43F}\u{440}",
            "\u{43C}\u{430}\u{458}",
            "\u{458}\u{443}\u{43D}",
            "\u{458}\u{443}\u{43B}",
            "\u{430}\u{432}\u{433}",
            "\u{441}\u{435}\u{43F}",
            "\u{43E}\u{43A}\u{442}",
            "\u{43D}\u{43E}\u{432}",
            "\u{434}\u{435}\u{446}",
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
        'm/d/yyyy h:mm' => 'dd/mm/yyyy h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'd"{. }"mmm yyyy/',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
