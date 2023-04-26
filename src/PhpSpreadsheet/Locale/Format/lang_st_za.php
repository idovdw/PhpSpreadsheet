<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_st_za extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0430;

    /**
     * @var string The locale tag
     */
    protected $tag = "st-za";

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
            "Mmantaha",
            "Labobedi",
            "Laboraru",
            "Labone",
            "Labohlane",
            "Moqebelo",
            "Sontaha",
        ],
        // Short name
        "short" => [
            "Mma",
            "Bed",
            "Rar",
            "Ne",
            "Hla",
            "Moq",
            "Son",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Phesekgong",
            "Hlakola",
            "Hlakubele",
            "Mmese",
            "Motsheanong",
            "Phupjane",
            "Phupu",
            "Phata",
            "Leotshe",
            "Mphalane",
            "Pundungwane",
            "Tshitwe",
        ],
        // Short name
        "short" => [
            "Phe",
            "Kol",
            "Ube",
            "Mme",
            "Mot",
            "Jan",
            "Upu",
            "Pha",
            "Leo",
            "Mph",
            "Pun",
            "Tsh",
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
