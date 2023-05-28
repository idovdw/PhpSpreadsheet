<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for 한국어 / Korean (Korea).
 *
 * Do not alter this file; it is generated content.
 */
class FormatKOxKR extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0412;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ko-kr';

    /**
     * @var string The currency code "₩"
     */
    protected $strCurrencyCode = "\u{20A9}";

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
        LocaleLayout::NUMERALS_KOREAN,
        LocaleLayout::NUMERALS_KOREAN_FINANCIAL,
        LocaleLayout::NUMERALS_FULLWIDTH_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        // Full name
        'full' => [
            "\u{C6D4}\u{C694}\u{C77C}",
            "\u{D654}\u{C694}\u{C77C}",
            "\u{C218}\u{C694}\u{C77C}",
            "\u{BAA9}\u{C694}\u{C77C}",
            "\u{AE08}\u{C694}\u{C77C}",
            "\u{D1A0}\u{C694}\u{C77C}",
            "\u{C77C}\u{C694}\u{C77C}",
        ],
        // Short name
        'short' => [
            "\u{C6D4}",
            "\u{D654}",
            "\u{C218}",
            "\u{BAA9}",
            "\u{AE08}",
            "\u{D1A0}",
            "\u{C77C}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "1\u{C6D4}",
            "2\u{C6D4}",
            "3\u{C6D4}",
            "4\u{C6D4}",
            "5\u{C6D4}",
            "6\u{C6D4}",
            "7\u{C6D4}",
            "8\u{C6D4}",
            "9\u{C6D4}",
            "10\u{C6D4}",
            "11\u{C6D4}",
            "12\u{C6D4}",
        ],
        // Short name
        'short' => [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '12',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'yyyy/mm/dd',
        'd-mmm-yy' => 'dd/mmm/yy',
        'd-mmm' => 'dd/mmm',
        'mmm-yy' => 'mmm/yy',
        'm/d/yyyy h:mm' => 'yyyy/mm/dd h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => "yyyy\"{\u{B144} }\"mmmm d\"{\u{C77C} }\"dddd",
        '[$-F400]h:mm:ss AM/PM' => "\"{\u{C624}\u{C804} }\"h:mm:ss",
    ];
}
