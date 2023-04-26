<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_ps_af extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0463;

    /**
     * @var string The locale tag
     */
    protected $tag = "ps-af";

    /**
     * @var string The currency code "؋"
     */
    protected $currencyCode = "\u{60B}";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = "\u{66B}";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = "\u{66C}";

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
            "\u{62F}\u{648}\u{646}\u{6CD}",
            "\u{62F}\u{631}\u{6D0}\u{646}\u{6CD}",
            "\u{685}\u{644}\u{631}\u{646}\u{6CD}",
            "\u{67E}\u{64A}\u{646}\u{681}\u{646}\u{6CD}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{627}\u{648}\u{646}\u{6CD}",
            "\u{64A}\u{648}\u{646}\u{6CD}",
        ],
        // Short name
        "short" => [
            "\u{62F}\u{648}\u{646}\u{6CD}",
            "\u{62F}\u{631}\u{6D0}\u{646}\u{6CD}",
            "\u{685}\u{644}\u{631}\u{646}\u{6CD}",
            "\u{67E}\u{64A}\u{646}\u{681}\u{646}\u{6CD}",
            "\u{62C}\u{645}\u{639}\u{647}",
            "\u{627}\u{648}\u{646}\u{6CD}",
            "\u{64A}\u{648}\u{646}\u{6CD}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{633}\u{644}\u{648}\u{627}\u{63A}\u{647}",
            "\u{643}\u{628}",
            "\u{648}\u{631}\u{649}",
            "\u{63A}\u{648}\u{64A}\u{649}",
            "\u{63A}\u{628}\u{631}\u{6AB}\u{648}\u{644}\u{649}",
            "\u{686}\u{646}\u{6AB}\u{627} \u{69A}\u{632}\u{645}\u{631}\u{649}",
            "\u{632}\u{645}\u{631}\u{649}",
            "\u{648}\u{696}\u{649}",
            "\u{62A}\u{644}\u{647}",
            "\u{644}\u{693}\u{645}",
            "\u{644}\u{646}\u{688} \u{6CD}",
            "\u{645}\u{631}\u{63A}\u{648}\u{645}\u{649}",
        ],
        // Short name
        "short" => [
            "\u{633}\u{644}\u{648}\u{627}\u{63A}\u{647}",
            "\u{643}\u{628}",
            "\u{648}\u{631}\u{649}",
            "\u{63A}\u{648}\u{64A}\u{649}",
            "\u{63A}\u{628}\u{631}\u{6AB}\u{648}\u{644}\u{649}",
            "\u{686}\u{646}\u{6AB}\u{627} \u{69A}",
            "\u{632}\u{645}\u{631}\u{649}",
            "\u{648}\u{696}\u{649}",
            "\u{62A}\u{644}\u{647}",
            "\u{644}\u{693}\u{645}",
            "\u{644}\u{646}\u{688} \u{6CD}",
            "\u{645}\u{631}\u{63A}\u{648}\u{645}\u{649}",
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
