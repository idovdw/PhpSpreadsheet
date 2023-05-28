<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Kurdî / Kurdish (Iraq).
 *
 * Do not alter this file; it is generated content.
 */
class FormatKUxARABxIQ extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0492;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ku-arab-iq';

    /**
     * @var string The currency code "IQD"
     */
    protected $strCurrencyCode = 'IQD';

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
            "\u{62F}\u{648}\u{648}\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
            "\u{633}\u{6CE}\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
            "\u{686}\u{648}\u{627}\u{631}\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
            "\u{67E}\u{6CE}\u{646}\u{62C}\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
            "\u{6BE}\u{6D5}\u{6CC}\u{646}\u{6CC}",
            "\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
            "\u{6CC}\u{6D5}\u{6A9}\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
        ],
        // Short name
        'short' => [
            "\u{62F}\u{648}\u{648}\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
            "\u{633}\u{6CE}\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
            "\u{686}\u{648}\u{627}\u{631}\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
            "\u{67E}\u{6CE}\u{646}\u{62C}\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
            "\u{6BE}\u{6D5}\u{6CC}\u{646}\u{6CC}",
            "\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
            "\u{6CC}\u{6D5}\u{6A9}\u{634}\u{6D5}\u{645}\u{645}\u{6D5}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{6A9}\u{627}\u{646}\u{648}\u{648}\u{646}\u{6CC} \u{62F}\u{648}\u{648}\u{6D5}\u{645}",
            "\u{634}\u{648}\u{628}\u{627}\u{62A}",
            "\u{626}\u{627}\u{632}\u{627}\u{631}",
            "\u{646}\u{6CC}\u{633}\u{627}\u{646}",
            "\u{626}\u{627}\u{6CC}\u{627}\u{631}",
            "\u{62D}\u{648}\u{632}\u{6D5}\u{6CC}\u{631}\u{627}\u{646}",
            "\u{62A}\u{6D5}\u{645}\u{648}\u{648}\u{632}",
            "\u{626}\u{627}\u{628}",
            "\u{626}\u{6D5}\u{6CC}\u{644}\u{648}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{6CC}\u{646}\u{6CC} \u{6CC}\u{6D5}\u{6A9}\u{6D5}\u{645}",
            "\u{62A}\u{634}\u{631}\u{6CC}\u{646}\u{6CC} \u{62F}\u{648}\u{648}\u{6D5}\u{645}",
            "\u{6A9}\u{627}\u{646}\u{648}\u{646}\u{6CC} \u{6CC}\u{6D5}\u{6A9}\u{6D5}\u{645}",
        ],
        // Short name
        'short' => [
            "\u{6A9}\u{627}\u{646}\u{648}\u{648}\u{646}\u{6CC} \u{62F}\u{648}\u{648}\u{6D5}\u{645}",
            "\u{634}\u{648}\u{628}\u{627}\u{62A}",
            "\u{626}\u{627}\u{632}\u{627}\u{631}",
            "\u{646}\u{6CC}\u{633}\u{627}\u{646}",
            "\u{626}\u{627}\u{6CC}\u{627}\u{631}",
            "\u{62D}\u{648}\u{632}\u{6D5}\u{6CC}\u{631}\u{627}\u{646}",
            "\u{62A}\u{6D5}\u{645}\u{648}\u{648}\u{632}",
            "\u{626}\u{627}\u{628}",
            "\u{626}\u{6D5}\u{6CC}\u{644}\u{648}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{6CC}\u{646}\u{6CC} \u{6CC}\u{6D5}\u{6A9}\u{6D5}\u{645}",
            "\u{62A}\u{634}\u{631}\u{6CC}\u{646}\u{6CC} \u{62F}\u{648}\u{648}\u{6D5}\u{645}",
            "\u{6A9}\u{627}\u{646}\u{648}\u{646}\u{6CC} \u{6CC}\u{6D5}\u{6A9}\u{6D5}\u{645}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy hh:mm',
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
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd d mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
