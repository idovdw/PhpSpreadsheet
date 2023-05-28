<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for кыргызча / Kyrgyz (Kyrgyzstan).
 *
 * Do not alter this file; it is generated content.
 */
class FormatKYxKG extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0440;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ky-kg';

    /**
     * @var string The currency code "сом"
     */
    protected $strCurrencyCode = "\u{441}\u{43E}\u{43C}";

    /**
     * @var string The decimal separator ","
     */
    protected $strDecimalSeparator = ',';

    /**
     * @var string The thousands separator " "
     */
    protected $strThousandsSeparator = ' ';

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = '/';

    /**
     * @var string The time separator
     */
    protected $strTimeSeparator = ':';

    /**
     * @var string[] The numerals representation (0 up to 9)
     */
    protected $aNumerals = [
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        // Full name
        'full' => [
            "\u{434}\u{4AF}\u{439}\u{448}\u{4E9}\u{43C}\u{431}\u{4AF}",
            "\u{448}\u{435}\u{439}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{448}\u{430}\u{440}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{431}\u{435}\u{439}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{436}\u{443}\u{43C}\u{430}",
            "\u{438}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{436}\u{435}\u{43A}\u{448}\u{435}\u{43C}\u{431}\u{438}",
        ],
        // Short name
        'short' => [
            "\u{434}\u{4AF}\u{439}.",
            "\u{448}\u{435}\u{439}\u{448}.",
            "\u{448}\u{430}\u{440}\u{448}.",
            "\u{431}\u{435}\u{439}\u{448}.",
            "\u{436}\u{443}\u{43C}\u{430}",
            "\u{438}\u{448}\u{43C}.",
            "\u{436}\u{435}\u{43A}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{42F}\u{43D}\u{432}\u{430}\u{440}\u{44C}",
            "\u{424}\u{435}\u{432}\u{440}\u{430}\u{43B}\u{44C}",
            "\u{41C}\u{430}\u{440}\u{442}",
            "\u{410}\u{43F}\u{440}\u{435}\u{43B}\u{44C}",
            "\u{41C}\u{430}\u{439}",
            "\u{418}\u{44E}\u{43D}\u{44C}",
            "\u{418}\u{44E}\u{43B}\u{44C}",
            "\u{410}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{421}\u{435}\u{43D}\u{442}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{41E}\u{43A}\u{442}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{41D}\u{43E}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{414}\u{435}\u{43A}\u{430}\u{431}\u{440}\u{44C}",
        ],
        // Short name
        'short' => [
            "\u{42F}\u{43D}\u{432}",
            "\u{424}\u{435}\u{432}",
            "\u{41C}\u{430}\u{440}",
            "\u{410}\u{43F}\u{440}",
            "\u{41C}\u{430}\u{439}",
            "\u{418}\u{44E}\u{43D}",
            "\u{418}\u{44E}\u{43B}",
            "\u{410}\u{432}\u{433}",
            "\u{421}\u{435}\u{43D}",
            "\u{41E}\u{43A}\u{442}",
            "\u{41D}\u{43E}\u{44F}",
            "\u{414}\u{435}\u{43A}",
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            "\u{434}\u{4AF}\u{439}\u{448}\u{4E9}\u{43C}\u{431}\u{4AF}",
            "\u{448}\u{435}\u{439}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{448}\u{430}\u{440}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{431}\u{435}\u{439}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{436}\u{443}\u{43C}\u{430}",
            "\u{438}\u{448}\u{435}\u{43C}\u{431}\u{438}",
            "\u{436}\u{435}\u{43A}\u{448}\u{435}\u{43C}\u{431}\u{438}",
        ],
        // Short name
        'short' => [
            "\u{434}\u{4AF}\u{439}",
            "\u{448}\u{435}\u{439}\u{448}",
            "\u{448}\u{430}\u{440}\u{448}",
            "\u{431}\u{435}\u{439}\u{448}",
            "\u{436}\u{443}\u{43C}\u{430}",
            "\u{438}\u{448}\u{43C}",
            "\u{436}\u{435}\u{43A}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            "\u{42F}\u{43D}\u{432}\u{430}\u{440}\u{44C}",
            "\u{424}\u{435}\u{432}\u{440}\u{430}\u{43B}\u{44C}",
            "\u{41C}\u{430}\u{440}\u{442}",
            "\u{410}\u{43F}\u{440}\u{435}\u{43B}\u{44C}",
            "\u{41C}\u{430}\u{439}",
            "\u{418}\u{44E}\u{43D}\u{44C}",
            "\u{418}\u{44E}\u{43B}\u{44C}",
            "\u{410}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{421}\u{435}\u{43D}\u{442}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{41E}\u{43A}\u{442}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{41D}\u{43E}\u{44F}\u{431}\u{440}\u{44C}",
            "\u{414}\u{435}\u{43A}\u{430}\u{431}\u{440}\u{44C}",
        ],
        // Short name
        'short' => [
            "\u{42F}\u{43D}\u{432}",
            "\u{424}\u{435}\u{432}",
            "\u{41C}\u{430}\u{440}",
            "\u{410}\u{43F}\u{440}",
            "\u{41C}\u{430}\u{439}",
            "\u{418}\u{44E}\u{43D}",
            "\u{418}\u{44E}\u{43B}",
            "\u{410}\u{432}\u{433}",
            "\u{421}\u{435}\u{43D}",
            "\u{41E}\u{43A}\u{442}",
            "\u{41D}\u{43E}\u{44F}",
            "\u{414}\u{435}\u{43A}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        '\"\$\" #,##0;\"\$\" -#,##0' => '\"\$\",#,##0;\"\$\" -#,##0',
        '\"\$\" #,##0;[Red]\"\$\" -#,##0' => '\"\$\",#,##0;[Red]\"\$\" -#,##0',
        '\"\$\" #,##0.00;\"\$\" -#,##0.00' => '\"\$\",#,##0.00;\"\$\" -#,##0.00',
        '\"\$\" #,##0.00;[Red]\"\$\" -#,##0.00' => '\"\$\",#,##0.00;[Red]\"\$\" -#,##0.00',
        '# ?/?' => '#\" \"?/?',
        '# ??/??' => '#\" \"??/??',
        'm/d/yyyy' => 'd/m/yyyy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'd/m/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_ * #,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ' => '_ *,#,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ',
        '_ \"\$\" * #,##0_ ;_ \"\$\" * -#,##0_ ;_ \"\$\" * \"-\"_ ;_ @_ ' => '_ \"\$\" *,#,##0_ ;_ \"\$\" * -#,##0_ ;_ \"\$\" * \"-\"_ ;_ @_ ',
        '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ' => '_ *,#,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ',
        '_ \"\$\" * #,##0.00_ ;_ \"\$\" * -#,##0.00_ ;_ \"\$\" * \"-\"??_ ;_ @_ ' => '_ \"\$\" *,#,##0.00_ ;_ \"\$\" * -#,##0.00_ ;_ \"\$\" * \"-\"??_ ;_ @_ ',
        '0.00_ ;-0.00 ' => '0.00_ ;-0.00\\ ',
        '#,##0.00_ ;-#,##0.00 ' => '#,##0.00_ ;-#,##0.00\\ ',
        '0.00_ ;[Red]-0.00 ' => '0.00_ ;[Red]-0.00\\ ',
        '#,##0.00_ ;[Red]-#,##0.00 ' => '#,##0.00_ ;[Red]-#,##0.00\\ ',
        "\"\u{20AC}\" #,##0.00" => "\"\u{20AC}\",#,##0.00",
        "\"\u{20AC}\" #,##0.00;[Red]\"\u{20AC}\" #,##0.00" => "\"\u{20AC}\",#,##0.00;[Red]\"\u{20AC}\",#,##0.00",
        "\"\u{20AC}\" #,##0.00;\"\u{20AC}\" -#,##0.00" => "\"\u{20AC}\",#,##0.00;\"\u{20AC}\" -#,##0.00",
        "\"\u{20AC}\" #,##0.00;[Red]\"\u{20AC}\" -#,##0.00" => "\"\u{20AC}\",#,##0.00;[Red]\"\u{20AC}\" -#,##0.00",
        "_ \"\u{20AC}\" * #,##0_ ;_ \"\u{20AC}\" * -#,##0_ ;_ \"\u{20AC}\" * \"-\"_ ;_ @_ " => "_ \"\u{20AC}\" *,#,##0_ ;_ \"\u{20AC}\" * -#,##0_ ;_ \"\u{20AC}\" * \"-\"_ ;_ @_ ",
        '_-[\$£-809]* #,##0_-;-[\$£-809]* #,##0_-;_-[\$£-809]* \"-\"_-;_-@_-' => '_-[\$£-809]*,#,##0_-;-[\$£-809]*,#,##0_-;_-[\$£-809]* \"-\"_-;_-@_-',
        '_ [\$XBC] * #,##0.0_ ;_ [\$XBC] * -#,##0.0_ ;_ [\$XBC] * \"-\"?_ ;_ @_ ' => '_ [\$XBC] *,#,##0.0_ ;_ [\$XBC] * -#,##0.0_ ;_ [\$XBC] * \"-\"?_ ;_ @_ ',
        '_ [\$XB5] * #,##0.0_ ;_ [\$XB5] * -#,##0.0_ ;_ [\$XB5] * \"-\"?_ ;_ @_ ' => '_ [\$XB5] *,#,##0.0_ ;_ [\$XB5] * -#,##0.0_ ;_ [\$XB5] * \"-\"?_ ;_ @_ ',
        "_ \"\u{20AC}\" * #,##0.0_ ;_ \"\u{20AC}\" * -#,##0.0_ ;_ \"\u{20AC}\" * \"-\"?_ ;_ @_ " => "_ \"\u{20AC}\" *,#,##0.0_ ;_ \"\u{20AC}\" * -#,##0.0_ ;_ \"\u{20AC}\" * \"-\"?_ ;_ @_ ",
        '_ [\$XCD] * #,##0.0_ ;_ [\$XCD] * -#,##0.0_ ;_ [\$XCD] * \"-\"?_ ;_ @_ ' => '_ [\$XCD] *,#,##0.0_ ;_ [\$XCD] * -#,##0.0_ ;_ [\$XCD] * \"-\"?_ ;_ @_ ',
        '_-[\$Rp-3809]* #,##0.0_-;-[\$Rp-3809]* #,##0.0_-;_-[\$Rp-3809]* \"-\"?_-;_-@_-' => '_-[\$Rp-3809]*,#,##0.0_-;-[\$Rp-3809]*,#,##0.0_-;_-[\$Rp-3809]* \"-\"?_-;_-@_-',
        '_ [\$WST] * #,##0.0_ ;_ [\$WST] * -#,##0.0_ ;_ [\$WST] * \"-\"?_ ;_ @_ ' => '_ [\$WST] *,#,##0.0_ ;_ [\$WST] * -#,##0.0_ ;_ [\$WST] * \"-\"?_ ;_ @_ ',
        "_ \"\u{20AC}\" * #,##0.00_ ;_ \"\u{20AC}\" * -#,##0.00_ ;_ \"\u{20AC}\" * \"-\"??_ ;_ @_ " => "_ \"\u{20AC}\" *,#,##0.00_ ;_ \"\u{20AC}\" * -#,##0.00_ ;_ \"\u{20AC}\" * \"-\"??_ ;_ @_ ",
        "_ [\$\u{20B9}-447]* #,##0.00_ ;_ [\$\u{20B9}-447]* -#,##0.00_ ;_ [\$\u{20B9}-447]* \"-\"??_ ;_ @_ " => "_ [\$\u{20B9}-447]*,#,##0.00_ ;_ [\$\u{20B9}-447]* -#,##0.00_ ;_ [\$\u{20B9}-447]* \"-\"??_ ;_ @_ ",
        "_-* #,##0.0 [\$\u{631}.\u{639}.\u{200F}-2001]_-;-* #,##0.0 [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-* \"-\"? [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-@_-" => "_-*,#,##0.0\\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;-*,#,##0.0\\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-* \"-\"?\\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-@_-",
        '_ [\$XAF] * #,##0.0_ ;_ [\$XAF] * -#,##0.0_ ;_ [\$XAF] * \"-\"?_ ;_ @_ ' => '_ [\$XAF] *,#,##0.0_ ;_ [\$XAF] * -#,##0.0_ ;_ [\$XAF] * \"-\"?_ ;_ @_ ',
        "_ \"\u{20AC}\" * #,##0.000_ ;_ \"\u{20AC}\" * -#,##0.000_ ;_ \"\u{20AC}\" * \"-\"???_ ;_ @_ " => "_ \"\u{20AC}\" *,#,##0.000_ ;_ \"\u{20AC}\" * -#,##0.000_ ;_ \"\u{20AC}\" * \"-\"???_ ;_ @_ ",
        '_-[\$\$-409]* #,##0.000_ ;_-[\$\$-409]* -#,##0.000 ;_-[\$\$-409]* \"-\"???_ ;_-@_ ' => '_-[\$\$-409]*,#,##0.000_ ;_-[\$\$-409]* -#,##0.000\\ ;_-[\$\$-409]* \"-\"???_ ;_-@_ ',
        '_ [\$¥-804]* #,##0.0_ ;_ [\$¥-804]* -#,##0.0_ ;_ [\$¥-804]* \"-\"?_ ;_ @_ ' => '_ [\$¥-804]*,#,##0.0_ ;_ [\$¥-804]* -#,##0.0_ ;_ [\$¥-804]* \"-\"?_ ;_ @_ ',
        '_ [\$UAH] * #,##0.0_ ;_ [\$UAH] * -#,##0.0_ ;_ [\$UAH] * \"-\"?_ ;_ @_ ' => '_ [\$UAH] *,#,##0.0_ ;_ [\$UAH] * -#,##0.0_ ;_ [\$UAH] * \"-\"?_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => '"{#######################}"',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
        '# ?/4' => '#\,?/4',
        '# ??/100' => '#\,??/100',
        '# ?/8' => '#\,?/8',
        '# ???/???' => '#\,???/???',
        '# ??/16' => '#\,??/16',
        '# ?/2' => '#\,?/2',
        '# ?/10' => '#\,?/10',
    ];
}
