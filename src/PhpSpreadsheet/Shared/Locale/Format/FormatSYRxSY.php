<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Syrisch / Syriac (Syria).
 *
 * Do not alter this file; it is generated content.
 */
class FormatSYRxSY extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x045A;

    /**
     * @var string The locale tag
     */
    protected $tag = 'syr-sy';

    /**
     * @var string The currency code "SYP"
     */
    protected $strCurrencyCode = 'SYP';

    /**
     * @var string The decimal separator ","
     */
    protected $strDecimalSeparator = ',';

    /**
     * @var string The thousands separator "."
     */
    protected $strThousandsSeparator = '.';

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = '-';

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
            "\u{72C}\u{72A}\u{71D}\u{722}\u{A0}\u{712}\u{72B}\u{712}\u{710}",
            "\u{72C}\u{720}\u{72C}\u{710}\u{A0}\u{712}\u{72B}\u{712}\u{710}",
            "\u{710}\u{72A}\u{712}\u{725}\u{710}\u{A0}\u{712}\u{72B}\u{712}\u{710}",
            "\u{71A}\u{721}\u{72B}\u{710}\u{A0}\u{712}\u{72B}\u{712}\u{710}",
            "\u{725}\u{72A}\u{718}\u{712}\u{72C}\u{710}",
            "\u{72B}\u{712}\u{72C}\u{710}",
            "\u{71A}\u{715}\u{A0}\u{712}\u{72B}\u{712}\u{710}",
        ],
        // Short name
        'short' => [
            "\u{70F}\u{712}\u{A0}\u{70F}\u{712}\u{72B}",
            "\u{70F}\u{713}\u{A0}\u{70F}\u{712}\u{72B}",
            "\u{70F}\u{715}\u{A0}\u{70F}\u{712}\u{72B}",
            "\u{70F}\u{717}\u{A0}\u{70F}\u{712}\u{72B}",
            "\u{70F}\u{725}\u{72A}\u{718}\u{712}",
            "\u{70F}\u{72B}\u{712}",
            "\u{70F}\u{710}\u{A0}\u{70F}\u{712}\u{72B}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{71F}\u{722}\u{718}\u{722}\u{A0}\u{710}\u{71A}\u{72A}\u{71D}",
            "\u{72B}\u{712}\u{71B}",
            "\u{710}\u{715}\u{72A}",
            "\u{722}\u{71D}\u{723}\u{722}",
            "\u{710}\u{71D}\u{72A}",
            "\u{71A}\u{719}\u{71D}\u{72A}\u{722}",
            "\u{72C}\u{721}\u{718}\u{719}",
            "\u{710}\u{712}",
            "\u{710}\u{71D}\u{720}\u{718}\u{720}",
            "\u{72C}\u{72B}\u{72A}\u{71D}\u{A0}\u{729}\u{715}\u{71D}\u{721}",
            "\u{72C}\u{72B}\u{72A}\u{71D}\u{A0}\u{710}\u{71A}\u{72A}\u{71D}",
            "\u{71F}\u{722}\u{718}\u{722}\u{A0}\u{729}\u{715}\u{71D}\u{721}",
        ],
        // Short name
        'short' => [
            "\u{70F}\u{71F}\u{722}\u{A0}\u{70F}\u{712}",
            "\u{72B}\u{712}\u{71B}",
            "\u{710}\u{715}\u{72A}",
            "\u{722}\u{71D}\u{723}\u{722}",
            "\u{710}\u{71D}\u{72A}",
            "\u{71A}\u{719}\u{71D}\u{72A}\u{722}",
            "\u{72C}\u{721}\u{718}\u{719}",
            "\u{710}\u{712}",
            "\u{710}\u{71D}\u{720}\u{718}\u{720}",
            "\u{70F}\u{72C}\u{72B}\u{A0}\u{70F}\u{710}",
            "\u{70F}\u{72C}\u{72B}\u{A0}\u{70F}\u{712}",
            "\u{70F}\u{71F}\u{722}\u{A0}\u{70F}\u{710}",
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