<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for ꆈꌠꉙ / Sichuan Yi (People\'s Republic of China).
 *
 * Do not alter this file; it is generated content.
 */
class FormatIIxCN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0478;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ii-cn';

    /**
     * @var string The currency code "¥"
     */
    protected $strCurrencyCode = '¥';

    /**
     * @var string The decimal separator "."
     */
    protected $strDecimalSeparator = '.';

    /**
     * @var string The thousands separator ","
     */
    protected $strThousandsSeparator = ',';

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
            "\u{A18F}\u{A282}\u{A494}",
            "\u{A18F}\u{A282}\u{A44D}",
            "\u{A18F}\u{A282}\u{A315}",
            "\u{A18F}\u{A282}\u{A1D6}",
            "\u{A18F}\u{A282}\u{A26C}",
            "\u{A18F}\u{A282}\u{A0D8}",
            "\u{A46D}\u{A18F}\u{A44D}",
        ],
        // Short name
        'short' => [
            "\u{A18F}\u{A494}",
            "\u{A18F}\u{A44D}",
            "\u{A18F}\u{A315}",
            "\u{A18F}\u{A1D6}",
            "\u{A18F}\u{A26C}",
            "\u{A18F}\u{A0D8}",
            "\u{A46D}\u{A18F}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{A2CD}\u{A1AA}",
            "\u{A44D}\u{A1AA}",
            "\u{A315}\u{A1AA}",
            "\u{A1D6}\u{A1AA}",
            "\u{A26C}\u{A1AA}",
            "\u{A0D8}\u{A1AA}",
            "\u{A3C3}\u{A1AA}",
            "\u{A246}\u{A1AA}",
            "\u{A22C}\u{A1AA}",
            "\u{A2B0}\u{A1AA}",
            "\u{A2AF}\u{A2AA}\u{A1AA}",
            "\u{A2B0}\u{A44B}\u{A1AA}",
        ],
        // Short name
        'short' => [
            "\u{A2CD}\u{A1AA}",
            "\u{A44D}\u{A1AA}",
            "\u{A315}\u{A1AA}",
            "\u{A1D6}\u{A1AA}",
            "\u{A26C}\u{A1AA}",
            "\u{A0D8}\u{A1AA}",
            "\u{A3C3}\u{A1AA}",
            "\u{A246}\u{A1AA}",
            "\u{A22C}\u{A1AA}",
            "\u{A2B0}\u{A1AA}",
            "\u{A2AF}\u{A2AA}\u{A1AA}",
            "\u{A2B0}\u{A44B}\u{A1AA}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'yyyy/m/d',
        'm/d/yyyy h:mm' => 'yyyy/m/d h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_(* #,##0_);_(* (#,##0);_(* \"-\"_);_(@_)' => '_ * #,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ',
        '_(* #,##0.00_);_(* (#,##0.00);_(* \"-\"??_);_(@_)' => '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => "yyyy\"{\u{5E74}}\"mmmd\"{\u{65E5}}\"",
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
