<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for සිංහල / Sinhala (Sri Lanka).
 *
 * Do not alter this file; it is generated content.
 */
class FormatSIxLK extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x045B;

    /**
     * @var string The locale tag
     */
    protected $tag = 'si-lk';

    /**
     * @var string The currency code "රු."
     */
    protected $strCurrencyCode = "\u{DBB}\u{DD4}.";

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
    protected $strDateSeparator = '-';

    /**
     * @var string The time separator
     */
    protected $strTimeSeparator = '.';

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
            "\u{DC3}\u{DB3}\u{DD4}\u{DAF}\u{DCF}",
            "\u{D85}\u{D9F}\u{DC4}\u{DBB}\u{DD4}\u{DC0}\u{DCF}\u{DAF}\u{DCF}",
            "\u{DB6}\u{DAF}\u{DCF}\u{DAF}\u{DCF}",
            "\u{DB6}\u{DCA}\u{200D}\u{DBB}\u{DC4}\u{DC3}\u{DCA}\u{DB4}\u{DAD}\u{DD2}\u{DB1}\u{DCA}\u{DAF}\u{DCF}",
            "\u{DC3}\u{DD2}\u{D9A}\u{DD4}\u{DBB}\u{DCF}\u{DAF}\u{DCF}",
            "\u{DC3}\u{DD9}\u{DB1}\u{DC3}\u{DD4}\u{DBB}\u{DCF}\u{DAF}\u{DCF}",
            "\u{D89}\u{DBB}\u{DD2}\u{DAF}\u{DCF}",
        ],
        // Short name
        'short' => [
            "\u{DC3}\u{DB3}\u{DD4}\u{DAF}\u{DCF}",
            "\u{D85}\u{D9F}\u{DC4}",
            "\u{DB6}\u{DAF}\u{DCF}\u{DAF}\u{DCF}",
            "\u{DB6}\u{DCA}\u{200D}\u{DBB}\u{DC4}\u{DC3}\u{DCA}",
            "\u{DC3}\u{DD2}\u{D9A}\u{DD4}",
            "\u{DC3}\u{DD9}\u{DB1}",
            "\u{D89}\u{DBB}\u{DD2}\u{DAF}\u{DCF}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{DA2}\u{DB1}\u{DC0}\u{DCF}\u{DBB}\u{DD2}",
            "\u{DB4}\u{DD9}\u{DB6}\u{DBB}\u{DC0}\u{DCF}\u{DBB}\u{DD2}",
            "\u{DB8}\u{DCF}\u{DBB}\u{DCA}\u{DAD}\u{DD4}",
            "\u{D85}\u{DB4}\u{DCA}\u{200D}\u{DBB}\u{DDA}\u{DBD}\u{DCA}",
            "\u{DB8}\u{DD0}\u{DBA}\u{DD2}",
            "\u{DA2}\u{DD6}\u{DB1}\u{DD2}",
            "\u{DA2}\u{DD6}\u{DBD}\u{DD2}",
            "\u{D85}\u{D9C}\u{DDD}\u{DC3}\u{DCA}\u{DAD}\u{DD4}",
            "\u{DC3}\u{DD0}\u{DB4}\u{DCA}\u{DAD}\u{DD0}\u{DB8}\u{DCA}\u{DB6}\u{DBB}\u{DCA}",
            "\u{D94}\u{D9A}\u{DCA}\u{DAD}\u{DDD}\u{DB6}\u{DBB}\u{DCA}",
            "\u{DB1}\u{DDC}\u{DC0}\u{DD0}\u{DB8}\u{DCA}\u{DB6}\u{DBB}\u{DCA}",
            "\u{DAF}\u{DD9}\u{DC3}\u{DD0}\u{DB8}\u{DCA}\u{DB6}\u{DBB}\u{DCA}",
        ],
        // Short name
        'short' => [
            "\u{DA2}\u{DB1}.",
            "\u{DB4}\u{DD9}\u{DB6}.",
            "\u{DB8}\u{DCF}\u{DBB}\u{DCA}\u{DAD}\u{DD4}.",
            "\u{D85}\u{DB4}\u{DCA}\u{200D}\u{DBB}\u{DDA}\u{DBD}\u{DCA}.",
            "\u{DB8}\u{DD0}\u{DBA}\u{DD2}",
            "\u{DA2}\u{DD6}\u{DB1}\u{DD2}",
            "\u{DA2}\u{DD6}\u{DBD}\u{DD2}",
            "\u{D85}\u{D9C}\u{DDD}.",
            "\u{DC3}\u{DD0}\u{DB4}\u{DCA}.",
            "\u{D94}\u{D9A}\u{DCA}.",
            "\u{DB1}\u{DDC}\u{DC0}\u{DD0}.",
            "\u{DAF}\u{DD9}\u{DC3}\u{DD0}.",
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            "\u{DC3}\u{DB3}\u{DD4}\u{DAF}\u{DCF}",
            "\u{D85}\u{D9F}\u{DC4}\u{DBB}\u{DD4}\u{DC0}\u{DCF}\u{DAF}\u{DCF}",
            "\u{DB6}\u{DAF}\u{DCF}\u{DAF}\u{DCF}",
            "\u{DB6}\u{DCA}\u{200D}\u{DBB}\u{DC4}\u{DC3}\u{DCA}\u{DB4}\u{DAD}\u{DD2}\u{DB1}\u{DCA}\u{DAF}\u{DCF}",
            "\u{DC3}\u{DD2}\u{D9A}\u{DD4}\u{DBB}\u{DCF}\u{DAF}\u{DCF}",
            "\u{DC3}\u{DD9}\u{DB1}\u{DC3}\u{DD4}\u{DBB}\u{DCF}\u{DAF}\u{DCF}",
            "\u{D89}\u{DBB}\u{DD2}\u{DAF}\u{DCF}",
        ],
        // Short name
        'short' => [
            "\u{DC3}\u{DB3}\u{DD4}\u{DAF}\u{DCF}",
            "\u{D85}\u{D9F}\u{DC4}",
            "\u{DB6}\u{DAF}\u{DCF}\u{DAF}\u{DCF}",
            "\u{DB6}\u{DCA}\u{200D}\u{DBB}\u{DC4}\u{DC3}\u{DCA}",
            "\u{DC3}\u{DD2}\u{D9A}\u{DD4}",
            "\u{DC3}\u{DD9}\u{DB1}",
            "\u{D89}\u{DBB}\u{DD2}\u{DAF}\u{DCF}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            "\u{DA2}\u{DB1}\u{DC0}\u{DCF}\u{DBB}\u{DD2}",
            "\u{DB4}\u{DD9}\u{DB6}\u{DBB}\u{DC0}\u{DCF}\u{DBB}\u{DD2}",
            "\u{DB8}\u{DCF}\u{DBB}\u{DCA}\u{DAD}\u{DD4}",
            "\u{D85}\u{DB4}\u{DCA}\u{200D}\u{DBB}\u{DDA}\u{DBD}\u{DCA}",
            "\u{DB8}\u{DD0}\u{DBA}\u{DD2}",
            "\u{DA2}\u{DD6}\u{DB1}\u{DD2}",
            "\u{DA2}\u{DD6}\u{DBD}\u{DD2}",
            "\u{D85}\u{D9C}\u{DDD}\u{DC3}\u{DCA}\u{DAD}\u{DD4}",
            "\u{DC3}\u{DD0}\u{DB4}\u{DCA}\u{DAD}\u{DD0}\u{DB8}\u{DCA}\u{DB6}\u{DBB}\u{DCA}",
            "\u{D94}\u{D9A}\u{DCA}\u{DAD}\u{DDD}\u{DB6}\u{DBB}\u{DCA}",
            "\u{DB1}\u{DDC}\u{DC0}\u{DD0}\u{DB8}\u{DCA}\u{DB6}\u{DBB}\u{DCA}",
            "\u{DAF}\u{DD9}\u{DC3}\u{DD0}\u{DB8}\u{DCA}\u{DB6}\u{DBB}\u{DCA}",
        ],
        // Short name
        'short' => [
            "\u{DA2}\u{DB1}",
            "\u{DB4}\u{DD9}\u{DB6}",
            "\u{DB8}\u{DCF}\u{DBB}\u{DCA}\u{DAD}\u{DD4}",
            "\u{D85}\u{DB4}\u{DCA}\u{200D}\u{DBB}\u{DDA}\u{DBD}\u{DCA}",
            "\u{DB8}\u{DD0}\u{DBA}\u{DD2}",
            "\u{DA2}\u{DD6}\u{DB1}\u{DD2}",
            "\u{DA2}\u{DD6}\u{DBD}\u{DD2}",
            "\u{D85}\u{D9C}\u{DDD}",
            "\u{DC3}\u{DD0}\u{DB4}\u{DCA}",
            "\u{D94}\u{D9A}\u{DCA}",
            "\u{DB1}\u{DDC}\u{DC0}\u{DD0}",
            "\u{DAF}\u{DD9}\u{DC3}\u{DD0}",
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
