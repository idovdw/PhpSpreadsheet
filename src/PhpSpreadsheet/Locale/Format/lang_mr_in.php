<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_mr_in extends FormatLocale
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
    protected $monthNames = [
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
}
