<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for རྫོང་ཁ / Dzongkha (Bhutan).
 *
 * Do not alter this file; it is generated content.
 */
class FormatDZxBT extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0C51;

    /**
     * @var string The locale tag
     */
    protected $tag = 'dz-bt';

    /**
     * @var string The currency code "Nu."
     */
    protected $strCurrencyCode = 'Nu.';

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
    protected $strTimeSeparator = "\u{F46}";

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
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F58}\u{F72}\u{F42}\u{F0B}\u{F51}\u{F58}\u{F62}\u{F0B}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F63}\u{FB7}\u{F42}\u{F0B}\u{F54}\u{F0B}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F55}\u{F74}\u{F62}\u{F0B}\u{F56}\u{F74}\u{F0B}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F54}\u{F0B}\u{F66}\u{F44}\u{F66}\u{F0B}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F66}\u{FA4}\u{F7A}\u{F53}\u{F0B}\u{F54}\u{F0B}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F49}\u{F72}\u{F0B}\u{F58}\u{F0B}",
            "\u{F42}\u{F5F}\u{F60}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F0B}",
        ],
        // Short name
        'short' => [
            "\u{F58}\u{F72}\u{F62}\u{F0B}",
            "\u{F63}\u{FB7}\u{F42}\u{F0B}",
            "\u{F55}\u{F74}\u{F62}\u{F0B}",
            "\u{F66}\u{F44}\u{F66}\u{F0B}",
            "\u{F66}\u{FA4}\u{F7A}\u{F53}\u{F0B}",
            "\u{F49}\u{F72}\u{F0B}",
            "\u{F5F}\u{FB3}\u{F0B}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F51}\u{F44}\u{F54}\u{F0B}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F42}\u{F49}\u{F72}\u{F66}\u{F0B}\u{F54}\u{F0B}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F42}\u{F66}\u{F74}\u{F58}\u{F0B}\u{F54}\u{F0B}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F5E}\u{F72}\u{F0B}\u{F54}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F63}\u{F94}\u{F0B}\u{F54}\u{F0B}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F51}\u{FB2}\u{F74}\u{F42}\u{F0B}\u{F54}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F51}\u{F74}\u{F53}\u{F0B}\u{F54}\u{F0B}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F62}\u{F92}\u{FB1}\u{F51}\u{F0B}\u{F54}\u{F0B}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F51}\u{F42}\u{F74}\u{F0B}\u{F54}\u{F0B}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F45}\u{F74}\u{F0B}\u{F54}\u{F0D}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F45}\u{F74}\u{F0B}\u{F42}\u{F45}\u{F72}\u{F42}\u{F0B}\u{F54}\u{F0B}",
            "\u{F66}\u{FA4}\u{FB1}\u{F72}\u{F0B}\u{F5F}\u{FB3}\u{F0B}\u{F56}\u{F45}\u{F74}\u{F0B}\u{F42}\u{F49}\u{F72}\u{F66}\u{F0B}\u{F54}\u{F0B}",
        ],
        // Short name
        'short' => [
            "\u{F5F}\u{FB3}\u{F0B}\u{F21}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F22}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F23}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F24}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F25}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F26}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F27}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F28}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F29}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F21}\u{F20}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F21}\u{F21}",
            "\u{F5F}\u{FB3}\u{F0B}\u{F21}\u{F22}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        '\$ #,##0;\$ -#,##0' => '$ #,##0;$ -#,##0',
        '\$ #,##0;[Red]\$ -#,##0' => '$ #,##0;[Red]$ -#,##0',
        '\$ #,##0.00;\$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '\$ #,##0.00;[Red]\$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * \"-\"_ ;_ @_ ',
        '_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"mmmm d"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
