<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_oc_fr extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0482;

    /**
     * @var string The locale tag
     */
    protected $tag = "oc-fr";

    /**
     * @var string The currency code "€"
     */
    protected $currencyCode = "\u{20AC}";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ",";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ".";

    /**
     * @var string The date separator
     */
    protected $dateSeparator = "-";

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
            "diluns",
            "dimarts",
            "dimècres",
            "dijòus",
            "divendres",
            "dissabte",
            "dimenge",
        ],
        // Short name
        "short" => [
            "dl.",
            "dma.",
            "dmc.",
            "dj.",
            "dv.",
            "ds.",
            "dg.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "genièr",
            "febrièr",
            "març",
            "abril",
            "mai",
            "junh",
            "julhet",
            "agost",
            "setembre",
            "octobre",
            "novembre",
            "decembre",
        ],
        // Short name
        "short" => [
            "gen.",
            "feb.",
            "març",
            "abr.",
            "mai",
            "junh",
            "julh",
            "ag.",
            "set.",
            "oct.",
            "nov.",
            "dec.",
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
