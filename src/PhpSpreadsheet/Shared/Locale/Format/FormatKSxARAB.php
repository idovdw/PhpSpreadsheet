<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for کٲشُر / Kashmiri (Perso-Arabic).
 *
 * Do not alter this file; it is generated content.
 */
class FormatKSxARAB extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0460;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ks-arab';

    /**
     * @var string The currency code "¤"
     */
    protected $strCurrencyCode = '¤';

    /**
     * @var string The decimal separator "٫"
     */
    protected $strDecimalSeparator = "\u{66B}";

    /**
     * @var string The thousands separator "٬"
     */
    protected $strThousandsSeparator = "\u{66C}";

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = '/';

    /**
     * @var string The time separator
     */
    protected $strTimeSeparator = ': a';

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
            "\u{698}\u{654}\u{646}\u{62F}\u{631}\u{655}\u{631}\u{648}\u{627}\u{631}",
            "\u{628}\u{6C6}\u{645}\u{648}\u{627}\u{631}",
            "\u{628}\u{648}\u{62F}\u{648}\u{627}\u{631}",
            "\u{628}\u{631}\u{620}\u{633}\u{648}\u{627}\u{631}",
            "\u{62C}\u{64F}\u{645}\u{6C1}",
            "\u{628}\u{679}\u{648}\u{627}\u{631}",
            "\u{627}\u{64E}\u{62A}\u{6BE}\u{648}\u{627}\u{631}",
        ],
        // Short name
        'short' => [
            "\u{698}\u{654}\u{646}\u{62F}\u{655}\u{631}\u{648}\u{627}\u{631}",
            "\u{628}\u{6C6}\u{645}\u{648}\u{627}\u{631}",
            "\u{628}\u{648}\u{62F}\u{648}\u{627}\u{631}",
            "\u{628}\u{631}\u{620}\u{633}\u{648}\u{627}\u{631}",
            "\u{62C}\u{64F}\u{645}\u{6C1}",
            "\u{628}\u{679}\u{648}\u{627}\u{631}",
            "\u{622}\u{62A}\u{6BE}\u{648}\u{627}\u{631}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{62C}\u{646}\u{624}\u{631}\u{6CC}",
            "\u{641}\u{631}\u{624}\u{631}\u{6CC}",
            "\u{645}\u{627}\u{631}\u{655}\u{686}",
            "\u{627}\u{67E}\u{631}\u{6CC}\u{644}",
            "\u{645}\u{6CC}\u{654}",
            "\u{62C}\u{648}\u{657}\u{646}",
            "\u{62C}\u{648}\u{657}\u{644}\u{627}\u{6CC}\u{6CC}",
            "\u{627}\u{6AF}\u{633}\u{62A}",
            "\u{633}\u{62A}\u{645}\u{628}\u{631}",
            "\u{627}\u{6A9}\u{62A}\u{648}\u{657}\u{628}\u{631}",
            "\u{646}\u{648}\u{645}\u{628}\u{631}",
            "\u{62F}\u{633}\u{645}\u{628}\u{631}",
        ],
        // Short name
        'short' => [
            "\u{62C}\u{646}\u{624}\u{631}\u{6CC}",
            "\u{641}\u{631}\u{624}\u{631}\u{6CC}",
            "\u{645}\u{627}\u{631}\u{655}\u{686}",
            "\u{627}\u{67E}\u{631}\u{6CC}\u{644}",
            "\u{645}\u{6CC}\u{654}",
            "\u{62C}\u{648}\u{657}\u{646}",
            "\u{62C}\u{648}\u{657}\u{644}\u{627}\u{6CC}\u{6CC}",
            "\u{627}\u{6AF}\u{633}\u{62A}",
            "\u{633}\u{62A}\u{645}\u{628}\u{631}",
            "\u{627}\u{6A9}\u{62A}\u{648}\u{657}\u{628}\u{631}",
            "\u{646}\u{648}\u{645}\u{628}\u{631}",
            "\u{62F}\u{633}\u{645}\u{628}\u{631}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        '\$ #,##0;\$ -#,##0' => '$ #,##0;$ -#,##0',
        '\$ #,##0;[Red]\$ -#,##0' => '$ #,##0;[Red]$ -#,##0',
        '\$ #,##0.00;\$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '\$ #,##0.00;[Red]\$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * \"-\"_ ;_ @_ ',
        '_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"mmmm d"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
