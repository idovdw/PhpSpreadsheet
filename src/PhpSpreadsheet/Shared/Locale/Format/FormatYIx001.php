<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for ייִדיש / Yiddish (World).
 *
 * Do not alter this file; it is generated content.
 */
class FormatYIx001 extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x043D;

    /**
     * @var string The locale tag
     */
    protected $tag = 'yi-001';

    /**
     * @var string The currency code "¤"
     */
    protected $strCurrencyCode = '¤';

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
            "\u{5DE}\u{5D0}\u{5B8}\u{5E0}\u{5D8}\u{5D9}\u{5E7}",
            "\u{5D3}\u{5D9}\u{5E0}\u{5E1}\u{5D8}\u{5D9}\u{5E7}",
            "\u{5DE}\u{5D9}\u{5D8}\u{5D5}\u{5D5}\u{5D0}\u{5DA}",
            "\u{5D3}\u{5D0}\u{5E0}\u{5E2}\u{5E8}\u{5E9}\u{5D8}\u{5D9}\u{5E7}",
            "\u{5E4}\u{5BF}\u{5E8}\u{5F2}\u{5B7}\u{5D8}\u{5D9}\u{5E7}",
            "\u{5E9}\u{5D1}\u{5EA}",
            "\u{5D6}\u{5D5}\u{5E0}\u{5D8}\u{5D9}\u{5E7}",
        ],
        // Short name
        'short' => [
            "\u{5D9}\u{5D5}\u{5DD}\u{A0}\u{5D1}",
            "\u{5D9}\u{5D5}\u{5DD}\u{A0}\u{5D2}",
            "\u{5D9}\u{5D5}\u{5DD}\u{A0}\u{5D3}",
            "\u{5D9}\u{5D5}\u{5DD}\u{A0}\u{5D4}",
            "\u{5D9}\u{5D5}\u{5DD}\u{A0}\u{5D5}",
            "\u{5E9}\u{5D1}\u{5EA}",
            "\u{5D9}\u{5D5}\u{5DD}\u{A0}\u{5D0}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{5D9}\u{5D0}\u{5B7}\u{5E0}\u{5D5}\u{5D0}\u{5B7}\u{5E8}",
            "\u{5E4}\u{5BF}\u{5E2}\u{5D1}\u{5E8}\u{5D5}\u{5D0}\u{5B7}\u{5E8}",
            "\u{5DE}\u{5E2}\u{5E8}\u{5E5}",
            "\u{5D0}\u{5B7}\u{5E4}\u{5BC}\u{5E8}\u{5D9}\u{5DC}",
            "\u{5DE}\u{5D9}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5E0}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5DC}\u{5D9}",
            "\u{5D0}\u{5D5}\u{5D9}\u{5D2}\u{5D5}\u{5E1}\u{5D8}",
            "\u{5E1}\u{5E2}\u{5E4}\u{5BC}\u{5D8}\u{5E2}\u{5DE}\u{5D1}\u{5E2}\u{5E8}",
            "\u{5D0}\u{5E7}\u{5D8}\u{5D0}\u{5D1}\u{5E2}\u{5E8}",
            "\u{5E0}\u{5D0}\u{5D5}\u{5D5}\u{5E2}\u{5DE}\u{5D1}\u{5E2}\u{5E8}",
            "\u{5D3}\u{5E2}\u{5E6}\u{5E2}\u{5DE}\u{5D1}\u{5E2}\u{5E8}",
        ],
        // Short name
        'short' => [
            "\u{5D9}\u{5D0}\u{5B7}\u{5E0}",
            "\u{5E4}\u{5BF}\u{5E2}\u{5D1}",
            "\u{5DE}\u{5E2}\u{5E8}\u{5E5}",
            "\u{5D0}\u{5B7}\u{5E4}\u{5BC}\u{5E8}",
            "\u{5DE}\u{5D9}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5E0}\u{5D9}",
            "\u{5D9}\u{5D5}\u{5DC}\u{5D9}",
            "\u{5D0}\u{5D5}\u{5D9}\u{5D2}",
            "\u{5E1}\u{5E2}\u{5E4}\u{5BC}",
            "\u{5D0}\u{5E7}\u{5D8}",
            "\u{5E0}\u{5D0}\u{5D5}\u{5D5}",
            "\u{5D3}\u{5E2}\u{5E6}",
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
