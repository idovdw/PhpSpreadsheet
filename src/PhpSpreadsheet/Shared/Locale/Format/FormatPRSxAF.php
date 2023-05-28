<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Dari (Afghanistan).
 *
 * Do not alter this file; it is generated content.
 */
class FormatPRSxAF extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x048C;

    /**
     * @var string The locale tag
     */
    protected $tag = 'prs-af';

    /**
     * @var string The currency code "؋"
     */
    protected $strCurrencyCode = "\u{60B}";

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
            "\u{62F}\u{648}\u{634}\u{646}\u{628}\u{647}",
            "\u{633}\u{647}\u{200C} \u{634}\u{646}\u{628}\u{647}",
            "\u{686}\u{647}\u{627}\u{631} \u{634}\u{646}\u{628}\u{647}",
            "\u{67E}\u{646}\u{62C}\u{634}\u{646}\u{628}\u{647}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{634}\u{646}\u{628}\u{647}",
            "\u{6CC}\u{6A9}\u{634}\u{646}\u{628}\u{647}",
        ],
        // Short name
        'short' => [
            "\u{62F}\u{648}\u{634}\u{646}\u{628}\u{647}",
            "\u{633}\u{647}\u{200C} \u{634}\u{646}\u{628}\u{647}",
            "\u{686}\u{647}\u{627}\u{631} \u{634}\u{646}\u{628}\u{647}",
            "\u{67E}\u{646}\u{62C}\u{634}\u{646}\u{628}\u{647}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{634}\u{646}\u{628}\u{647}",
            "\u{6CC}\u{6A9}\u{634}\u{646}\u{628}\u{647}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{62C}\u{62F}\u{6CC}",
            "\u{62F}\u{644}\u{648}",
            "\u{62D}\u{648}\u{62A}",
            "\u{62D}\u{645}\u{644}",
            "\u{62B}\u{648}\u{631}",
            "\u{62C}\u{648}\u{632}\u{627}",
            "\u{633}\u{631}\u{637}\u{627}\u{646}",
            "\u{627}\u{633}\u{62F}",
            "\u{633}\u{646}\u{628}\u{644}\u{647}",
            "\u{645}\u{6CC}\u{632}\u{627}\u{646}",
            "\u{639}\u{642}\u{631}\u{628}",
            "\u{642}\u{648}\u{633}",
        ],
        // Short name
        'short' => [
            "\u{62C}\u{62F}\u{6CC}",
            "\u{62F}\u{644}\u{648}",
            "\u{62D}\u{648}\u{62A}",
            "\u{62D}\u{645}\u{644}",
            "\u{62B}\u{648}\u{631}",
            "\u{62C}\u{648}\u{632}\u{627}",
            "\u{633}\u{631}\u{637}\u{627}\u{646}",
            "\u{627}\u{633}\u{62F}",
            "\u{633}\u{646}\u{628}\u{644}\u{647}",
            "\u{645}\u{6CC}\u{632}\u{627}\u{646}",
            "\u{639}\u{642}\u{631}\u{628}",
            "\u{642}\u{648}\u{633}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'yyyy/m/d',
        'm/d/yyyy h:mm' => 'yyyy/m/d h:mm',
        '#,##0_);(#,##0)' => '#,##0_-;#,##0-',
        '#,##0_);[Red](#,##0)' => '#,##0_-;[Red]#,##0-',
        '#,##0.00_);(#,##0.00)' => '#,##0.00_-;#,##0.00-',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00_-;[Red]#,##0.00-',
        '[$-F800]dddd, mmmm dd, yyyy' => 'ddd"{, }"d mmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => "h:mm:ss\"{ \u{63A}.\u{645}}\"",
    ];
}
