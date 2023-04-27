<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_iu_latn_ca extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x085D;

    /**
     * @var string The locale tag
     */
    protected $tag = "iu-latn-ca";

    /**
     * @var string The currency code "C$"
     */
    protected $currencyCode = "C\$";

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
            "Naggajjau",
            "Aippiq",
            "Pingatsiq",
            "Sitammiq",
            "Tallirmiq",
            "Sivataarvik",
            "Naattiinguja",
        ],
        // Short name
        "short" => [
            "Nag",
            "Aip",
            "Pi",
            "Sit",
            "Tal",
            "Siv",
            "Nat",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Jaannuari",
            "Viivvuari",
            "Maatsi",
            "Iipuri",
            "Mai",
            "Juuni",
            "Julai",
            "Aaggiisi",
            "Sitipiri",
            "Utupiri",
            "Nuvipiri",
            "Tisipiri",
        ],
        // Short name
        "short" => [
            "Jan",
            "Viv",
            "Mas",
            "Ipu",
            "Mai",
            "Jun",
            "Jul",
            "Agi",
            "Sii",
            "Uut",
            "Nuv",
            "Tis",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        "\$ #,##0;\$ -#,##0" => "\$ #,##0;\$ -#,##0",
        "\$ #,##0;[Red]\$ -#,##0" => "\$ #,##0;[Red]\$ -#,##0",
        "\$ #,##0.00;\$ -#,##0.00" => "\$ #,##0.00;\$ -#,##0.00",
        "\$ #,##0.00;[Red]\$ -#,##0.00" => "\$ #,##0.00;[Red]\$ -#,##0.00",
        "_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ " => "_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ ",
        "_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ " => "_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ ",
        "[\$-F800]dddd, mmmm dd, yyyy" => "dddd\"{, }\"mmmm d\"{, }\"yyyy",
        "[\$-F400]h:mm:ss AM/PM" => "h:mm:ss AM/PM",
    ];

}
