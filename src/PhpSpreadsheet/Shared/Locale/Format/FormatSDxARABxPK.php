<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for سنڌي / Sindhi (Islamic Republic of Pakistan).
 *
 * Do not alter this file; it is generated content.
 */
class FormatSDxARABxPK extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0859;

    /**
     * @var string The locale tag
     */
    protected $tag = 'sd-arab-pk';

    /**
     * @var string The currency code "Rs"
     */
    protected $strCurrencyCode = 'Rs';

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
            "\u{627}\u{6B1}\u{627}\u{631}\u{648}",
            "\u{627}\u{631}\u{628}\u{639}",
            "\u{62E}\u{645}\u{64A}\u{633}",
            "\u{62C}\u{645}\u{639}\u{648}",
            "\u{687}\u{646}\u{687}\u{631}",
            "\u{622}\u{686}\u{631}",
            "\u{633}\u{648}\u{645}\u{631}",
        ],
        // Short name
        'short' => [
            "\u{627}\u{6B1}",
            "\u{627}\u{631}",
            "\u{62E}\u{645}",
            "\u{62C}\u{645}\u{639}\u{648}",
            "\u{687}\u{646}",
            "\u{622}\u{686}",
            "\u{633}\u{648}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{62C}\u{646}\u{648}\u{631}\u{64A}",
            "\u{641}\u{631}\u{648}\u{631}\u{64A}",
            "\u{645}\u{627}\u{631}\u{686}",
            "\u{627}\u{67E}\u{631}\u{64A}\u{644}",
            "\u{645}\u{654}\u{64A}",
            "\u{62C}\u{648}\u{646}",
            "\u{62C}\u{648}\u{644}\u{627}\u{621}\u{650}",
            "\u{622}\u{6AF}\u{633}\u{62A}",
            "\u{633}\u{62A}\u{645}\u{628}\u{631}",
            "\u{622}\u{6A9}\u{62A}\u{648}\u{628}\u{631}",
            "\u{646}\u{648}\u{645}\u{628}\u{631}",
            "\u{68A}\u{633}\u{645}\u{628}\u{631}",
        ],
        // Short name
        'short' => [
            "\u{62C}\u{646}\u{648}\u{631}\u{64A}",
            "\u{641}\u{631}\u{648}\u{631}\u{64A}",
            "\u{645}\u{627}\u{631}\u{686}",
            "\u{627}\u{67E}\u{631}\u{64A}\u{644}",
            "\u{645}\u{654}\u{64A}",
            "\u{62C}\u{648}\u{646}",
            "\u{62C}\u{648}\u{644}\u{627}\u{621}\u{650}",
            "\u{622}\u{6AF}\u{633}\u{62A}",
            "\u{633}\u{62A}\u{645}\u{628}\u{631}",
            "\u{622}\u{6A9}\u{62A}\u{648}\u{628}\u{631}",
            "\u{646}\u{648}\u{645}\u{628}\u{631}",
            "\u{68A}\u{633}\u{645}\u{628}\u{631}",
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
        '[$-F800]dddd, mmmm dd, yyyy' => 'ddd"{, }"dd mmm"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
