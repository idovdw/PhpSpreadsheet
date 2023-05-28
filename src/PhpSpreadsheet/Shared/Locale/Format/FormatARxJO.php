<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for العربية / Arabic (Jordan).
 *
 * Do not alter this file; it is generated content.
 */
class FormatARxJO extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x2C01;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ar-jo';

    /**
     * @var string The currency code "د.أ.‏"
     */
    protected $strCurrencyCode = "\u{62F}.\u{623}.\u{200F}";

    /**
     * @var string The decimal separator "٫"
     */
    protected $strDecimalSeparator = "\u{66B}";

    /**
     * @var string The thousands separator "٬"
     */
    protected $strThousandsSeparator = "\u{66C}";

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = "\u{200F}/";

    /**
     * @var string The time separator
     */
    protected $strTimeSeparator = ': a';

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
            "\u{627}\u{644}\u{625}\u{62B}\u{646}\u{64A}\u{646}",
            "\u{627}\u{644}\u{62B}\u{644}\u{627}\u{62B}\u{627}\u{621}",
            "\u{627}\u{644}\u{623}\u{631}\u{628}\u{639}\u{627}\u{621}",
            "\u{627}\u{644}\u{62E}\u{645}\u{64A}\u{633}",
            "\u{627}\u{644}\u{62C}\u{645}\u{639}\u{629}",
            "\u{627}\u{644}\u{633}\u{628}\u{62A}",
            "\u{627}\u{644}\u{623}\u{62D}\u{62F}",
        ],
        // Short name
        'short' => [
            "\u{627}\u{644}\u{625}\u{62B}\u{646}\u{64A}\u{646}",
            "\u{627}\u{644}\u{62B}\u{644}\u{627}\u{62B}\u{627}\u{621}",
            "\u{627}\u{644}\u{623}\u{631}\u{628}\u{639}\u{627}\u{621}",
            "\u{627}\u{644}\u{62E}\u{645}\u{64A}\u{633}",
            "\u{627}\u{644}\u{62C}\u{645}\u{639}\u{629}",
            "\u{627}\u{644}\u{633}\u{628}\u{62A}",
            "\u{627}\u{644}\u{623}\u{62D}\u{62F}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{643}\u{627}\u{646}\u{648}\u{646}\u{A0}\u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{634}\u{628}\u{627}\u{637}",
            "\u{622}\u{630}\u{627}\u{631}",
            "\u{646}\u{64A}\u{633}\u{627}\u{646}",
            "\u{623}\u{64A}\u{627}\u{631}",
            "\u{62D}\u{632}\u{64A}\u{631}\u{627}\u{646}",
            "\u{62A}\u{645}\u{648}\u{632}",
            "\u{622}\u{628}",
            "\u{623}\u{64A}\u{644}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646}\u{A0}\u{627}\u{644}\u{623}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646}\u{A0}\u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{643}\u{627}\u{646}\u{648}\u{646}\u{A0}\u{627}\u{644}\u{623}\u{648}\u{644}",
        ],
        // Short name
        'short' => [
            "\u{643}\u{627}\u{646}\u{648}\u{646}\u{A0}\u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{634}\u{628}\u{627}\u{637}",
            "\u{622}\u{630}\u{627}\u{631}",
            "\u{646}\u{64A}\u{633}\u{627}\u{646}",
            "\u{623}\u{64A}\u{627}\u{631}",
            "\u{62D}\u{632}\u{64A}\u{631}\u{627}\u{646}",
            "\u{62A}\u{645}\u{648}\u{632}",
            "\u{622}\u{628}",
            "\u{623}\u{64A}\u{644}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646}\u{A0}\u{627}\u{644}\u{623}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646}\u{A0}\u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{643}\u{627}\u{646}\u{648}\u{646}\u{A0}\u{627}\u{644}\u{623}\u{648}\u{644}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yy',
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'h:mm AM/PM' => 'hh:mm AM/PM',
        'h:mm:ss AM/PM' => 'hh:mm:ss AM/PM',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dd/mmm/yyyy',
        '[$-F400]h:mm:ss AM/PM' => "h:mm:ss\"{ \u{635}}\"",
    ];
}