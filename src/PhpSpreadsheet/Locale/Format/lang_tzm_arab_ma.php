<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_tzm_arab_ma extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x045F;

    /**
     * @var string The locale tag
     */
    protected $tag = "tzm-arab-ma";

    /**
     * @var string The currency code "MAD"
     */
    protected $currencyCode = "MAD";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ",";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = " ";

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
            "\u{627}\u{644}\u{625}\u{62B}\u{646}\u{64A}\u{646}",
            "\u{627}\u{644}\u{62B}\u{644}\u{627}\u{62B}\u{627}\u{621}",
            "\u{627}\u{644}\u{623}\u{631}\u{628}\u{639}\u{627}\u{621}",
            "\u{627}\u{644}\u{62E}\u{645}\u{64A}\u{633}",
            "\u{627}\u{644}\u{62C}\u{645}\u{639}\u{629}",
            "\u{627}\u{644}\u{633}\u{628}\u{62A}",
            "\u{627}\u{644}\u{623}\u{62D}\u{62F}",
        ],
        // Short name
        "short" => [
            "\u{627}\u{644}\u{625}\u{62B}\u{646}\u{64A}\u{646}",
            "\u{627}\u{644}\u{62B}\u{644}\u{627}\u{62B}\u{627}\u{621}",
            "\u{627}\u{644}\u{623}\u{631}\u{628}\u{639}\u{627}\u{621}",
            "\u{627}\u{644}\u{62E}\u{645}\u{64A}\u{633}",
            "\u{627}\u{644}\u{62C}\u{645}\u{639}\u{629}",
            "\u{627}\u{644}\u{633}\u{628}\u{62A}",
            "\u{627}\u{644}\u{623}\u{62D}\u{62F}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{643}\u{627}\u{646}\u{648}\u{646} \u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{634}\u{628}\u{627}\u{637}",
            "\u{622}\u{630}\u{627}\u{631}",
            "\u{646}\u{64A}\u{633}\u{627}\u{646}",
            "\u{623}\u{64A}\u{627}\u{631}",
            "\u{62D}\u{632}\u{64A}\u{631}\u{627}\u{646}",
            "\u{62A}\u{645}\u{648}\u{632}",
            "\u{622}\u{628}",
            "\u{623}\u{64A}\u{644}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646} \u{627}\u{644}\u{623}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646} \u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{643}\u{627}\u{646}\u{648}\u{646} \u{627}\u{644}\u{623}\u{648}\u{644}",
        ],
        // Short name
        "short" => [
            "\u{643}\u{627}\u{646}\u{648}\u{646} \u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{634}\u{628}\u{627}\u{637}",
            "\u{622}\u{630}\u{627}\u{631}",
            "\u{646}\u{64A}\u{633}\u{627}\u{646}",
            "\u{623}\u{64A}\u{627}\u{631}",
            "\u{62D}\u{632}\u{64A}\u{631}\u{627}\u{646}",
            "\u{62A}\u{645}\u{648}\u{632}",
            "\u{622}\u{628}",
            "\u{623}\u{64A}\u{644}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646} \u{627}\u{644}\u{623}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646} \u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{643}\u{627}\u{646}\u{648}\u{646} \u{627}\u{644}\u{623}\u{648}\u{644}",
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
