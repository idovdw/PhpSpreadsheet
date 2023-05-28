<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for ខ្មែរ / Khmer (Cambodia).
 *
 * Do not alter this file; it is generated content.
 */
class FormatKMxKH extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0453;

    /**
     * @var string The locale tag
     */
    protected $tag = 'km-kh';

    /**
     * @var string The currency code "៛"
     */
    protected $strCurrencyCode = "\u{17DB}";

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
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{1785}\u{17D0}\u{1793}\u{17D2}\u{1791}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{17A2}\u{1784}\u{17D2}\u{1782}\u{17B6}\u{179A}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{1796}\u{17BB}\u{1792}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{1796}\u{17D2}\u{179A}\u{17A0}\u{179F}\u{17D2}\u{1794}\u{178F}\u{17B7}\u{17CD}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{179F}\u{17BB}\u{1780}\u{17D2}\u{179A}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{179F}\u{17C5}\u{179A}\u{17CD}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{17A2}\u{17B6}\u{1791}\u{17B7}\u{178F}\u{17D2}\u{1799}",
        ],
        // Short name
        'short' => [
            "\u{1785}.",
            "\u{17A2}.",
            "\u{1796}\u{17BB}",
            "\u{1796}\u{17D2}\u{179A}\u{17A0}.",
            "\u{179F}\u{17BB}.",
            "\u{179F}.",
            "\u{17A2}\u{17B6}\u{1791}\u{17B7}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{1798}\u{1780}\u{179A}\u{17B6}",
            "\u{1780}\u{17BB}\u{1798}\u{17D2}\u{1797}\u{17C8}",
            "\u{1798}\u{17B7}\u{1793}\u{17B6}",
            "\u{1798}\u{17C1}\u{179F}\u{17B6}",
            "\u{17A7}\u{179F}\u{1797}\u{17B6}",
            "\u{1798}\u{17B7}\u{1790}\u{17BB}\u{1793}\u{17B6}",
            "\u{1780}\u{1780}\u{17D2}\u{1780}\u{178A}\u{17B6}",
            "\u{179F}\u{17B8}\u{17A0}\u{17B6}",
            "\u{1780}\u{1789}\u{17D2}\u{1789}\u{17B6}",
            "\u{178F}\u{17BB}\u{179B}\u{17B6}",
            "\u{179C}\u{17B7}\u{1785}\u{17D2}\u{1786}\u{17B7}\u{1780}\u{17B6}",
            "\u{1792}\u{17D2}\u{1793}\u{17BC}",
        ],
        // Short name
        'short' => [
            "\u{17E1}",
            "\u{17E2}",
            "\u{17E3}",
            "\u{17E4}",
            "\u{17E5}",
            "\u{17E6}",
            "\u{17E7}",
            "\u{17E8}",
            "\u{17E9}",
            "\u{17E1}\u{17E0}",
            "\u{17E1}\u{17E1}",
            "\u{17E1}\u{17E2}",
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{1785}\u{17D0}\u{1793}\u{17D2}\u{1791}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{17A2}\u{1784}\u{17D2}\u{1782}\u{17B6}\u{179A}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{1796}\u{17BB}\u{1792}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{1796}\u{17D2}\u{179A}\u{17A0}\u{179F}\u{17D2}\u{1794}\u{178F}\u{17B7}\u{17CD}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{179F}\u{17BB}\u{1780}\u{17D2}\u{179A}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{179F}\u{17C5}\u{179A}\u{17CD}",
            "\u{1790}\u{17D2}\u{1784}\u{17C3}\u{17A2}\u{17B6}\u{1791}\u{17B7}\u{178F}\u{17D2}\u{1799}",
        ],
        // Short name
        'short' => [
            "\u{1785}",
            "\u{17A2}",
            "\u{1796}\u{17BB}",
            "\u{1796}\u{17D2}\u{179A}\u{17A0}",
            "\u{179F}\u{17BB}",
            "\u{179F}",
            "\u{17A2}\u{17B6}\u{1791}\u{17B7}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            "\u{1798}\u{1780}\u{179A}\u{17B6}",
            "\u{1780}\u{17BB}\u{1798}\u{17D2}\u{1797}\u{17C8}",
            "\u{1798}\u{17B7}\u{1793}\u{17B6}",
            "\u{1798}\u{17C1}\u{179F}\u{17B6}",
            "\u{17A7}\u{179F}\u{1797}\u{17B6}",
            "\u{1798}\u{17B7}\u{1790}\u{17BB}\u{1793}\u{17B6}",
            "\u{1780}\u{1780}\u{17D2}\u{1780}\u{178A}\u{17B6}",
            "\u{179F}\u{17B8}\u{17A0}\u{17B6}",
            "\u{1780}\u{1789}\u{17D2}\u{1789}\u{17B6}",
            "\u{178F}\u{17BB}\u{179B}\u{17B6}",
            "\u{179C}\u{17B7}\u{1785}\u{17D2}\u{1786}\u{17B7}\u{1780}\u{17B6}",
            "\u{1792}\u{17D2}\u{1793}\u{17BC}",
        ],
        // Short name
        'short' => [
            "\u{17E1}",
            "\u{17E2}",
            "\u{17E3}",
            "\u{17E4}",
            "\u{17E5}",
            "\u{17E6}",
            "\u{17E7}",
            "\u{17E8}",
            "\u{17E9}",
            "\u{17E1}\u{17E0}",
            "\u{17E1}\u{17E1}",
            "\u{17E1}\u{17E2}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yy',
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'd mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}