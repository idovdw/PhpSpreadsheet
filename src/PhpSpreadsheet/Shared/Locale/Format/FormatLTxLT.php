<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Lietuvių / Lithuanian (Lithuania).
 *
 * Do not alter this file; it is generated content.
 */
class FormatLTxLT extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0427;

    /**
     * @var string The locale tag
     */
    protected $tag = 'lt-lt';

    /**
     * @var string The currency code "€"
     */
    protected $strCurrencyCode = "\u{20AC}";

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
    protected $strDateSeparator = '-';

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
            'pirmadienis',
            'antradienis',
            "tre\u{10D}iadienis",
            'ketvirtadienis',
            'penktadienis',
            "\u{161}e\u{161}tadienis",
            'sekmadienis',
        ],
        // Short name
        'short' => [
            'pr',
            'an',
            'tr',
            'kt',
            'pn',
            "\u{161}t",
            'sk',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'sausis',
            'vasaris',
            'kovas',
            'balandis',
            "gegu\u{17E}\u{117}",
            "bir\u{17E}elis",
            'liepa',
            "rugpj\u{16B}tis",
            "rugs\u{117}jis",
            'spalis',
            'lapkritis',
            'gruodis',
        ],
        // Short name
        'short' => [
            'saus.',
            'vas.',
            'kov.',
            'bal.',
            'geg.',
            "bir\u{17E}.",
            'liep.',
            'rugp.',
            'rugs.',
            'spal.',
            'lapkr.',
            'gruod.',
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            'pirmadienis',
            'antradienis',
            "tre\u{10D}iadienis",
            'ketvirtadienis',
            'penktadienis',
            "\u{161}e\u{161}tadienis",
            'sekmadienis',
        ],
        // Short name
        'short' => [
            'pr',
            'an',
            'tr',
            'kt',
            'pn',
            "\u{161}t",
            'sk',
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            'sausis',
            'vasaris',
            'kovas',
            'balandis',
            "gegu\u{17E}\u{117}",
            "bir\u{17E}elis",
            'liepa',
            "rugpj\u{16B}tis",
            "rugs\u{117}jis",
            'spalis',
            'lapkritis',
            'gruodis',
        ],
        // Short name
        'short' => [
            'saus',
            'vas',
            'kov',
            'bal',
            'geg',
            "bir\u{17E}",
            'liep',
            'rugp',
            'rugs',
            'spal',
            'lapkr',
            'gruod',
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
        'm/d/yyyy' => 'yyyy/mm/dd',
        'd-mmm-yy' => 'dd/mmm/yy',
        'd-mmm' => 'dd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'yyyy/mm/dd hh:mm',
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
        '\$ #,##0.00' => '$,#,##0.00',
        '\$ #,##0.00;[Red]\$ #,##0.00' => '$,#,##0.00;[Red]$,#,##0.00',
        '\$ #,##0.00;\$ -#,##0.00' => '$,#,##0.00;$ -#,##0.00',
        '\$ #,##0.00;[Red]\$ -#,##0.00' => '$,#,##0.00;[Red]$ -#,##0.00',
        '_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ ' => '_ $ *,#,##0_ ;_ $ * -#,##0_ ;_ $ * \"-\"_ ;_ @_ ',
        '_-[\$£-809]* #,##0_-;-[\$£-809]* #,##0_-;_-[\$£-809]* \"-\"_-;_-@_-' => '_-[\$£-809]*,#,##0_-;-[\$£-809]*,#,##0_-;_-[\$£-809]* \"-\"_-;_-@_-',
        '_ [\$XBC] * #,##0.0_ ;_ [\$XBC] * -#,##0.0_ ;_ [\$XBC] * \"-\"?_ ;_ @_ ' => '_ [\$XBC] *,#,##0.0_ ;_ [\$XBC] * -#,##0.0_ ;_ [\$XBC] * \"-\"?_ ;_ @_ ',
        '_ [\$XB5] * #,##0.0_ ;_ [\$XB5] * -#,##0.0_ ;_ [\$XB5] * \"-\"?_ ;_ @_ ' => '_ [\$XB5] *,#,##0.0_ ;_ [\$XB5] * -#,##0.0_ ;_ [\$XB5] * \"-\"?_ ;_ @_ ',
        '_ \$ * #,##0.0_ ;_ \$ * -#,##0.0_ ;_ \$ * \"-\"?_ ;_ @_ ' => '_ $ *,#,##0.0_ ;_ $ * -#,##0.0_ ;_ $ * \"-\"?_ ;_ @_ ',
        '_ [\$XCD] * #,##0.0_ ;_ [\$XCD] * -#,##0.0_ ;_ [\$XCD] * \"-\"?_ ;_ @_ ' => '_ [\$XCD] *,#,##0.0_ ;_ [\$XCD] * -#,##0.0_ ;_ [\$XCD] * \"-\"?_ ;_ @_ ',
        '_-[\$Rp-3809]* #,##0.0_-;-[\$Rp-3809]* #,##0.0_-;_-[\$Rp-3809]* \"-\"?_-;_-@_-' => '_-[\$Rp-3809]*,#,##0.0_-;-[\$Rp-3809]*,#,##0.0_-;_-[\$Rp-3809]* \"-\"?_-;_-@_-',
        '_ [\$WST] * #,##0.0_ ;_ [\$WST] * -#,##0.0_ ;_ [\$WST] * \"-\"?_ ;_ @_ ' => '_ [\$WST] *,#,##0.0_ ;_ [\$WST] * -#,##0.0_ ;_ [\$WST] * \"-\"?_ ;_ @_ ',
        '_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ ' => '_ $ *,#,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * \"-\"??_ ;_ @_ ',
        "_ [\$\u{20B9}-447]* #,##0.00_ ;_ [\$\u{20B9}-447]* -#,##0.00_ ;_ [\$\u{20B9}-447]* \"-\"??_ ;_ @_ " => "_ [\$\u{20B9}-447]*,#,##0.00_ ;_ [\$\u{20B9}-447]* -#,##0.00_ ;_ [\$\u{20B9}-447]* \"-\"??_ ;_ @_ ",
        "_-* #,##0.0 [\$\u{631}.\u{639}.\u{200F}-2001]_-;-* #,##0.0 [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-* \"-\"? [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-@_-" => "_-*,#,##0.0\\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;-*,#,##0.0\\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-* \"-\"?\\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-@_-",
        '_ [\$XAF] * #,##0.0_ ;_ [\$XAF] * -#,##0.0_ ;_ [\$XAF] * \"-\"?_ ;_ @_ ' => '_ [\$XAF] *,#,##0.0_ ;_ [\$XAF] * -#,##0.0_ ;_ [\$XAF] * \"-\"?_ ;_ @_ ',
        '_ \$ * #,##0.000_ ;_ \$ * -#,##0.000_ ;_ \$ * \"-\"???_ ;_ @_ ' => '_ $ *,#,##0.000_ ;_ $ * -#,##0.000_ ;_ $ * \"-\"???_ ;_ @_ ',
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
