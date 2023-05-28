<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for मराठी / Marathi (India).
 *
 * Do not alter this file; it is generated content.
 */
class FormatMRxIN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x044E;

    /**
     * @var string The locale tag
     */
    protected $tag = 'mr-in';

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
            "\u{938}\u{94B}\u{92E}\u{935}\u{93E}\u{930}",
            "\u{92E}\u{902}\u{917}\u{933}\u{935}\u{93E}\u{930}",
            "\u{92C}\u{941}\u{927}\u{935}\u{93E}\u{930}",
            "\u{917}\u{941}\u{930}\u{941}\u{935}\u{93E}\u{930}",
            "\u{936}\u{941}\u{915}\u{94D}\u{930}\u{935}\u{93E}\u{930}",
            "\u{936}\u{928}\u{93F}\u{935}\u{93E}\u{930}",
            "\u{930}\u{935}\u{93F}\u{935}\u{93E}\u{930}",
        ],
        // Short name
        'short' => [
            "\u{938}\u{94B}\u{92E}.",
            "\u{92E}\u{902}\u{917}\u{933}.",
            "\u{92C}\u{941}\u{927}.",
            "\u{917}\u{941}\u{930}\u{941}.",
            "\u{936}\u{941}\u{915}\u{94D}\u{930}.",
            "\u{936}\u{928}\u{93F}.",
            "\u{930}\u{935}\u{93F}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{91C}\u{93E}\u{928}\u{947}\u{935}\u{93E}\u{930}\u{940}",
            "\u{92B}\u{947}\u{92C}\u{94D}\u{930}\u{941}\u{935}\u{93E}\u{930}\u{940}",
            "\u{92E}\u{93E}\u{930}\u{94D}\u{91A}",
            "\u{90F}\u{92A}\u{94D}\u{930}\u{93F}\u{932}",
            "\u{92E}\u{947}",
            "\u{91C}\u{942}\u{928}",
            "\u{91C}\u{941}\u{932}\u{948}",
            "\u{911}\u{917}\u{938}\u{94D}\u{91F}",
            "\u{938}\u{92A}\u{94D}\u{91F}\u{947}\u{902}\u{92C}\u{930}",
            "\u{911}\u{915}\u{94D}\u{91F}\u{94B}\u{92C}\u{930}",
            "\u{928}\u{94B}\u{935}\u{94D}\u{939}\u{947}\u{902}\u{92C}\u{930}",
            "\u{921}\u{93F}\u{938}\u{947}\u{902}\u{92C}\u{930}",
        ],
        // Short name
        'short' => [
            "\u{91C}\u{93E}\u{928}\u{947}.",
            "\u{92B}\u{947}\u{92C}\u{94D}\u{930}\u{941}.",
            "\u{92E}\u{93E}\u{930}\u{94D}\u{91A}",
            "\u{90F}\u{92A}\u{94D}\u{930}\u{93F}",
            "\u{92E}\u{947}",
            "\u{91C}\u{942}\u{928}",
            "\u{91C}\u{941}\u{932}\u{948}",
            "\u{911}\u{917}.",
            "\u{938}\u{92A}\u{94D}\u{91F}\u{947}\u{902}.",
            "\u{911}\u{915}\u{94D}\u{91F}\u{94B}.",
            "\u{928}\u{94B}\u{935}\u{94D}\u{939}\u{947}\u{902}.",
            "\u{921}\u{93F}\u{938}\u{947}\u{902}.",
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            "\u{938}\u{94B}\u{92E}\u{935}\u{93E}\u{930}",
            "\u{92E}\u{902}\u{917}\u{933}\u{935}\u{93E}\u{930}",
            "\u{92C}\u{941}\u{927}\u{935}\u{93E}\u{930}",
            "\u{917}\u{941}\u{930}\u{941}\u{935}\u{93E}\u{930}",
            "\u{936}\u{941}\u{915}\u{94D}\u{930}\u{935}\u{93E}\u{930}",
            "\u{936}\u{928}\u{93F}\u{935}\u{93E}\u{930}",
            "\u{930}\u{935}\u{93F}\u{935}\u{93E}\u{930}",
        ],
        // Short name
        'short' => [
            "\u{938}\u{94B}\u{92E}",
            "\u{92E}\u{902}\u{917}\u{933}",
            "\u{92C}\u{941}\u{927}",
            "\u{917}\u{941}\u{930}\u{941}",
            "\u{936}\u{941}\u{915}\u{94D}\u{930}",
            "\u{936}\u{928}\u{93F}",
            "\u{930}\u{935}\u{93F}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            "\u{91C}\u{93E}\u{928}\u{947}\u{935}\u{93E}\u{930}\u{940}",
            "\u{92B}\u{947}\u{92C}\u{94D}\u{930}\u{941}\u{935}\u{93E}\u{930}\u{940}",
            "\u{92E}\u{93E}\u{930}\u{94D}\u{91A}",
            "\u{90F}\u{92A}\u{94D}\u{930}\u{93F}\u{932}",
            "\u{92E}\u{947}",
            "\u{91C}\u{942}\u{928}",
            "\u{91C}\u{941}\u{932}\u{948}",
            "\u{911}\u{917}\u{938}\u{94D}\u{91F}",
            "\u{938}\u{92A}\u{94D}\u{91F}\u{947}\u{902}\u{92C}\u{930}",
            "\u{911}\u{915}\u{94D}\u{91F}\u{94B}\u{92C}\u{930}",
            "\u{928}\u{94B}\u{935}\u{94D}\u{939}\u{947}\u{902}\u{92C}\u{930}",
            "\u{921}\u{93F}\u{938}\u{947}\u{902}\u{92C}\u{930}",
        ],
        // Short name
        'short' => [
            "\u{91C}\u{93E}\u{928}\u{947}",
            "\u{92B}\u{947}\u{92C}\u{94D}\u{930}\u{941}",
            "\u{92E}\u{93E}\u{930}\u{94D}\u{91A}",
            "\u{90F}\u{92A}\u{94D}\u{930}\u{93F}",
            "\u{92E}\u{947}",
            "\u{91C}\u{942}\u{928}",
            "\u{91C}\u{941}\u{932}\u{948}",
            "\u{911}\u{917}",
            "\u{938}\u{92A}\u{94D}\u{91F}\u{947}\u{902}",
            "\u{911}\u{915}\u{94D}\u{91F}\u{94B}",
            "\u{928}\u{94B}\u{935}\u{94D}\u{939}\u{947}\u{902}",
            "\u{921}\u{93F}\u{938}\u{947}\u{902}",
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
        '_(* #,##0_);_(* (#,##0);_(* \"-\"_);_(@_)' => '_ * #,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ',
        '_(* #,##0.00_);_(* (#,##0.00);_(* \"-\"??_);_(@_)' => '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dd mmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
