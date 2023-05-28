<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for ଓଡ଼ିଆ / Odia (India).
 *
 * Do not alter this file; it is generated content.
 */
class FormatORxIN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0448;

    /**
     * @var string The locale tag
     */
    protected $tag = 'or-in';

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
            "\u{B38}\u{B47}\u{B3E}\u{B2E}\u{B2C}\u{B3E}\u{B30}",
            "\u{B2E}\u{B19}\u{B4D}\u{B17}\u{B33}\u{B2C}\u{B3E}\u{B30}",
            "\u{B2C}\u{B41}\u{B27}\u{B2C}\u{B3E}\u{B30}",
            "\u{B17}\u{B41}\u{B30}\u{B41}\u{B2C}\u{B3E}\u{B30}",
            "\u{B36}\u{B41}\u{B15}\u{B4D}\u{B30}\u{B2C}\u{B3E}\u{B30}",
            "\u{B36}\u{B28}\u{B3F}\u{B2C}\u{B3E}\u{B30}",
            "\u{B30}\u{B2C}\u{B3F}\u{B2C}\u{B3E}\u{B30}",
        ],
        // Short name
        'short' => [
            "\u{B38}\u{B47}\u{B3E}\u{B2E}.",
            "\u{B2E}\u{B19}\u{B4D}\u{B17}\u{B33}.",
            "\u{B2C}\u{B41}\u{B27}.",
            "\u{B17}\u{B41}\u{B30}\u{B41}.",
            "\u{B36}\u{B41}\u{B15}\u{B4D}\u{B30}.",
            "\u{B36}\u{B28}\u{B3F}.",
            "\u{B30}\u{B2C}\u{B3F}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{B1C}\u{B3E}\u{B28}\u{B41}\u{B5F}\u{B3E}\u{B30}\u{B40}",
            "\u{B2B}\u{B47}\u{B2C}\u{B43}\u{B06}\u{B30}\u{B40}",
            "\u{B2E}\u{B3E}\u{B30}\u{B4D}\u{B1A}\u{B4D}\u{B1A}",
            "\u{B0F}\u{B2A}\u{B4D}\u{B30}\u{B3F}\u{B32}\u{B4D}\u{200C}",
            "\u{B2E}\u{B47}",
            "\u{B1C}\u{B41}\u{B28}\u{B4D}\u{200C}",
            "\u{B1C}\u{B41}\u{B32}\u{B3E}\u{B07}",
            "\u{B05}\u{B17}\u{B37}\u{B4D}\u{B1F}",
            "\u{B38}\u{B47}\u{B2A}\u{B4D}\u{B1F}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
            "\u{B05}\u{B15}\u{B4D}\u{B1F}\u{B4B}\u{B2C}\u{B30}",
            "\u{B28}\u{B2D}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
            "\u{B21}\u{B3F}\u{B38}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
        ],
        // Short name
        'short' => [
            "\u{B1C}\u{B3E}\u{B28}\u{B41}\u{B5F}\u{B3E}\u{B30}\u{B40}",
            "\u{B2B}\u{B47}\u{B2C}\u{B43}\u{B06}\u{B30}\u{B40}",
            "\u{B2E}\u{B3E}\u{B30}\u{B4D}\u{B1A}\u{B4D}\u{B1A}",
            "\u{B0F}\u{B2A}\u{B4D}\u{B30}\u{B3F}\u{B32}\u{B4D}\u{200C}",
            "\u{B2E}\u{B47}",
            "\u{B1C}\u{B41}\u{B28}\u{B4D}\u{200C}",
            "\u{B1C}\u{B41}\u{B32}\u{B3E}\u{B07}",
            "\u{B05}\u{B17}\u{B37}\u{B4D}\u{B1F}",
            "\u{B38}\u{B47}\u{B2A}\u{B4D}\u{B1F}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
            "\u{B05}\u{B15}\u{B4D}\u{B1F}\u{B4B}\u{B2C}\u{B30}",
            "\u{B28}\u{B2D}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
            "\u{B21}\u{B3F}\u{B38}\u{B47}\u{B2E}\u{B4D}\u{B2C}\u{B30}",
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
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_(* #,##0_);_(* (#,##0);_(* \"-\"_);_(@_)' => '_ * #,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ',
        '_(* #,##0.00_);_(* (#,##0.00);_(* \"-\"??_);_(@_)' => '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dd mmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
