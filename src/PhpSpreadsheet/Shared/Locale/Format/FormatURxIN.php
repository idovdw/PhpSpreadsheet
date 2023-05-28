<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for اردو / Urdu (India).
 *
 * Do not alter this file; it is generated content.
 */
class FormatURxIN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0820;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ur-in';

    /**
     * @var string The currency code "₹"
     */
    protected $strCurrencyCode = "\u{20B9}";

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
    protected $strDateSeparator = '/';

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
            "\u{67E}\u{6CC}\u{631}",
            "\u{645}\u{646}\u{6AF}\u{644}",
            "\u{628}\u{62F}\u{6BE}",
            "\u{62C}\u{645}\u{639}\u{631}\u{627}\u{62A}",
            "\u{62C}\u{645}\u{639}\u{6C1}",
            "\u{6C1}\u{641}\u{62A}\u{6C1}",
            "\u{627}\u{62A}\u{648}\u{627}\u{631}",
        ],
        // Short name
        'short' => [
            "\u{67E}\u{6CC}\u{631}",
            "\u{645}\u{646}\u{6AF}\u{644}",
            "\u{628}\u{62F}\u{6BE}",
            "\u{62C}\u{645}\u{639}\u{631}\u{627}\u{62A}",
            "\u{62C}\u{645}\u{639}\u{6C1}",
            "\u{6C1}\u{641}\u{62A}\u{6C1}",
            "\u{627}\u{62A}\u{648}\u{627}\u{631}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{62C}\u{646}\u{648}\u{631}\u{6CC}",
            "\u{641}\u{631}\u{648}\u{631}\u{6CC}",
            "\u{645}\u{627}\u{631}\u{686}",
            "\u{627}\u{67E}\u{631}\u{6CC}\u{644}",
            "\u{645}\u{626}\u{6CC}",
            "\u{62C}\u{648}\u{646}",
            "\u{62C}\u{648}\u{644}\u{627}\u{626}\u{6CC}",
            "\u{627}\u{6AF}\u{633}\u{62A}",
            "\u{633}\u{62A}\u{645}\u{628}\u{631}",
            "\u{627}\u{6A9}\u{62A}\u{648}\u{628}\u{631}",
            "\u{646}\u{648}\u{645}\u{628}\u{631}",
            "\u{62F}\u{633}\u{645}\u{628}\u{631}",
        ],
        // Short name
        'short' => [
            "\u{62C}\u{646}\u{648}\u{631}\u{6CC}",
            "\u{641}\u{631}\u{648}\u{631}\u{6CC}",
            "\u{645}\u{627}\u{631}\u{686}",
            "\u{627}\u{67E}\u{631}\u{6CC}\u{644}",
            "\u{645}\u{626}\u{6CC}",
            "\u{62C}\u{648}\u{646}",
            "\u{62C}\u{648}\u{644}\u{627}\u{626}\u{6CC}",
            "\u{627}\u{6AF}\u{633}\u{62A}",
            "\u{633}\u{62A}\u{645}\u{628}\u{631}",
            "\u{627}\u{6A9}\u{62A}\u{648}\u{628}\u{631}",
            "\u{646}\u{648}\u{645}\u{628}\u{631}",
            "\u{62F}\u{633}\u{645}\u{628}\u{631}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dd mmm"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
