<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_rm_ch extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0417;

    /**
     * @var string The locale tag
     */
    protected $tag = "rm-ch";

    /**
     * @var string The currency code "CHF"
     */
    protected $currencyCode = "CHF";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ".";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = "\u{2019}";

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
            "glindesdi",
            "mardi",
            "mesemna",
            "gievgia",
            "venderdi",
            "sonda",
            "dumengia",
        ],
        // Short name
        "short" => [
            "gli",
            "ma",
            "me",
            "gie",
            "ve",
            "so",
            "du",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "schaner",
            "favrer",
            "mars",
            "avrigl",
            "matg",
            "zercladur",
            "fanadur",
            "avust",
            "settember",
            "october",
            "november",
            "december",
        ],
        // Short name
        "short" => [
            "schan.",
            "favr.",
            "mars",
            "avr.",
            "matg",
            "zercl.",
            "fan.",
            "avust",
            "sett.",
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
