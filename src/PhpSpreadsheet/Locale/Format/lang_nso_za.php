<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_nso_za extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x046C;

    /**
     * @var string The locale tag
     */
    protected $tag = "nso-za";

    /**
     * @var string The currency code "ZAR"
     */
    protected $currencyCode = "ZAR";

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
            "Musopologo",
            "Labobedi",
            "Laboraro",
            "Labone",
            "Labohlano",
            "Mokibelo",
            "Lamorena",
        ],
        // Short name
        "short" => [
            "Mo\u{161}",
            "Lbb",
            "Lbr",
            "Lbn",
            "Lbh",
            "Mok",
            "Lam",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Janaware",
            "Feberware",
            "Mat\u{161}he",
            "Aprele",
            "Mei",
            "June",
            "Julae",
            "Agostose",
            "Setemere",
            "Oktoboro",
            "Nofemere",
            "Disemere",
        ],
        // Short name
        "short" => [
            "Jan",
            "Feb",
            "Mat\u{161}",
            "Apr",
            "Mei",
            "June",
            "Julae",
            "Agost",
            "Set",
            "Oky",
            "Nof",
            "Dis",
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
