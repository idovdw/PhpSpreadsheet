<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_my_mm extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0455;

    /**
     * @var string The locale tag
     */
    protected $tag = "my-mm";

    /**
     * @var string The currency code "K"
     */
    protected $currencyCode = "K";

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
            "\u{1010}\u{1014}\u{1004}\u{103A}\u{1039}\u{101C}\u{102C}",
            "\u{1021}\u{1004}\u{103A}\u{1039}\u{1002}\u{102B}",
            "\u{1017}\u{102F}\u{1012}\u{1039}\u{1013}\u{101F}\u{1030}\u{1038}",
            "\u{1000}\u{103C}\u{102C}\u{101E}\u{1015}\u{1010}\u{1031}\u{1038}",
            "\u{101E}\u{1031}\u{102C}\u{1000}\u{103C}\u{102C}",
            "\u{1005}\u{1014}\u{1031}",
            "\u{1010}\u{1014}\u{1004}\u{103A}\u{1039}\u{1002}\u{1014}\u{103D}\u{1031}",
        ],
        // Short name
        "short" => [
            "\u{1010}\u{1014}\u{1004}\u{103A}\u{1039}\u{101C}\u{102C}",
            "\u{1021}\u{1004}\u{103A}\u{1039}\u{1002}\u{102B}",
            "\u{1017}\u{102F}\u{1012}\u{1039}\u{1013}\u{101F}\u{1030}\u{1038}",
            "\u{1000}\u{103C}\u{102C}\u{101E}\u{1015}\u{1010}\u{1031}\u{1038}",
            "\u{101E}\u{1031}\u{102C}\u{1000}\u{103C}\u{102C}",
            "\u{1005}\u{1014}\u{1031}",
            "\u{1010}\u{1014}\u{1004}\u{103A}\u{1039}\u{1002}\u{1014}\u{103D}\u{1031}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{1007}\u{1014}\u{103A}\u{1014}\u{101D}\u{102B}\u{101B}\u{102E}",
            "\u{1016}\u{1031}\u{1016}\u{1031}\u{102C}\u{103A}\u{101D}\u{102B}\u{101B}\u{102E}",
            "\u{1019}\u{1010}\u{103A}",
            "\u{1027}\u{1015}\u{103C}\u{102E}",
            "\u{1019}\u{1031}",
            "\u{1007}\u{103D}\u{1014}\u{103A}",
            "\u{1007}\u{1030}\u{101C}\u{102D}\u{102F}\u{1004}\u{103A}",
            "\u{1029}\u{1002}\u{102F}\u{1010}\u{103A}",
            "\u{1005}\u{1000}\u{103A}\u{1010}\u{1004}\u{103A}\u{1018}\u{102C}",
            "\u{1021}\u{1031}\u{102C}\u{1000}\u{103A}\u{1010}\u{102D}\u{102F}\u{1018}\u{102C}",
            "\u{1014}\u{102D}\u{102F}\u{101D}\u{1004}\u{103A}\u{1018}\u{102C}",
            "\u{1012}\u{102E}\u{1007}\u{1004}\u{103A}\u{1018}\u{102C}",
        ],
        // Short name
        "short" => [
            "\u{1007}\u{1014}\u{103A}",
            "\u{1016}\u{1031}",
            "\u{1019}\u{1010}\u{103A}",
            "\u{1027}",
            "\u{1019}\u{1031}",
            "\u{1007}\u{103D}\u{1014}\u{103A}",
            "\u{1007}\u{1030}",
            "\u{1029}",
            "\u{1005}\u{1000}\u{103A}",
            "\u{1021}\u{1031}\u{102C}\u{1000}\u{103A}",
            "\u{1014}\u{102D}\u{102F}",
            "\u{1012}\u{102E}",
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
