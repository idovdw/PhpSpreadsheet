<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for 中文 / Chinese (People\'s Republic of China).
 *
 * Do not alter this file; it is generated content.
 */
class FormatZHxCN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0804;

    /**
     * @var string The locale tag
     */
    protected $tag = 'zh-cn';

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
        LocaleLayout::NUMERALS_CHINESE_TRADITIONAL,
        LocaleLayout::NUMERALS_CHINESE_FINANCIAL,
        LocaleLayout::NUMERALS_FULLWIDTH_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        // Full name
        'full' => [
            "\u{661F}\u{671F}\u{4E00}",
            "\u{661F}\u{671F}\u{4E8C}",
            "\u{661F}\u{671F}\u{4E09}",
            "\u{661F}\u{671F}\u{56DB}",
            "\u{661F}\u{671F}\u{4E94}",
            "\u{661F}\u{671F}\u{516D}",
            "\u{661F}\u{671F}\u{65E5}",
        ],
        // Short name
        'short' => [
            "\u{5468}\u{4E00}",
            "\u{5468}\u{4E8C}",
            "\u{5468}\u{4E09}",
            "\u{5468}\u{56DB}",
            "\u{5468}\u{4E94}",
            "\u{5468}\u{516D}",
            "\u{5468}\u{65E5}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{4E00}\u{6708}",
            "\u{4E8C}\u{6708}",
            "\u{4E09}\u{6708}",
            "\u{56DB}\u{6708}",
            "\u{4E94}\u{6708}",
            "\u{516D}\u{6708}",
            "\u{4E03}\u{6708}",
            "\u{516B}\u{6708}",
            "\u{4E5D}\u{6708}",
            "\u{5341}\u{6708}",
            "\u{5341}\u{4E00}\u{6708}",
            "\u{5341}\u{4E8C}\u{6708}",
        ],
        // Short name
        'short' => [
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
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'yyyy/m/d',
        'm/d/yyyy h:mm' => 'yyyy/m/d h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_(* #,##0_);_(* (#,##0);_(* \"-\"_);_(@_)' => '_ * #,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ',
        '_(* #,##0.00_);_(* (#,##0.00);_(* \"-\"??_);_(@_)' => '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => "yyyy\"{\u{5E74}}\"mmmd\"{\u{65E5}}\"",
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
