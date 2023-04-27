<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_quc_latn_gt extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0486;

    /**
     * @var string The locale tag
     */
    protected $tag = "quc-latn-gt";

    /**
     * @var string The currency code "GTQ"
     */
    protected $currencyCode = "GTQ";

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
            "kaq'ij",
            "oxq'ij",
            "kajq'ij",
            "joq'ij",
            "waqq'ij",
            "wuqq'ij",
            "juq'ij",
        ],
        // Short name
        "short" => [
            "kaq'",
            "oxq'",
            "kajq'",
            "joq'",
            "waqq'",
            "wuqq'",
            "juq'",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "nab'e ik'",
            "ukab' ik'",
            "urox ik'",
            "ukaj ik'",
            "uro ik'",
            "uwaq ik'",
            "uwuq ik'",
            "uwajxaq ik'",
            "ub'elej ik'",
            "ulaj ik'",
            "ujulaj ik'",
            "ukab'laj ik'",
        ],
        // Short name
        "short" => [
            "nab'e",
            "ukab'",
            "urox",
            "ukaj",
            "uro",
            "uwaq",
            "uwuq",
            "uwajxaq",
            "ub'elej",
            "ulaj",
            "ujulaj",
            "ukab'laj",
        ],
    ];

}
