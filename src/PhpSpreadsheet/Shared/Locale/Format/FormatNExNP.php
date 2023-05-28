<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for नेपाली / Nepali (Nepal).
 *
 * Do not alter this file; it is generated content.
 */
class FormatNExNP extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0461;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ne-np';

    /**
     * @var string The currency code "रु"
     */
    protected $strCurrencyCode = "\u{930}\u{941}";

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
            "\u{938}\u{94B}\u{92E}\u{935}\u{93E}\u{930}",
            "\u{92E}\u{919}\u{94D}\u{917}\u{932}\u{935}\u{93E}\u{930}",
            "\u{92C}\u{941}\u{927}\u{935}\u{93E}\u{930}",
            "\u{92C}\u{93F}\u{939}\u{940}\u{935}\u{93E}\u{930}",
            "\u{936}\u{941}\u{915}\u{94D}\u{930}\u{935}\u{93E}\u{930}",
            "\u{936}\u{928}\u{93F}\u{935}\u{93E}\u{930}",
            "\u{906}\u{907}\u{924}\u{935}\u{93E}\u{930}",
        ],
        // Short name
        'short' => [
            "\u{938}\u{94B}\u{92E}",
            "\u{92E}\u{919}\u{94D}\u{917}\u{932}",
            "\u{92C}\u{941}\u{927}",
            "\u{92C}\u{93F}\u{939}\u{940}",
            "\u{936}\u{941}\u{915}\u{94D}\u{930}",
            "\u{936}\u{928}\u{93F}",
            "\u{906}\u{907}\u{924}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{91C}\u{928}\u{935}\u{930}\u{940}",
            "\u{92B}\u{947}\u{92C}\u{94D}\u{930}\u{941}\u{905}\u{930}\u{940}",
            "\u{92E}\u{93E}\u{930}\u{94D}\u{91A}",
            "\u{905}\u{92A}\u{94D}\u{930}\u{93F}\u{932}",
            "\u{92E}\u{947}",
            "\u{91C}\u{942}\u{928}",
            "\u{91C}\u{941}\u{932}\u{93E}\u{908}",
            "\u{905}\u{917}\u{938}\u{94D}\u{924}",
            "\u{938}\u{947}\u{92A}\u{94D}\u{91F}\u{947}\u{92E}\u{94D}\u{92C}\u{930}",
            "\u{905}\u{915}\u{94D}\u{91F}\u{94B}\u{92C}\u{930}",
            "\u{928}\u{94B}\u{92D}\u{947}\u{92E}\u{94D}\u{92C}\u{930}",
            "\u{921}\u{93F}\u{938}\u{947}\u{92E}\u{94D}\u{92C}\u{930}",
        ],
        // Short name
        'short' => [
            "\u{91C}\u{928}",
            "\u{92B}\u{947}\u{92C}",
            "\u{92E}\u{93E}\u{930}\u{94D}\u{91A}",
            "\u{905}\u{92A}\u{94D}\u{930}\u{93F}\u{932}",
            "\u{92E}\u{947}",
            "\u{91C}\u{942}\u{928}",
            "\u{91C}\u{941}\u{932}\u{93E}\u{908}",
            "\u{905}\u{917}",
            "\u{938}\u{947}\u{92A}\u{94D}\u{91F}",
            "\u{905}\u{915}\u{94D}\u{91F}",
            "\u{928}\u{94B}\u{92D}",
            "\u{921}\u{93F}\u{938}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"mmm dd"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => "h:mm:ss\"{ \u{92A}\u{942}\u{930}\u{94D}\u{935}\u{93E}\u{939}\u{94D}\u{928}}\"",
    ];
}
