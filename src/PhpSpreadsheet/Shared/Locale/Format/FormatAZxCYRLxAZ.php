<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for азәрбајҹан / Azerbaijani (Azerbaijan).
 *
 * Do not alter this file; it is generated content.
 */
class FormatAZxCYRLxAZ extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x082C;

    /**
     * @var string The locale tag
     */
    protected $tag = 'az-cyrl-az';

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
            "\u{431}\u{430}\u{437}\u{430}\u{440}\u{A0}\u{435}\u{440}\u{442}\u{4D9}\u{441}\u{438}",
            "\u{447}\u{4D9}\u{440}\u{448}\u{4D9}\u{43D}\u{431}\u{4D9}\u{A0}\u{430}\u{445}\u{448}\u{430}\u{43C}\u{44B}",
            "\u{447}\u{4D9}\u{440}\u{448}\u{4D9}\u{43D}\u{431}\u{4D9}",
            "\u{4B9}\u{4AF}\u{43C}\u{4D9}\u{A0}\u{430}\u{445}\u{448}\u{430}\u{43C}\u{44B}",
            "\u{4B9}\u{4AF}\u{43C}\u{4D9}",
            "\u{448}\u{4D9}\u{43D}\u{431}\u{4D9}",
            "\u{431}\u{430}\u{437}\u{430}\u{440}",
        ],
        // Short name
        'short' => [
            "\u{411}\u{435}",
            "\u{427}\u{430}",
            "\u{427}",
            "\u{4B8}\u{430}",
            "\u{4B8}",
            "\u{428}",
            "\u{411}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "j\u{430}\u{43D}\u{432}\u{430}\u{440}",
            "\u{444}\u{435}\u{432}\u{440}\u{430}\u{43B}",
            "\u{43C}\u{430}\u{440}\u{442}",
            "\u{430}\u{43F}\u{440}\u{435}\u{43B}",
            "\u{43C}\u{430}\u{458}",
            "\u{438}\u{458}\u{443}\u{43D}",
            "\u{438}\u{458}\u{443}\u{43B}",
            "\u{430}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{441}\u{435}\u{43D}\u{442}\u{458}\u{430}\u{431}\u{440}",
            "\u{43E}\u{43A}\u{442}\u{458}\u{430}\u{431}\u{440}",
            "\u{43D}\u{43E}\u{458}\u{430}\u{431}\u{440}",
            "\u{434}\u{435}\u{43A}\u{430}\u{431}\u{440}",
        ],
        // Short name
        'short' => [
            "\u{408}\u{430}\u{43D}",
            "\u{424}\u{435}\u{432}",
            "\u{41C}\u{430}\u{440}",
            "\u{410}\u{43F}\u{440}",
            "\u{41C}\u{430}\u{458}",
            "\u{418}\u{458}\u{443}\u{43D}",
            "\u{418}\u{458}\u{443}\u{43B}",
            "\u{410}\u{432}\u{433}",
            "\u{421}\u{435}\u{43D}",
            "\u{41E}\u{43A}\u{442}",
            "\u{41D}\u{43E}\u{44F}",
            "\u{414}\u{435}\u{43A}",
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
