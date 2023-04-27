<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_am_et extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x045E;

    /**
     * @var string The locale tag
     */
    protected $tag = "am-et";

    /**
     * @var string The currency code "ብር"
     */
    protected $currencyCode = "\u{1265}\u{122D}";

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
            "\u{1230}\u{129E}",
            "\u{121B}\u{12AD}\u{1230}\u{129E}",
            "\u{1228}\u{1261}\u{12D5}",
            "\u{1210}\u{1219}\u{1235}",
            "\u{12D3}\u{122D}\u{1265}",
            "\u{1245}\u{12F3}\u{121C}",
            "\u{12A5}\u{1211}\u{12F5}",
        ],
        // Short name
        "short" => [
            "\u{1230}\u{129E}",
            "\u{121B}\u{12AD}\u{1230}",
            "\u{1228}\u{1261}\u{12D5}",
            "\u{1210}\u{1219}\u{1235}",
            "\u{12D3}\u{122D}\u{1265}",
            "\u{1245}\u{12F3}\u{121C}",
            "\u{12A5}\u{1211}\u{12F5}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{1303}\u{1295}\u{12E9}\u{12C8}\u{122A}",
            "\u{134C}\u{1265}\u{1229}\u{12C8}\u{122A}",
            "\u{121B}\u{122D}\u{127D}",
            "\u{12A4}\u{1355}\u{122A}\u{120D}",
            "\u{121C}\u{12ED}",
            "\u{1301}\u{1295}",
            "\u{1301}\u{120B}\u{12ED}",
            "\u{12A6}\u{1308}\u{1235}\u{1275}",
            "\u{1234}\u{1355}\u{1274}\u{121D}\u{1260}\u{122D}",
            "\u{12A6}\u{12AD}\u{1276}\u{1260}\u{122D}",
            "\u{1296}\u{126C}\u{121D}\u{1260}\u{122D}",
            "\u{12F2}\u{1234}\u{121D}\u{1260}\u{122D}",
        ],
        // Short name
        "short" => [
            "\u{1303}\u{1295}\u{12E9}",
            "\u{134C}\u{1265}\u{1229}",
            "\u{121B}\u{122D}\u{127D}",
            "\u{12A4}\u{1355}\u{122A}",
            "\u{121C}\u{12ED}",
            "\u{1301}\u{1295}",
            "\u{1301}\u{120B}\u{12ED}",
            "\u{12A6}\u{1308}\u{1235}",
            "\u{1234}\u{1355}\u{1274}",
            "\u{12A6}\u{12AD}\u{1276}",
            "\u{1296}\u{126C}\u{121D}",
            "\u{12F2}\u{1234}\u{121D}",
        ],
    ];

}
