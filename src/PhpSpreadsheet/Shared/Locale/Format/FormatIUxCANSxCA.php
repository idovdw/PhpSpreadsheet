<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Inuktitut (Canada).
 *
 * Do not alter this file; it is generated content.
 */
class FormatIUxCANSxCA extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x045D;

    /**
     * @var string The locale tag
     */
    protected $tag = 'iu-cans-ca';

    /**
     * @var string The currency code "C$"
     */
    protected $strCurrencyCode = 'C$';

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
            "\u{14C7}\u{14A1}\u{1490}\u{153E}\u{152D}\u{1405}",
            "\u{140A}\u{1403}\u{1449}\u{1431}\u{1585}",
            "\u{1431}\u{1593}\u{1466}\u{14EF}\u{1585}",
            "\u{14EF}\u{1455}\u{14BB}\u{14A5}\u{1585}",
            "\u{1455}\u{14EA}\u{14D5}\u{1550}\u{14A5}\u{1585}",
            "\u{14EF}\u{1559}\u{1456}\u{1550}\u{1555}\u{1483}",
            "\u{14C8}\u{1466}\u{144F}\u{1591}\u{152D}",
        ],
        // Short name
        'short' => [
            "\u{14C7}\u{14A1}\u{1490}",
            "\u{140A}\u{1403}\u{1449}\u{1431}",
            "\u{1431}\u{1593}\u{1466}\u{14EF}",
            "\u{14EF}\u{1455}",
            "\u{1455}\u{14EA}\u{14D5}",
            "\u{14EF}\u{1559}\u{1456}\u{1550}\u{1555}\u{1483}",
            "\u{14C8}\u{1466}\u{144F}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{152E}\u{14D0}\u{14C4}\u{140A}\u{1546}",
            "\u{1556}\u{155D}\u{1557}\u{140A}\u{1546}",
            "\u{14AB}\u{1466}\u{14EF}",
            "\u{1404}\u{1433}\u{1546}",
            "\u{14AA}\u{1403}",
            "\u{152B}\u{14C2}",
            "\u{152A}\u{14DA}\u{1403}",
            "\u{140B}\u{14A1}\u{148C}\u{14EF}",
            "\u{14EF}\u{144E}\u{1431}\u{1546}",
            "\u{1405}\u{1450}\u{1431}\u{1546}",
            "\u{14C4}\u{1555}\u{1431}\u{1546}",
            "\u{144E}\u{14EF}\u{1431}\u{1546}",
        ],
        // Short name
        'short' => [
            "\u{152E}\u{14D0}\u{14C4}",
            "\u{1556}\u{155D}\u{1557}",
            "\u{14AB}\u{1466}\u{14EF}",
            "\u{1404}\u{1433}\u{1546}",
            "\u{14AA}\u{1403}",
            "\u{152B}\u{14C2}",
            "\u{152A}\u{14DA}\u{1403}",
            "\u{140B}\u{14A1}\u{148C}",
            "\u{14EF}\u{144E}\u{1431}",
            "\u{1405}\u{1450}\u{1431}",
            "\u{14C4}\u{1555}\u{1431}",
            "\u{144E}\u{14EF}\u{1431}",
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
