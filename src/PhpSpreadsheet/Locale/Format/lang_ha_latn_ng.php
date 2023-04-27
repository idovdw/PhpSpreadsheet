<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_ha_latn_ng extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0468;

    /**
     * @var string The locale tag
     */
    protected $tag = "ha-latn-ng";

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
            "Litinin",
            "Talata",
            "Laraba",
            "Alhamis",
            "Jumma\u{2BC}a",
            "Asabar",
            "Lahadi",
        ],
        // Short name
        "short" => [
            "Lit",
            "Tal",
            "Lar",
            "Alh",
            "Jum",
            "Asa",
            "Lah",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Janairu",
            "Fabrairu",
            "Maris",
            "Afirilu",
            "Mayu",
            "Yuni",
            "Yuli",
            "Agusta",
            "Satumba",
            "Oktoba",
            "Nuwamba",
            "Disamba",
        ],
        // Short name
        "short" => [
            "Jan",
            "Fab",
            "Mar",
            "Afi",
            "May",
            "Yun",
            "Yul",
            "Agu",
            "Sat",
            "Okt",
            "Nuw",
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
