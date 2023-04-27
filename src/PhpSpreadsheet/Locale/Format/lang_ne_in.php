<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_ne_in extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0861;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ne-in';

    /**
     * @var string The currency code "₹"
     */
    protected $currencyCode = "\u{20B9}";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = '.';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ',';

    /**
     * @var string The date separator
     */
    protected $dateSeparator = '/';

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
            "\u{938}\u{94B}\u{92E}\u{92C}\u{93E}\u{930}",
            "\u{92E}\u{919}\u{94D}\u{917}\u{932}\u{92C}\u{93E}\u{930}",
            "\u{92C}\u{941}\u{927}\u{92C}\u{93E}\u{930}",
            "\u{92C}\u{93F}\u{939}\u{93F}\u{92C}\u{93E}\u{930}",
            "\u{936}\u{941}\u{915}\u{94D}\u{930}\u{92C}\u{93E}\u{930}",
            "\u{936}\u{928}\u{93F}\u{92C}\u{93E}\u{930}",
            "\u{906}\u{907}\u{924}\u{92C}\u{93E}\u{930}",
        ],
        // Short name
        'short' => [
            "\u{938}\u{94B}\u{92E}",
            "\u{92E}\u{919}\u{94D}\u{917}\u{932}",
            "\u{92C}\u{941}\u{927}",
            "\u{92C}\u{93F}\u{939}\u{93F}",
            "\u{936}\u{941}\u{915}\u{94D}\u{930}",
            "\u{936}\u{928}\u{93F}",
            "\u{906}\u{907}\u{924}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{91C}\u{928}\u{935}\u{930}\u{940}",
            "\u{92B}\u{930}\u{935}\u{930}\u{940}",
            "\u{92E}\u{93E}\u{930}\u{94D}\u{91A}",
            "\u{905}\u{92A}\u{94D}\u{930}\u{947}\u{932}",
            "\u{92E}\u{908}",
            "\u{91C}\u{941}\u{928}",
            "\u{91C}\u{941}\u{932}\u{93E}\u{908}",
            "\u{905}\u{917}\u{938}\u{94D}\u{91F}",
            "\u{938}\u{947}\u{92A}\u{94D}\u{91F}\u{947}\u{92E}\u{94D}\u{92C}\u{930}",
            "\u{905}\u{915}\u{94D}\u{91F}\u{94B}\u{92C}\u{930}",
            "\u{928}\u{94B}\u{92D}\u{947}\u{92E}\u{94D}\u{92C}\u{930}",
            "\u{926}\u{93F}\u{938}\u{92E}\u{94D}\u{92C}\u{930}",
        ],
        // Short name
        'short' => [
            "\u{91C}\u{928}\u{935}\u{930}\u{940}",
            "\u{92B}\u{947}\u{92C}\u{94D}\u{930}\u{941}\u{905}\u{930}\u{940}",
            "\u{92E}\u{93E}\u{930}\u{94D}\u{91A}",
            "\u{905}\u{92A}\u{94D}\u{930}\u{93F}",
            "\u{92E}\u{947}",
            "\u{91C}\u{941}\u{928}",
            "\u{91C}\u{941}\u{932}\u{93E}",
            "\u{905}\u{917}\u{938}\u{94D}\u{91F}",
            "\u{938}\u{947}\u{92A}\u{94D}\u{91F}\u{947}\u{92E}\u{94D}\u{92C}\u{930}",
            "\u{905}\u{915}\u{94D}\u{91F}\u{94B}",
            "\u{928}\u{94B}\u{92D}\u{947}",
            "\u{921}\u{93F}\u{938}\u{947}",
        ],
    ];
}
