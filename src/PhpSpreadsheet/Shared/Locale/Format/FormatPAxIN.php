<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for ਪੰਜਾਬੀ / Punjabi (India).
 *
 * Do not alter this file; it is generated content.
 */
class FormatPAxIN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0446;

    /**
     * @var string The locale tag
     */
    protected $tag = 'pa-in';

    /**
     * @var string The currency code "₹"
     */
    protected $strCurrencyCode = "\u{20B9}";

    /**
     * @var string The decimal separator "."
     */
    protected $strDecimalSeparator = '.';

    /**
     * @var string The thousands separator ","
     */
    protected $strThousandsSeparator = ',';

    /**
     * @var int The thousands format pattern
     */
    protected $intThousandsFormatPattern = self::THOUSANDS_FORMAT_HECTO;

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = '-';

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
            "\u{A38}\u{A4B}\u{A2E}\u{A35}\u{A3E}\u{A30}",
            "\u{A2E}\u{A70}\u{A17}\u{A32}\u{A35}\u{A3E}\u{A30}",
            "\u{A2C}\u{A41}\u{A71}\u{A27}\u{A35}\u{A3E}\u{A30}",
            "\u{A35}\u{A40}\u{A30}\u{A35}\u{A3E}\u{A30}",
            "\u{A36}\u{A41}\u{A71}\u{A15}\u{A30}\u{A35}\u{A3E}\u{A30}",
            "\u{A36}\u{A28}\u{A3F}\u{A71}\u{A1A}\u{A30}\u{A35}\u{A3E}\u{A30}",
            "\u{A10}\u{A24}\u{A35}\u{A3E}\u{A30}",
        ],
        // Short name
        'short' => [
            "\u{A38}\u{A4B}\u{A2E}.",
            "\u{A2E}\u{A70}\u{A17}\u{A32}.",
            "\u{A2C}\u{A41}\u{A71}\u{A27}.",
            "\u{A35}\u{A40}\u{A30}.",
            "\u{A36}\u{A41}\u{A15}\u{A30}.",
            "\u{A36}\u{A28}\u{A3F}\u{A71}\u{A1A}\u{A30}.",
            "\u{A10}\u{A24}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{A1C}\u{A28}\u{A35}\u{A30}\u{A40}",
            "\u{A5E}\u{A30}\u{A35}\u{A30}\u{A40}",
            "\u{A2E}\u{A3E}\u{A30}\u{A1A}",
            "\u{A05}\u{A2A}\u{A4D}\u{A30}\u{A48}\u{A32}",
            "\u{A2E}\u{A08}",
            "\u{A1C}\u{A42}\u{A28}",
            "\u{A1C}\u{A41}\u{A32}\u{A3E}\u{A08}",
            "\u{A05}\u{A17}\u{A38}\u{A24}",
            "\u{A38}\u{A24}\u{A70}\u{A2C}\u{A30}",
            "\u{A05}\u{A15}\u{A24}\u{A42}\u{A2C}\u{A30}",
            "\u{A28}\u{A35}\u{A70}\u{A2C}\u{A30}",
            "\u{A26}\u{A38}\u{A70}\u{A2C}\u{A30}",
        ],
        // Short name
        'short' => [
            "\u{A1C}\u{A28}\u{A35}\u{A30}\u{A40}",
            "\u{A5E}\u{A30}\u{A35}\u{A30}\u{A40}",
            "\u{A2E}\u{A3E}\u{A30}\u{A1A}",
            "\u{A05}\u{A2A}\u{A4D}\u{A30}\u{A48}\u{A32}",
            "\u{A2E}\u{A08}",
            "\u{A1C}\u{A42}\u{A28}",
            "\u{A1C}\u{A41}\u{A32}\u{A3E}\u{A08}",
            "\u{A05}\u{A17}\u{A38}\u{A24}",
            "\u{A38}\u{A24}\u{A70}\u{A2C}\u{A30}",
            "\u{A05}\u{A15}\u{A24}\u{A42}\u{A2C}\u{A30}",
            "\u{A28}\u{A35}\u{A70}\u{A2C}\u{A30}",
            "\u{A26}\u{A38}\u{A70}\u{A2C}\u{A30}",
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            "\u{A38}\u{A4B}\u{A2E}\u{A35}\u{A3E}\u{A30}",
            "\u{A2E}\u{A70}\u{A17}\u{A32}\u{A35}\u{A3E}\u{A30}",
            "\u{A2C}\u{A41}\u{A71}\u{A27}\u{A35}\u{A3E}\u{A30}",
            "\u{A35}\u{A40}\u{A30}\u{A35}\u{A3E}\u{A30}",
            "\u{A36}\u{A41}\u{A71}\u{A15}\u{A30}\u{A35}\u{A3E}\u{A30}",
            "\u{A36}\u{A28}\u{A3F}\u{A71}\u{A1A}\u{A30}\u{A35}\u{A3E}\u{A30}",
            "\u{A10}\u{A24}\u{A35}\u{A3E}\u{A30}",
        ],
        // Short name
        'short' => [
            "\u{A38}\u{A4B}\u{A2E}",
            "\u{A2E}\u{A70}\u{A17}\u{A32}",
            "\u{A2C}\u{A41}\u{A71}\u{A27}",
            "\u{A35}\u{A40}\u{A30}",
            "\u{A36}\u{A41}\u{A15}\u{A30}",
            "\u{A36}\u{A28}\u{A3F}\u{A71}\u{A1A}\u{A30}",
            "\u{A10}\u{A24}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            "\u{A1C}\u{A28}\u{A35}\u{A30}\u{A40}",
            "\u{A5E}\u{A30}\u{A35}\u{A30}\u{A40}",
            "\u{A2E}\u{A3E}\u{A30}\u{A1A}",
            "\u{A05}\u{A2A}\u{A4D}\u{A30}\u{A48}\u{A32}",
            "\u{A2E}\u{A08}",
            "\u{A1C}\u{A42}\u{A28}",
            "\u{A1C}\u{A41}\u{A32}\u{A3E}\u{A08}",
            "\u{A05}\u{A17}\u{A38}\u{A24}",
            "\u{A38}\u{A24}\u{A70}\u{A2C}\u{A30}",
            "\u{A05}\u{A15}\u{A24}\u{A42}\u{A2C}\u{A30}",
            "\u{A28}\u{A35}\u{A70}\u{A2C}\u{A30}",
            "\u{A26}\u{A38}\u{A70}\u{A2C}\u{A30}",
        ],
        // Short name
        'short' => [
            "\u{A1C}\u{A28}\u{A35}\u{A30}\u{A40}",
            "\u{A5E}\u{A30}\u{A35}\u{A30}\u{A40}",
            "\u{A2E}\u{A3E}\u{A30}\u{A1A}",
            "\u{A05}\u{A2A}\u{A4D}\u{A30}\u{A48}\u{A32}",
            "\u{A2E}\u{A08}",
            "\u{A1C}\u{A42}\u{A28}",
            "\u{A1C}\u{A41}\u{A32}\u{A3E}\u{A08}",
            "\u{A05}\u{A17}\u{A38}\u{A24}",
            "\u{A38}\u{A24}\u{A70}\u{A2C}\u{A30}",
            "\u{A05}\u{A15}\u{A24}\u{A42}\u{A2C}\u{A30}",
            "\u{A28}\u{A35}\u{A70}\u{A2C}\u{A30}",
            "\u{A26}\u{A38}\u{A70}\u{A2C}\u{A30}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yy',
        'd-mmm-yy' => 'dd/mmm/yy',
        'd-mmm' => 'dd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm AM/PM' => 'hh:mm AM/PM',
        'h:mm:ss AM/PM' => 'hh:mm:ss AM/PM',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_(* #,##0_);_(* (#,##0);_(* \"-\"_);_(@_)' => '_ * #,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ',
        '_(* #,##0.00_);_(* (#,##0.00);_(* \"-\"??_);_(@_)' => '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dd mmm yyyy dddd',
        '[$-F400]h:mm:ss AM/PM' => "\"{\u{A38}\u{A35}\u{A47}\u{A30} }\"h:mm:ss",
    ];
}
