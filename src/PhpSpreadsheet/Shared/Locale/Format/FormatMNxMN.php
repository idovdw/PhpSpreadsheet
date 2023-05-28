<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for монгол / Mongolian (Mongolia).
 *
 * Do not alter this file; it is generated content.
 */
class FormatMNxMN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0450;

    /**
     * @var string The locale tag
     */
    protected $tag = 'mn-mn';

    /**
     * @var string The currency code "₮"
     */
    protected $strCurrencyCode = "\u{20AE}";

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
    protected $strDateSeparator = '.';

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
            "\u{434}\u{430}\u{432}\u{430}\u{430}",
            "\u{43C}\u{44F}\u{433}\u{43C}\u{430}\u{440}",
            "\u{43B}\u{445}\u{430}\u{433}\u{432}\u{430}",
            "\u{43F}\u{4AF}\u{440}\u{44D}\u{432}",
            "\u{431}\u{430}\u{430}\u{441}\u{430}\u{43D}",
            "\u{431}\u{44F}\u{43C}\u{431}\u{430}",
            "\u{43D}\u{44F}\u{43C}",
        ],
        // Short name
        'short' => [
            "\u{414}\u{430}",
            "\u{41C}\u{44F}",
            "\u{41B}\u{445}\u{430}",
            "\u{41F}\u{4AF}",
            "\u{411}\u{430}",
            "\u{411}\u{44F}",
            "\u{41D}\u{44F}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{41D}\u{44D}\u{433}\u{434}\u{4AF}\u{433}\u{44D}\u{44D}\u{440} \u{441}\u{430}\u{440}",
            "\u{425}\u{43E}\u{451}\u{440}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{413}\u{443}\u{440}\u{430}\u{432}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{414}\u{4E9}\u{440}\u{4E9}\u{432}\u{434}\u{4AF}\u{433}\u{44D}\u{44D}\u{440} \u{441}\u{430}\u{440}",
            "\u{422}\u{430}\u{432}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{417}\u{443}\u{440}\u{433}\u{430}\u{430}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{414}\u{43E}\u{43B}\u{43E}\u{43E}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{41D}\u{430}\u{439}\u{43C}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{415}\u{441}\u{434}\u{4AF}\u{433}\u{44D}\u{44D}\u{440} \u{441}\u{430}\u{440}",
            "\u{410}\u{440}\u{430}\u{432}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{410}\u{440}\u{432}\u{430}\u{43D} \u{43D}\u{44D}\u{433}\u{434}\u{4AF}\u{433}\u{44D}\u{44D}\u{440} \u{441}\u{430}\u{440}",
            "\u{410}\u{440}\u{432}\u{430}\u{43D} \u{445}\u{43E}\u{451}\u{440}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
        ],
        // Short name
        'short' => [
            "1-\u{440} \u{441}\u{430}\u{440}",
            "2-\u{440} \u{441}\u{430}\u{440}",
            "3-\u{440} \u{441}\u{430}\u{440}",
            "4-\u{440} \u{441}\u{430}\u{440}",
            "5-\u{440} \u{441}\u{430}\u{440}",
            "6-\u{440} \u{441}\u{430}\u{440}",
            "7-\u{440} \u{441}\u{430}\u{440}",
            "8-\u{440} \u{441}\u{430}\u{440}",
            "9-\u{440} \u{441}\u{430}\u{440}",
            "10-\u{440} \u{441}\u{430}\u{440}",
            "11-\u{440} \u{441}\u{430}\u{440}",
            "12-\u{440} \u{441}\u{430}\u{440}",
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            "\u{434}\u{430}\u{432}\u{430}\u{430}",
            "\u{43C}\u{44F}\u{433}\u{43C}\u{430}\u{440}",
            "\u{43B}\u{445}\u{430}\u{433}\u{432}\u{430}",
            "\u{43F}\u{4AF}\u{440}\u{44D}\u{432}",
            "\u{431}\u{430}\u{430}\u{441}\u{430}\u{43D}",
            "\u{431}\u{44F}\u{43C}\u{431}\u{430}",
            "\u{43D}\u{44F}\u{43C}",
        ],
        // Short name
        'short' => [
            "\u{414}\u{430}",
            "\u{41C}\u{44F}",
            "\u{41B}\u{445}\u{430}",
            "\u{41F}\u{4AF}",
            "\u{411}\u{430}",
            "\u{411}\u{44F}",
            "\u{41D}\u{44F}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            "\u{41D}\u{44D}\u{433}\u{434}\u{4AF}\u{433}\u{44D}\u{44D}\u{440} \u{441}\u{430}\u{440}",
            "\u{425}\u{43E}\u{451}\u{440}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{413}\u{443}\u{440}\u{430}\u{432}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{414}\u{4E9}\u{440}\u{4E9}\u{432}\u{434}\u{4AF}\u{433}\u{44D}\u{44D}\u{440} \u{441}\u{430}\u{440}",
            "\u{422}\u{430}\u{432}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{417}\u{443}\u{440}\u{433}\u{430}\u{430}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{414}\u{43E}\u{43B}\u{43E}\u{43E}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{41D}\u{430}\u{439}\u{43C}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{415}\u{441}\u{434}\u{4AF}\u{433}\u{44D}\u{44D}\u{440} \u{441}\u{430}\u{440}",
            "\u{410}\u{440}\u{430}\u{432}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}\u{440}",
            "\u{410}\u{440}\u{432}\u{430}\u{43D} \u{43D}\u{44D}\u{433}\u{434}\u{4AF}\u{433}\u{44D}\u{44D}\u{440} \u{441}\u{430}\u{440}",
            "\u{410}\u{440}\u{432}\u{430}\u{43D} \u{445}\u{43E}\u{451}\u{440}\u{434}\u{443}\u{433}\u{430}\u{430}\u{440} \u{441}\u{430}",
        ],
        // Short name
        'short' => [
            "1-\u{440} \u{441}\u{430}\u{440}",
            "2-\u{440} \u{441}\u{430}\u{440}",
            "3-\u{440} \u{441}\u{430}\u{440}",
            "4-\u{440} \u{441}\u{430}\u{440}",
            "5-\u{440} \u{441}\u{430}\u{440}",
            "6-\u{440} \u{441}\u{430}\u{440}",
            "7-\u{440} \u{441}\u{430}\u{440}",
            "8-\u{440} \u{441}\u{430}\u{440}",
            "9-\u{440} \u{441}\u{430}\u{440}",
            "10-\u{440} \u{441}\u{430}\u{440}",
            "11-\u{440} \u{441}\u{430}\u{440}",
            "12-\u{440} \u{441}\u{430}\u{440}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'yyyy/mm/dd',
        'd-mmm-yy' => 'dd/mmm/yy',
        'd-mmm' => 'dd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'yyyy/mm/dd hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => '"{#######################}"',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
