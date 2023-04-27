<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_dsb_de extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x082E;

    /**
     * @var string The locale tag
     */
    protected $tag = "dsb-de";

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
    protected $dateSeparator = ".";

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
            "ponje\u{17A}ele",
            "wa\u{142}tora",
            "srjoda",
            "stwórtk",
            "p\u{11B}tk",
            "sobota",
            "nje\u{17A}ela",
        ],
        // Short name
        "short" => [
            "pon",
            "wa\u{142}",
            "srj",
            "stw",
            "p\u{11B}t",
            "sob",
            "nje",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "januar",
            "februar",
            "m\u{11B}rc",
            "apryl",
            "maj",
            "junij",
            "julij",
            "awgust",
            "september",
            "oktober",
            "nowember",
            "december",
        ],
        // Short name
        "short" => [
            "jan",
            "feb",
            "m\u{11B}r",
            "apr",
            "maj",
            "jun",
            "jul",
            "awg",
            "sep",
            "okt",
            "now",
            "dec",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        "m/d/yyyy" => "dd/mm/yyyy",
        "d-mmm-yy" => "dd/ mmm yy",
        "d-mmm" => "dd/ mmm",
        "mmm-yy" => "mmm yy",
        "h:mm AM/PM" => "h:mm Am/Pm",
        "h:mm:ss AM/PM" => "h:mm:ss Am/Pm",
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
        "[\$-409]d/mm/yy h:mm AM/PM;@" => "[\$-409]d/mm/yy h:mm Am/Pm;@",
        "[\$-F800]dddd, mmmm dd, yyyy" => "dddd\"{, }\"d\"{. }\"mmmm yyyy",
        "[\$-F400]h:mm:ss AM/PM" => "[\$-F400]h:mm:ss Am/Pm",
        "[\$-409]h:mm:ss AM/PM;@" => "[\$-409]h:mm:ss Am/Pm;@",
        "[\$-409]h:mm AM/PM;@" => "[\$-409]h:mm Am/Pm;@",
        "[\$-F400]h:mm:ss AM/PM" => "h:mm:ss",
    ];

}
