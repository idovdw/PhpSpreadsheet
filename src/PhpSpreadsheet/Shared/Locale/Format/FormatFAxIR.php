<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for فارسی / Persian (Iran).
 *
 * Do not alter this file; it is generated content.
 */
class FormatFAxIR extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0429;

    /**
     * @var string The locale tag
     */
    protected $tag = 'fa-ir';

    /**
     * @var string The currency code "ريال"
     */
    protected $strCurrencyCode = "\u{631}\u{64A}\u{627}\u{644}";

    /**
     * @var string The decimal separator "/"
     */
    protected $strDecimalSeparator = '/';

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
            "\u{62F}\u{648}\u{634}\u{646}\u{628}\u{647}",
            "\u{633}\u{647}\u{A0}\u{634}\u{646}\u{628}\u{647}",
            "\u{686}\u{647}\u{627}\u{631}\u{634}\u{646}\u{628}\u{647}",
            "\u{67E}\u{646}\u{62C}\u{634}\u{646}\u{628}\u{647}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{634}\u{646}\u{628}\u{647}",
            "\u{64A}\u{643}\u{634}\u{646}\u{628}\u{647}",
        ],
        // Short name
        'short' => [
            "\u{62F}\u{648}\u{634}\u{646}\u{628}\u{647}",
            "\u{633}\u{647}\u{A0}\u{634}\u{646}\u{628}\u{647}",
            "\u{686}\u{647}\u{627}\u{631}\u{634}\u{646}\u{628}\u{647}",
            "\u{67E}\u{646}\u{62C}\u{634}\u{646}\u{628}\u{647}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{634}\u{646}\u{628}\u{647}",
            "\u{64A}\u{643}\u{634}\u{646}\u{628}\u{647}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{698}\u{627}\u{646}\u{648}\u{64A}\u{647}",
            "\u{641}\u{648}\u{631}\u{64A}\u{647}",
            "\u{645}\u{627}\u{631}\u{633}",
            "\u{622}\u{648}\u{631}\u{64A}\u{644}",
            "\u{645}\u{647}",
            "\u{698}\u{648}\u{626}\u{646}",
            "\u{698}\u{648}\u{626}\u{64A}\u{647}",
            "\u{627}\u{648}\u{62A}",
            "\u{633}\u{67E}\u{62A}\u{627}\u{645}\u{628}\u{631}",
            "\u{627}\u{64F}\u{643}\u{62A}\u{628}\u{631}",
            "\u{646}\u{648}\u{627}\u{645}\u{628}\u{631}",
            "\u{62F}\u{633}\u{627}\u{645}\u{628}\u{631}",
        ],
        // Short name
        'short' => [
            "\u{698}\u{627}\u{646}\u{648}\u{64A}\u{647}",
            "\u{641}\u{648}\u{631}\u{64A}\u{647}",
            "\u{645}\u{627}\u{631}\u{633}",
            "\u{622}\u{648}\u{631}\u{64A}\u{644}",
            "\u{645}\u{647}",
            "\u{698}\u{648}\u{626}\u{646}",
            "\u{698}\u{648}\u{626}\u{64A}\u{647}",
            "\u{627}\u{648}\u{62A}",
            "\u{633}\u{67E}\u{62A}\u{627}\u{645}\u{628}\u{631}",
            "\u{627}\u{64F}\u{643}\u{62A}\u{628}\u{631}",
            "\u{646}\u{648}\u{627}\u{645}\u{628}\u{631}",
            "\u{62F}\u{633}\u{627}\u{645}\u{628}\u{631}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        '# ?/?' => '# ?.?',
        '# ??/??' => '# ??.??',
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'h:mm AM/PM' => 'hh:mm AM/PM',
        'h:mm:ss AM/PM' => 'hh:mm:ss AM/PM',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0_-;#,##0-',
        '#,##0_);[Red](#,##0)' => '#,##0_-;[Red]#,##0-',
        '#,##0.00_);(#,##0.00)' => '#,##0.00_-;#,##0.00-',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00_-;[Red]#,##0.00-',
        '[$-F800]dddd, mmmm dd, yyyy' => 'ddd"{, }"d mmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => "h:mm:ss\"{ \u{642}.\u{638}}\"",
        '# ?/4' => '# ?.4',
        '# ??/100' => '# ??.100',
        '# ?/8' => '# ?.8',
        '# ???/???' => '# ???.???',
        '# ??/16' => '# ??.16',
        '# ?/2' => '# ?.2',
        '# ?/10' => '# ?.10',
    ];
}
