<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for বাংলা / Bangla (India).
 *
 * Do not alter this file; it is generated content.
 */
class FormatBNxIN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0445;

    /**
     * @var string The locale tag
     */
    protected $tag = 'bn-in';

    /**
     * @var string The currency code "₹"
     */
    protected $strCurrencyCode = "\u{20B9}";

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
    protected $strDateSeparator = '-';

    /**
     * @var string The time separator
     */
    protected $strTimeSeparator = '.';

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
            "\u{9B8}\u{9CB}\u{9AE}.",
            "\u{9AE}\u{999}\u{9CD}\u{997}\u{9B2}.",
            "\u{9AC}\u{9C1}\u{9A7}.",
            "\u{9AC}\u{9C3}\u{9B9}\u{9B8}\u{9CD}\u{9AA}\u{9A4}\u{9BF}.",
            "\u{9B6}\u{9C1}\u{995}\u{9CD}\u{9B0}.",
            "\u{9B6}\u{9A8}\u{9BF}.",
            "\u{9B0}\u{9AC}\u{9BF}.",
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
            "\u{99C}\u{9BE}\u{9A8}\u{9C1}.",
            "\u{9AB}\u{9C7}\u{9AC}\u{9CD}\u{9B0}\u{9C1}.",
            "\u{9AE}\u{9BE}\u{9B0}\u{9CD}\u{99A}",
            "\u{98F}\u{9AA}\u{9CD}\u{9B0}\u{9BF}\u{9B2}",
            "\u{9AE}\u{9C7}",
            "\u{99C}\u{9C1}\u{9A8}",
            "\u{99C}\u{9C1}\u{9B2}\u{9BE}\u{987}",
            "\u{986}\u{997}.",
            "\u{9B8}\u{9C7}\u{9AA}\u{9CD}\u{99F}\u{9C7}.",
            "\u{985}\u{995}\u{9CD}\u{99F}\u{9CB}.",
            "\u{9A8}\u{9AD}\u{9C7}.",
            "\u{9A1}\u{9BF}\u{9B8}\u{9C7}.",
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
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
            "\u{9B8}\u{9CB}\u{9AE}.",
            "\u{9AE}\u{999}\u{9CD}\u{997}\u{9B2}.",
            "\u{9AC}\u{9C1}\u{9A7}.",
            "\u{9AC}\u{9C3}\u{9B9}\u{9B8}\u{9CD}\u{9AA}\u{9A4}\u{9BF}.",
            "\u{9B6}\u{9C1}\u{995}\u{9CD}\u{9B0}.",
            "\u{9B6}\u{9A8}\u{9BF}.",
            "\u{9B0}\u{9AC}\u{9BF}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
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
            "\u{99C}\u{9BE}\u{9A8}\u{9C1}",
            "\u{9AB}\u{9C7}\u{9AC}\u{9CD}\u{9B0}\u{9C1}",
            "\u{9AE}\u{9BE}\u{9B0}\u{9CD}\u{99A}",
            "\u{98F}\u{9AA}\u{9CD}\u{9B0}\u{9BF}\u{9B2}",
            "\u{9AE}\u{9C7}",
            "\u{99C}\u{9C1}\u{9A8}",
            "\u{99C}\u{9C1}\u{9B2}\u{9BE}\u{987}",
            "\u{986}\u{997}",
            "\u{9B8}\u{9C7}\u{9AA}\u{9CD}\u{99F}\u{9C7}",
            "\u{985}\u{995}\u{9CD}\u{99F}\u{9CB}",
            "\u{9A8}\u{9AD}\u{9C7}",
            "\u{9A1}\u{9BF}\u{9B8}\u{9C7}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yy',
        'd-mmm-yy' => 'dd/mmm/yy',
        'd-mmm' => 'dd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_(* #,##0_);_(* (#,##0);_(* \"-\"_);_(@_)' => '_ * #,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ',
        '_(* #,##0.00_);_(* (#,##0.00);_(* \"-\"??_);_(@_)' => '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dd mmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
