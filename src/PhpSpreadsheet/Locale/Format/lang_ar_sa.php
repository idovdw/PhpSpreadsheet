<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_ar_sa extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0401;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ar-sa';

    /**
     * @var string The currency code "ر.س.‏"
     */
    protected $currencyCode = "\u{631}.\u{633}.\u{200F}";

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
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{64A}\u{646}\u{627}\u{64A}\u{631}",
            "\u{641}\u{628}\u{631}\u{627}\u{64A}\u{631}",
            "\u{645}\u{627}\u{631}\u{633}",
            "\u{623}\u{628}\u{631}\u{64A}\u{644}",
            "\u{645}\u{627}\u{64A}\u{648}",
            "\u{64A}\u{648}\u{646}\u{64A}\u{648}",
            "\u{64A}\u{648}\u{644}\u{64A}\u{648}",
            "\u{623}\u{63A}\u{633}\u{637}\u{633}",
            "\u{633}\u{628}\u{62A}\u{645}\u{628}\u{631}",
            "\u{623}\u{643}\u{62A}\u{648}\u{628}\u{631}",
            "\u{646}\u{648}\u{641}\u{645}\u{628}\u{631}",
            "\u{62F}\u{64A}\u{633}\u{645}\u{628}\u{631}",
        ],
        // Short name
        'short' => [
            "\u{64A}\u{646}\u{627}\u{64A}\u{631}",
            "\u{641}\u{628}\u{631}\u{627}\u{64A}\u{631}",
            "\u{645}\u{627}\u{631}\u{633}",
            "\u{623}\u{628}\u{631}\u{64A}\u{644}",
            "\u{645}\u{627}\u{64A}\u{648}",
            "\u{64A}\u{648}\u{646}\u{64A}\u{648}",
            "\u{64A}\u{648}\u{644}\u{64A}\u{648}",
            "\u{623}\u{63A}\u{633}\u{637}\u{633}",
            "\u{633}\u{628}\u{62A}\u{645}\u{628}\u{631}",
            "\u{623}\u{643}\u{62A}\u{648}\u{628}\u{631}",
            "\u{646}\u{648}\u{641}\u{645}\u{628}\u{631}",
            "\u{62F}\u{64A}\u{633}\u{645}\u{628}\u{631}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
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
