<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Ελληνικά / Greek (Greece).
 *
 * Do not alter this file; it is generated content.
 */
class FormatELxGR extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0408;

    /**
     * @var string The locale tag
     */
    protected $tag = 'el-gr';

    /**
     * @var string The currency code "€"
     */
    protected $strCurrencyCode = "\u{20AC}";

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
            "\u{394}\u{3B5}\u{3C5}\u{3C4}\u{3AD}\u{3C1}\u{3B1}",
            "\u{3A4}\u{3C1}\u{3AF}\u{3C4}\u{3B7}",
            "\u{3A4}\u{3B5}\u{3C4}\u{3AC}\u{3C1}\u{3C4}\u{3B7}",
            "\u{3A0}\u{3AD}\u{3BC}\u{3C0}\u{3C4}\u{3B7}",
            "\u{3A0}\u{3B1}\u{3C1}\u{3B1}\u{3C3}\u{3BA}\u{3B5}\u{3C5}\u{3AE}",
            "\u{3A3}\u{3AC}\u{3B2}\u{3B2}\u{3B1}\u{3C4}\u{3BF}",
            "\u{39A}\u{3C5}\u{3C1}\u{3B9}\u{3B1}\u{3BA}\u{3AE}",
        ],
        // Short name
        'short' => [
            "\u{394}\u{3B5}\u{3C5}",
            "\u{3A4}\u{3C1}\u{3B9}",
            "\u{3A4}\u{3B5}\u{3C4}",
            "\u{3A0}\u{3B5}\u{3BC}",
            "\u{3A0}\u{3B1}\u{3C1}",
            "\u{3A3}\u{3B1}\u{3B2}",
            "\u{39A}\u{3C5}\u{3C1}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{399}\u{3B1}\u{3BD}\u{3BF}\u{3C5}\u{3AC}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
            "\u{3A6}\u{3B5}\u{3B2}\u{3C1}\u{3BF}\u{3C5}\u{3AC}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
            "\u{39C}\u{3AC}\u{3C1}\u{3C4}\u{3B9}\u{3BF}\u{3C2}",
            "\u{391}\u{3C0}\u{3C1}\u{3AF}\u{3BB}\u{3B9}\u{3BF}\u{3C2}",
            "\u{39C}\u{3AC}\u{3B9}\u{3BF}\u{3C2}",
            "\u{399}\u{3BF}\u{3CD}\u{3BD}\u{3B9}\u{3BF}\u{3C2}",
            "\u{399}\u{3BF}\u{3CD}\u{3BB}\u{3B9}\u{3BF}\u{3C2}",
            "\u{391}\u{3CD}\u{3B3}\u{3BF}\u{3C5}\u{3C3}\u{3C4}\u{3BF}\u{3C2}",
            "\u{3A3}\u{3B5}\u{3C0}\u{3C4}\u{3AD}\u{3BC}\u{3B2}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
            "\u{39F}\u{3BA}\u{3C4}\u{3CE}\u{3B2}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
            "\u{39D}\u{3BF}\u{3AD}\u{3BC}\u{3B2}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
            "\u{394}\u{3B5}\u{3BA}\u{3AD}\u{3BC}\u{3B2}\u{3C1}\u{3B9}\u{3BF}\u{3C2}",
        ],
        // Short name
        'short' => [
            "\u{399}\u{3B1}\u{3BD}",
            "\u{3A6}\u{3B5}\u{3B2}",
            "\u{39C}\u{3B1}\u{3C1}",
            "\u{391}\u{3C0}\u{3C1}",
            "\u{39C}\u{3B1}\u{3CA}",
            "\u{399}\u{3BF}\u{3C5}\u{3BD}",
            "\u{399}\u{3BF}\u{3C5}\u{3BB}",
            "\u{391}\u{3C5}\u{3B3}",
            "\u{3A3}\u{3B5}\u{3C0}",
            "\u{39F}\u{3BA}\u{3C4}",
            "\u{39D}\u{3BF}\u{3B5}",
            "\u{394}\u{3B5}\u{3BA}",
        ],
    ];

    /**
     * @var array[]|string Names of the days of the week, for the alternative
     * Gregorian calendar display
     */
    protected $aWeekdayNamesAL = self::GREGORIAN_CALENDAR_USE_REGULAR;

    /**
     * @var array[]|string Names of the months of the year, for the alternative
     * Gregorian calendar display
     */
    protected $aMonthNamesAL = self::GREGORIAN_CALENDAR_USE_REGULAR;

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            "\u{394}\u{3B5}\u{3C5}\u{3C4}\u{3AD}\u{3C1}\u{3B1}",
            "\u{3A4}\u{3C1}\u{3AF}\u{3C4}\u{3B7}",
            "\u{3A4}\u{3B5}\u{3C4}\u{3AC}\u{3C1}\u{3C4}\u{3B7}",
            "\u{3A0}\u{3AD}\u{3BC}\u{3C0}\u{3C4}\u{3B7}",
            "\u{3A0}\u{3B1}\u{3C1}\u{3B1}\u{3C3}\u{3BA}\u{3B5}\u{3C5}\u{3AE}",
            "\u{3A3}\u{3AC}\u{3B2}\u{3B2}\u{3B1}\u{3C4}\u{3BF}",
            "\u{39A}\u{3C5}\u{3C1}\u{3B9}\u{3B1}\u{3BA}\u{3AE}",
        ],
        // Short name
        'short' => [
            "\u{394}\u{3B5}\u{3C5}",
            "\u{3A4}\u{3C1}\u{3B9}",
            "\u{3A4}\u{3B5}\u{3C4}",
            "\u{3A0}\u{3B5}\u{3BC}",
            "\u{3A0}\u{3B1}\u{3C1}",
            "\u{3A3}\u{3B1}\u{3B2}",
            "\u{39A}\u{3C5}\u{3C1}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            "\u{399}\u{3B1}\u{3BD}\u{3BF}\u{3C5}\u{3B1}\u{3C1}\u{3AF}\u{3BF}\u{3C5}",
            "\u{3A6}\u{3B5}\u{3B2}\u{3C1}\u{3BF}\u{3C5}\u{3B1}\u{3C1}\u{3AF}\u{3BF}\u{3C5}",
            "\u{39C}\u{3B1}\u{3C1}\u{3C4}\u{3AF}\u{3BF}\u{3C5}",
            "\u{391}\u{3C0}\u{3C1}\u{3B9}\u{3BB}\u{3AF}\u{3BF}\u{3C5}",
            "\u{39C}\u{3B1}\u{390}\u{3BF}\u{3C5}",
            "\u{399}\u{3BF}\u{3C5}\u{3BD}\u{3AF}\u{3BF}\u{3C5}",
            "\u{399}\u{3BF}\u{3C5}\u{3BB}\u{3AF}\u{3BF}\u{3C5}",
            "\u{391}\u{3C5}\u{3B3}\u{3BF}\u{3CD}\u{3C3}\u{3C4}\u{3BF}\u{3C5}",
            "\u{3A3}\u{3B5}\u{3C0}\u{3C4}\u{3B5}\u{3BC}\u{3B2}\u{3C1}\u{3AF}\u{3BF}\u{3C5}",
            "\u{39F}\u{3BA}\u{3C4}\u{3C9}\u{3B2}\u{3C1}\u{3AF}\u{3BF}\u{3C5}",
            "\u{39D}\u{3BF}\u{3B5}\u{3BC}\u{3B2}\u{3C1}\u{3AF}\u{3BF}\u{3C5}",
            "\u{394}\u{3B5}\u{3BA}\u{3B5}\u{3BC}\u{3B2}\u{3C1}\u{3AF}\u{3BF}\u{3C5}",
        ],
        // Short name
        'short' => [
            "\u{399}\u{3B1}\u{3BD}",
            "\u{3A6}\u{3B5}\u{3B2}",
            "\u{39C}\u{3B1}\u{3C1}",
            "\u{391}\u{3C0}\u{3C1}",
            "\u{39C}\u{3B1}\u{3CA}",
            "\u{399}\u{3BF}\u{3C5}\u{3BD}",
            "\u{399}\u{3BF}\u{3C5}\u{3BB}",
            "\u{391}\u{3C5}\u{3B3}",
            "\u{3A3}\u{3B5}\u{3C0}",
            "\u{39F}\u{3BA}\u{3C4}",
            "\u{39D}\u{3BF}\u{3B5}",
            "\u{394}\u{3B5}\u{3BA}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'd/m/yyyy',
        'm/d/yyyy h:mm' => 'd/m/yyyy h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '\$ #,##0.00' => '$ #,##0.00',
        '\$ #,##0.00;[Red]\$ #,##0.00' => '$ #,##0.00;[Red]$ #,##0.00',
        '\$ #,##0.00;\$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '\$ #,##0.00;[Red]\$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * \"-\"_ ;_ @_ ',
        '_ \$ * #,##0.0_ ;_ \$ * -#,##0.0_ ;_ \$ * \"-\"?_ ;_ @_ ' => '_ $ * #,##0.0_ ;_ $ * -#,##0.0_ ;_ $ * \"-\"?_ ;_ @_ ',
        '_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * \"-\"??_ ;_ @_ ',
        '_ \$ * #,##0.000_ ;_ \$ * -#,##0.000_ ;_ \$ * \"-\"???_ ;_ @_ ' => '_ $ * #,##0.000_ ;_ $ * -#,##0.000_ ;_ $ * \"-\"???_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => "dddd\"{, }\"d\"{ \u{399}\u{3BF}\u{3CD}\u{3BB}\u{3B9}\u{3BF}\u{3C2} }\"yyyy",
        '[$-F400]h:mm:ss AM/PM' => "h:mm:ss\"{ \u{3C0}\u{3BC}}\"",
    ];
}
