<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for বাংলা / Bangla (Bangladesh).
 *
 * Do not alter this file; it is generated content.
 */
class FormatBNxBD extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0845;

    /**
     * @var string The locale tag
     */
    protected $tag = 'bn-bd';

    /**
     * @var string The currency code "৳"
     */
    protected $strCurrencyCode = "\u{9F3}";

    /**
     * @var string The decimal separator "."
     */
    protected $strDecimalSeparator = '.';

    /**
     * @var string The thousands separator ","
     */
    protected $strThousandsSeparator = ',';

    /**
     * @var int The thousands format pattern
     */
    protected $intThousandsFormatPattern = self::THOUSANDS_FORMAT_HECTO;

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
            "\u{9B8}\u{9CB}\u{9AE}\u{9AC}\u{9BE}\u{9B0}",
            "\u{9AE}\u{999}\u{9CD}\u{997}\u{9B2}\u{9AC}\u{9BE}\u{9B0}",
            "\u{9AC}\u{9C1}\u{9A7}\u{9AC}\u{9BE}\u{9B0}",
            "\u{9AC}\u{9C3}\u{9B9}\u{9B8}\u{9CD}\u{9AA}\u{9A4}\u{9BF}\u{9AC}\u{9BE}\u{9B0}",
            "\u{9B6}\u{9C1}\u{995}\u{9CD}\u{9B0}\u{9AC}\u{9BE}\u{9B0}",
            "\u{9B6}\u{9A8}\u{9BF}\u{9AC}\u{9BE}\u{9B0}",
            "\u{9B0}\u{9AC}\u{9BF}\u{9AC}\u{9BE}\u{9B0}",
        ],
        // Short name
        'short' => [
            "\u{9B8}\u{9CB}\u{9AE}",
            "\u{9AE}\u{999}\u{9CD}\u{997}\u{9B2}",
            "\u{9AC}\u{9C1}\u{9A7}",
            "\u{9AC}\u{9C3}\u{9B9}\u{9B8}\u{9CD}\u{9AA}\u{9A4}\u{9BF}",
            "\u{9B6}\u{9C1}\u{995}\u{9CD}\u{9B0}",
            "\u{9B6}\u{9A8}\u{9BF}",
            "\u{9B0}\u{9AC}\u{9BF}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{99C}\u{9BE}\u{9A8}\u{9C1}\u{9AF}\u{9BC}\u{9BE}\u{9B0}\u{9C0}",
            "\u{9AB}\u{9C7}\u{9AC}\u{9CD}\u{9B0}\u{9C1}\u{9AF}\u{9BC}\u{9BE}\u{9B0}\u{9C0}",
            "\u{9AE}\u{9BE}\u{9B0}\u{9CD}\u{99A}",
            "\u{98F}\u{9AA}\u{9CD}\u{9B0}\u{9BF}\u{9B2}",
            "\u{9AE}\u{9C7}",
            "\u{99C}\u{9C1}\u{9A8}",
            "\u{99C}\u{9C1}\u{9B2}\u{9BE}\u{987}",
            "\u{986}\u{997}\u{9B8}\u{9CD}\u{99F}",
            "\u{9B8}\u{9C7}\u{9AA}\u{9CD}\u{99F}\u{9C7}\u{9AE}\u{9CD}\u{9AC}\u{9B0}",
            "\u{985}\u{995}\u{9CD}\u{99F}\u{9CB}\u{9AC}\u{9B0}",
            "\u{9A8}\u{9AD}\u{9C7}\u{9AE}\u{9CD}\u{9AC}\u{9B0}",
            "\u{9A1}\u{9BF}\u{9B8}\u{9C7}\u{9AE}\u{9CD}\u{9AC}\u{9B0}",
        ],
        // Short name
        'short' => [
            "\u{99C}\u{9BE}\u{9A8}\u{9C1}\u{9AF}\u{9BC}\u{9BE}\u{9B0}\u{9C0}",
            "\u{9AB}\u{9C7}\u{9AC}\u{9CD}\u{9B0}\u{9C1}\u{9AF}\u{9BC}\u{9BE}\u{9B0}\u{9C0}",
            "\u{9AE}\u{9BE}\u{9B0}\u{9CD}\u{99A}",
            "\u{98F}\u{9AA}\u{9CD}\u{9B0}\u{9BF}\u{9B2}",
            "\u{9AE}\u{9C7}",
            "\u{99C}\u{9C1}\u{9A8}",
            "\u{99C}\u{9C1}\u{9B2}\u{9BE}\u{987}",
            "\u{986}\u{997}\u{9B8}\u{9CD}\u{99F}",
            "\u{9B8}\u{9C7}\u{9AA}\u{9CD}\u{99F}\u{9C7}\u{9AE}\u{9CD}\u{9AC}\u{9B0}",
            "\u{985}\u{995}\u{9CD}\u{99F}\u{9CB}\u{9AC}\u{9B0}",
            "\u{9A8}\u{9AD}\u{9C7}\u{9AE}\u{9CD}\u{9AC}\u{9B0}",
            "\u{9A1}\u{9BF}\u{9B8}\u{9C7}\u{9AE}\u{9CD}\u{9AC}\u{9B0}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'd/m/yyyy',
        'm/d/yyyy h:mm' => 'd/m/yyyy h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"d mmm"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
