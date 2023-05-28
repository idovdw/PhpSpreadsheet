<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for తెలుగు / Telugu (India).
 *
 * Do not alter this file; it is generated content.
 */
class FormatTExIN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x044A;

    /**
     * @var string The locale tag
     */
    protected $tag = 'te-in';

    /**
     * @var string The currency code "₹"
     */
    protected $strCurrencyCode = "\u{20B9}";

    /**
     * @var string The decimal separator "."
     */
    protected $strDecimalSeparator = '.';

    /**
     * @var string The thousands separator ","
     */
    protected $strThousandsSeparator = ',';

    /**
     * @var int The thousands format pattern
     */
    protected $intThousandsFormatPattern = self::THOUSANDS_FORMAT_HECTO;

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = '-';

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
            "\u{C38}\u{C4B}\u{C2E}\u{C35}\u{C3E}\u{C30}\u{C02}",
            "\u{C2E}\u{C02}\u{C17}\u{C33}\u{C35}\u{C3E}\u{C30}\u{C02}",
            "\u{C2C}\u{C41}\u{C27}\u{C35}\u{C3E}\u{C30}\u{C02}",
            "\u{C17}\u{C41}\u{C30}\u{C41}\u{C35}\u{C3E}\u{C30}\u{C02}",
            "\u{C36}\u{C41}\u{C15}\u{C4D}\u{C30}\u{C35}\u{C3E}\u{C30}\u{C02}",
            "\u{C36}\u{C28}\u{C3F}\u{C35}\u{C3E}\u{C30}\u{C02}",
            "\u{C06}\u{C26}\u{C3F}\u{C35}\u{C3E}\u{C30}\u{C02}",
        ],
        // Short name
        'short' => [
            "\u{C38}\u{C4B}\u{C2E}",
            "\u{C2E}\u{C02}\u{C17}\u{C33}",
            "\u{C2C}\u{C41}\u{C27}",
            "\u{C17}\u{C41}\u{C30}\u{C41}",
            "\u{C36}\u{C41}\u{C15}\u{C4D}\u{C30}",
            "\u{C36}\u{C28}\u{C3F}",
            "\u{C06}\u{C26}\u{C3F}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{C1C}\u{C28}\u{C35}\u{C30}\u{C3F}",
            "\u{C2B}\u{C3F}\u{C2C}\u{C4D}\u{C30}\u{C35}\u{C30}\u{C3F}",
            "\u{C2E}\u{C3E}\u{C30}\u{C4D}\u{C1A}\u{C3F}",
            "\u{C0F}\u{C2A}\u{C4D}\u{C30}\u{C3F}\u{C32}\u{C4D}",
            "\u{C2E}\u{C47}",
            "\u{C1C}\u{C42}\u{C28}\u{C4D}",
            "\u{C1C}\u{C41}\u{C32}\u{C48}",
            "\u{C06}\u{C17}\u{C38}\u{C4D}\u{C1F}\u{C41}",
            "\u{C38}\u{C46}\u{C2A}\u{C4D}\u{C1F}\u{C46}\u{C02}\u{C2C}\u{C30}\u{C4D}",
            "\u{C05}\u{C15}\u{C4D}\u{C1F}\u{C4B}\u{C2C}\u{C30}\u{C4D}",
            "\u{C28}\u{C35}\u{C02}\u{C2C}\u{C30}\u{C4D}",
            "\u{C21}\u{C3F}\u{C38}\u{C46}\u{C02}\u{C2C}\u{C30}\u{C4D}",
        ],
        // Short name
        'short' => [
            "\u{C1C}\u{C28}",
            "\u{C2B}\u{C3F}\u{C2C}\u{C4D}\u{C30}",
            "\u{C2E}\u{C3E}\u{C30}\u{C4D}\u{C1A}\u{C3F}",
            "\u{C0F}\u{C2A}\u{C4D}\u{C30}\u{C3F}",
            "\u{C2E}\u{C47}",
            "\u{C1C}\u{C42}\u{C28}\u{C4D}",
            "\u{C1C}\u{C41}\u{C32}\u{C48}",
            "\u{C06}\u{C17}",
            "\u{C38}\u{C46}\u{C2A}\u{C4D}\u{C1F}\u{C46}\u{C02}",
            "\u{C05}\u{C15}\u{C4D}\u{C1F}\u{C4B}",
            "\u{C28}\u{C35}\u{C02}",
            "\u{C21}\u{C3F}\u{C38}\u{C46}\u{C02}",
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
        '[$-F800]dddd, mmmm dd, yyyy' => 'd"{, }"mmm yyyy"{, }"dddd',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}