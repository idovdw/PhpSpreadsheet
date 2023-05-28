<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for ትግርኛ / Tigrinya (Eritrea).
 *
 * Do not alter this file; it is generated content.
 */
class FormatTIxER extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0873;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ti-er';

    /**
     * @var string The currency code "Nfk"
     */
    protected $strCurrencyCode = 'Nfk';

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
            "\u{1230}\u{1291}\u{12ED}",
            "\u{1220}\u{1209}\u{1235}",
            "\u{1228}\u{1261}\u{12D5}",
            "\u{1283}\u{1219}\u{1235}",
            "\u{12D3}\u{122D}\u{1262}",
            "\u{1240}\u{12F3}\u{121D}",
            "\u{1230}\u{1295}\u{1260}\u{1275}",
        ],
        // Short name
        'short' => [
            "\u{1230}\u{1291}",
            "\u{1230}\u{1209}",
            "\u{1228}\u{1261}",
            "\u{1213}\u{1219}",
            "\u{12D3}\u{122D}",
            "\u{1240}\u{12F3}",
            "\u{1230}\u{1295}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{1325}\u{122A}",
            "\u{1208}\u{12AB}\u{1272}\u{1275}",
            "\u{1218}\u{130B}\u{1262}\u{1275}",
            "\u{121A}\u{12EB}\u{12DD}\u{12EB}",
            "\u{130D}\u{1295}\u{1266}\u{1275}",
            "\u{1230}\u{1290}",
            "\u{1213}\u{121D}\u{1208}",
            "\u{1290}\u{1213}\u{1230}",
            "\u{1218}\u{1235}\u{12A8}\u{1228}\u{121D}",
            "\u{1325}\u{1245}\u{121D}\u{1272}",
            "\u{1215}\u{12F3}\u{122D}",
            "\u{1273}\u{1215}\u{1233}\u{1235}",
        ],
        // Short name
        'short' => [
            "\u{1325}\u{122A}",
            "\u{1208}\u{12AB}",
            "\u{1218}\u{130B}",
            "\u{121A}\u{12EB}",
            "\u{130D}\u{1295}",
            "\u{1230}\u{1290}",
            "\u{1213}\u{121D}",
            "\u{1290}\u{1213}",
            "\u{1218}\u{1235}",
            "\u{1325}\u{1245}",
            "\u{1215}\u{12F3}",
            "\u{1273}\u{1215}",
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
