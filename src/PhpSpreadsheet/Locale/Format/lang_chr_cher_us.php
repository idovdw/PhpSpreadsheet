<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_chr_cher_us extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x045C;

    /**
     * @var string The locale tag
     */
    protected $tag = "chr-cher-us";

    /**
     * @var string The currency code "$"
     */
    protected $currencyCode = "\$";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ".";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ",";

    /**
     * @var string The date separator
     */
    protected $dateSeparator = "/";

    /**
     * @var string[] The numerals representation (0 up to 9)
     */
    protected $numerals = [
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $weekdayNames = [
        // Full name
        "full" => [
            "\u{13A4}\u{13BE}\u{13D9}\u{13D3}\u{13C9}\u{13C5}\u{13AF}",
            "\u{13D4}\u{13B5}\u{13C1}\u{13A2}\u{13A6}",
            "\u{13E6}\u{13A2}\u{13C1}\u{13A2}\u{13A6}",
            "\u{13C5}\u{13A9}\u{13C1}\u{13A2}\u{13A6}",
            "\u{13E7}\u{13BE}\u{13A9}\u{13B6}\u{13CD}\u{13D7}",
            "\u{13A4}\u{13BE}\u{13D9}\u{13D3}\u{13C8}\u{13D5}\u{13BE}",
            "\u{13A4}\u{13BE}\u{13D9}\u{13D3}\u{13C6}\u{13CD}\u{13AC}",
        ],
        // Short name
        "short" => [
            "\u{13C9}\u{13C5}\u{13AF}",
            "\u{13D4}\u{13B5}\u{13C1}",
            "\u{13E6}\u{13A2}\u{13C1}",
            "\u{13C5}\u{13A9}\u{13C1}",
            "\u{13E7}\u{13BE}\u{13A9}",
            "\u{13C8}\u{13D5}\u{13BE}",
            "\u{13C6}\u{13CD}\u{13AC}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{13A4}\u{13C3}\u{13B8}\u{13D4}\u{13C5}",
            "\u{13A7}\u{13A6}\u{13B5}",
            "\u{13A0}\u{13C5}\u{13F1}",
            "\u{13DD}\u{13EC}\u{13C2}",
            "\u{13A0}\u{13C2}\u{13CD}\u{13AC}\u{13D8}",
            "\u{13D5}\u{13AD}\u{13B7}\u{13F1}",
            "\u{13AB}\u{13F0}\u{13C9}\u{13C2}",
            "\u{13A6}\u{13B6}\u{13C2}",
            "\u{13DA}\u{13B5}\u{13CD}\u{13D7}",
            "\u{13DA}\u{13C2}\u{13C5}\u{13D7}",
            "\u{13C5}\u{13D3}\u{13D5}\u{13C6}",
            "\u{13A4}\u{13CD}\u{13A9}\u{13F1}",
        ],
        // Short name
        "short" => [
            "\u{13A4}\u{13C3}\u{13B8}",
            "\u{13A7}\u{13A6}\u{13B5}",
            "\u{13A0}\u{13C5}\u{13F1}",
            "\u{13DD}\u{13EC}\u{13C2}",
            "\u{13A0}\u{13C2}\u{13CD}",
            "\u{13D5}\u{13AD}\u{13B7}",
            "\u{13AB}\u{13F0}\u{13C9}",
            "\u{13A6}\u{13B6}\u{13C2}",
            "\u{13DA}\u{13B5}\u{13CD}",
            "\u{13DA}\u{13C2}\u{13C5}",
            "\u{13C5}\u{13D3}\u{13D5}",
            "\u{13A4}\u{13CD}\u{13A9}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        "m/d/yyyy" => "dd/mm/yyyy",
        "d-mmm-yy" => "dd-mmm-yy",
        "d-mmm" => "dd-mmm",
        "h:mm" => "hh:mm",
        "h:mm:ss" => "hh:mm:ss",
        "m/d/yyyy h:mm" => "dd/mm/yyyy hh:mm",
        "#,##0_);(#,##0)" => "#,##0;-#,##0",
        "#,##0_);[Red](#,##0)" => "#,##0;[Red]-#,##0",
        "#,##0.00_);(#,##0.00)" => "#,##0.00;-#,##0.00",
        "#,##0.00_);[Red](#,##0.00)" => "#,##0.00;[Red]-#,##0.00",
        "\$ #,##0.00" => "\$ #,##0.00",
        "\$ #,##0.00;[Red]\$ #,##0.00" => "\$ #,##0.00;[Red]\$ #,##0.00",
        "\$ #,##0.00;\$ -#,##0.00" => "\$ #,##0.00;\$ -#,##0.00",
        "\$ #,##0.00;[Red]\$ -#,##0.00" => "\$ #,##0.00;[Red]\$ -#,##0.00",
        "_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ " => "_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ ",
        "_ \$ * #,##0.0_ ;_ \$ * -#,##0.0_ ;_ \$ * \"-\"?_ ;_ @_ " => "_ \$ * #,##0.0_ ;_ \$ * -#,##0.0_ ;_ \$ * \"-\"?_ ;_ @_ ",
        "_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ " => "_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ ",
        "_ \$ * #,##0.000_ ;_ \$ * -#,##0.000_ ;_ \$ * \"-\"???_ ;_ @_ " => "_ \$ * #,##0.000_ ;_ \$ * -#,##0.000_ ;_ \$ * \"-\"???_ ;_ @_ ",
        "[\$-F800]dddd, mmmm dd, yyyy" => "dddd d mmmm yyyy",
        "[\$-F400]h:mm:ss AM/PM" => "h:mm:ss",
    ];

}
