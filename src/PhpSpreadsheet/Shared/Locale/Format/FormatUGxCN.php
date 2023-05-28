<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for ئۇيغۇرچە / Uyghur (People\'s Republic of China).
 *
 * Do not alter this file; it is generated content.
 */
class FormatUGxCN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0480;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ug-cn';

    /**
     * @var string The currency code "¥"
     */
    protected $strCurrencyCode = '¥';

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
            "\u{62F}\u{6C8}\u{634}\u{6D5}\u{646}\u{628}\u{6D5}",
            "\u{633}\u{6D5}\u{64A}\u{634}\u{6D5}\u{646}\u{628}\u{6D5}",
            "\u{686}\u{627}\u{631}\u{634}\u{6D5}\u{646}\u{628}\u{6D5}",
            "\u{67E}\u{6D5}\u{64A}\u{634}\u{6D5}\u{646}\u{628}\u{6D5}",
            "\u{62C}\u{6C8}\u{645}\u{6D5}",
            "\u{634}\u{6D5}\u{646}\u{628}\u{6D5}",
            "\u{64A}\u{6D5}\u{643}\u{634}\u{6D5}\u{646}\u{628}\u{6D5}",
        ],
        // Short name
        'short' => [
            "\u{62F}\u{6C8}",
            "\u{633}\u{6D5}",
            "\u{686}\u{627}",
            "\u{67E}\u{6D5}",
            "\u{62C}\u{6C8}",
            "\u{634}\u{6D5}",
            "\u{64A}\u{6D5}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{64A}\u{627}\u{646}\u{6CB}\u{627}\u{631}",
            "\u{641}\u{6D0}\u{6CB}\u{631}\u{627}\u{644}",
            "\u{645}\u{627}\u{631}\u{62A}",
            "\u{626}\u{627}\u{67E}\u{631}\u{6D0}\u{644}",
            "\u{645}\u{627}\u{64A}",
            "\u{626}\u{649}\u{64A}\u{6C7}\u{646}",
            "\u{626}\u{649}\u{64A}\u{6C7}\u{644}",
            "\u{626}\u{627}\u{6CB}\u{63A}\u{6C7}\u{633}\u{62A}",
            "\u{633}\u{6D0}\u{646}\u{62A}\u{6D5}\u{628}\u{649}\u{631}",
            "\u{626}\u{6C6}\u{643}\u{62A}\u{6D5}\u{628}\u{649}\u{631}",
            "\u{646}\u{648}\u{64A}\u{627}\u{628}\u{649}\u{631}",
            "\u{62F}\u{6D0}\u{643}\u{627}\u{628}\u{649}\u{631}",
        ],
        // Short name
        'short' => [
            "1-\u{626}\u{627}\u{64A}",
            "2-\u{626}\u{627}\u{64A}",
            "3-\u{626}\u{627}\u{64A}",
            "4-\u{626}\u{627}\u{64A}",
            "5-\u{626}\u{627}\u{64A}",
            "6-\u{626}\u{627}\u{64A}",
            "7-\u{626}\u{627}\u{64A}",
            "8-\u{626}\u{627}\u{64A}",
            "9-\u{626}\u{627}\u{64A}",
            "10-\u{626}\u{627}\u{64A}",
            "11-\u{626}\u{627}\u{64A}",
            "12-\u{626}\u{627}\u{64A}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'yyyy/m/d',
        'd-mmm-yy' => 'd/mmm/yy',
        'd-mmm' => 'd/mmm',
        'mmm-yy' => 'mmm/yy',
        'm/d/yyyy h:mm' => 'yyyy/m/d h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_(* #,##0_);_(* (#,##0);_(* \"-\"_);_(@_)' => '_ * #,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ',
        '_(* #,##0.00_);_(* (#,##0.00);_(* \"-\"??_);_(@_)' => '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => "yyyy\"{-\u{64A}\u{649}\u{644} }\"d/mmmm",
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
