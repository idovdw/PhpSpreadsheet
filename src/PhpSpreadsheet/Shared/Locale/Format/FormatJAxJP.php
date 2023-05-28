<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for 日本語 / Japanese (Japan).
 *
 * Do not alter this file; it is generated content.
 */
class FormatJAxJP extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0411;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ja-jp';

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
    protected $strDateSeparator = '/';

    /**
     * @var string The time separator
     */
    protected $strTimeSeparator = ':';

    /**
     * @var string[] The numerals representation (0 up to 9)
     */
    protected $aNumerals = [
        LocaleLayout::NUMERALS_JAPANESE,
        LocaleLayout::NUMERALS_JAPANESE_FINANCIAL,
        LocaleLayout::NUMERALS_FULLWIDTH_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        // Full name
        'full' => [
            "\u{6708}\u{66DC}\u{65E5}",
            "\u{706B}\u{66DC}\u{65E5}",
            "\u{6C34}\u{66DC}\u{65E5}",
            "\u{6728}\u{66DC}\u{65E5}",
            "\u{91D1}\u{66DC}\u{65E5}",
            "\u{571F}\u{66DC}\u{65E5}",
            "\u{65E5}\u{66DC}\u{65E5}",
        ],
        // Short name
        'short' => [
            "\u{6708}",
            "\u{706B}",
            "\u{6C34}",
            "\u{6728}",
            "\u{91D1}",
            "\u{571F}",
            "\u{65E5}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "1\u{6708}",
            "2\u{6708}",
            "3\u{6708}",
            "4\u{6708}",
            "5\u{6708}",
            "6\u{6708}",
            "7\u{6708}",
            "8\u{6708}",
            "9\u{6708}",
            "10\u{6708}",
            "11\u{6708}",
            "12\u{6708}",
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
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'm/d/yyyy h:mm' => 'yyyy/mm/dd h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => "yyyy\"{\u{5E74}}\"mmmmd\"{\u{65E5}}\"",
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
