<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_yo_ng extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x046A;

    /**
     * @var string The locale tag
     */
    protected $tag = "yo-ng";

    /**
     * @var string The currency code "₦"
     */
    protected $currencyCode = "\u{20A6}";

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
            "\u{1ECC}j\u{1ECD}\u{301} Ajé",
            "\u{1ECC}j\u{1ECD}\u{301} Ìs\u{1EB9}\u{301}gun",
            "\u{1ECC}j\u{1ECD}\u{301}rú",
            "\u{1ECC}j\u{1ECD}\u{301}b\u{1ECD}",
            "\u{1ECC}j\u{1ECD}\u{301} \u{1EB8}tì",
            "\u{1ECC}j\u{1ECD}\u{301} Àbám\u{1EB9}\u{301}ta",
            "\u{1ECC}j\u{1ECD}\u{301} Àìkú",
        ],
        // Short name
        "short" => [
            "Aj",
            "Ì\u{1E63}g",
            "\u{1ECC}jr",
            "\u{1ECC}jb",
            "\u{1EB8}t",
            "Àbá",
            "Àìk",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{1E62}\u{1EB9}\u{301}r\u{1EB9}\u{301}",
            "Èrèlè",
            "\u{1EB8}r\u{1EB9}\u{300}n\u{E0}",
            "Ìgbé",
            "\u{1EB8}\u{300}bibi",
            "Òkúdu",
            "Age\u{323}mo\u{323}",
            "Ògún",
            "Owewe",
            "\u{1ECC}\u{300}w\u{E0}r\u{E0}",
            "Bélú",
            "\u{1ECC}\u{300}p\u{1EB9}\u{300}",
        ],
        // Short name
        "short" => [
            "\u{1E62}\u{1EB9}\u{301}",
            "Èr",
            "\u{1EB8}r",
            "Ìg",
            "\u{1EB8}\u{300}b",
            "Òk",
            "Ag",
            "Òg",
            "Ow",
            "\u{1ECC}\u{300}w",
            "Bé",
            "\u{1ECC}\u{300}p",
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
