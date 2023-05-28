<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for ಕನ್ನಡ / Kannada (India).
 *
 * Do not alter this file; it is generated content.
 */
class FormatKNxIN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x044B;

    /**
     * @var string The locale tag
     */
    protected $tag = 'kn-in';

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
            "\u{CB8}\u{CCB}\u{CAE}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAE}\u{C82}\u{C97}\u{CB3}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAC}\u{CC1}\u{CA7}\u{CB5}\u{CBE}\u{CB0}",
            "\u{C97}\u{CC1}\u{CB0}\u{CC1}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CB6}\u{CC1}\u{C95}\u{CCD}\u{CB0}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CB6}\u{CA8}\u{CBF}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAD}\u{CBE}\u{CA8}\u{CC1}\u{CB5}\u{CBE}\u{CB0}",
        ],
        // Short name
        'short' => [
            "\u{CB8}\u{CCB}\u{CAE}.",
            "\u{CAE}\u{C82}\u{C97}\u{CB3}.",
            "\u{CAC}\u{CC1}\u{CA7}.",
            "\u{C97}\u{CC1}\u{CB0}\u{CC1}.",
            "\u{CB6}\u{CC1}\u{C95}\u{CCD}\u{CB0}.",
            "\u{CB6}\u{CA8}\u{CBF}.",
            "\u{CAD}\u{CBE}\u{CA8}\u{CC1}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{C9C}\u{CA8}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAB}\u{CC6}\u{CAC}\u{CCD}\u{CB0}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAE}\u{CBE}\u{CB0}\u{CCD}\u{C9A}\u{CCD}",
            "\u{C8F}\u{C8F}\u{CAA}\u{CCD}\u{CB0}\u{CBF}\u{CB2}\u{CCD}",
            "\u{CAE}\u{CC7}",
            "\u{C9C}\u{CC2}\u{CA8}\u{CCD}",
            "\u{C9C}\u{CC1}\u{CB2}\u{CC8}",
            "\u{C86}\u{C97}\u{CB8}\u{CCD}\u{C9F}\u{CCD}",
            "\u{CB8}\u{CC6}\u{CAA}\u{CCD}\u{C9F}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{C85}\u{C95}\u{CCD}\u{C9F}\u{CCB}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA8}\u{CB5}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA1}\u{CBF}\u{CB8}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
        ],
        // Short name
        'short' => [
            "\u{C9C}\u{CA8}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAB}\u{CC6}\u{CAC}\u{CCD}\u{CB0}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAE}\u{CBE}\u{CB0}\u{CCD}\u{C9A}\u{CCD}",
            "\u{C8E}\u{CAA}\u{CCD}\u{CB0}\u{CBF}\u{CB2}\u{CCD}",
            "\u{CAE}\u{CC7}",
            "\u{C9C}\u{CC2}\u{CA8}\u{CCD}",
            "\u{C9C}\u{CC1}\u{CB2}\u{CC8}",
            "\u{C86}\u{C97}\u{CB8}\u{CCD}\u{C9F}\u{CCD}",
            "\u{CB8}\u{CC6}\u{CAA}\u{CCD}\u{C9F}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{C85}\u{C95}\u{CCD}\u{C9F}\u{CCB}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA8}\u{CB5}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA1}\u{CBF}\u{CB8}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
        ],
    ];

    /**
     * @var array[]|string Names of the days of the week, for the alternative
     * Gregorian calendar display
     */
    protected $aWeekdayNamesAL = [
        // Full name
        'full' => [
            "\u{CB8}\u{CCB}\u{CAE}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAE}\u{C82}\u{C97}\u{CB3}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAC}\u{CC1}\u{CA7}\u{CB5}\u{CBE}\u{CB0}",
            "\u{C97}\u{CC1}\u{CB0}\u{CC1}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CB6}\u{CC1}\u{C95}\u{CCD}\u{CB0}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CB6}\u{CA8}\u{CBF}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAD}\u{CBE}\u{CA8}\u{CC1}\u{CB5}\u{CBE}\u{CB0}",
        ],
        // Short name
        'short' => [
            "\u{CB8}\u{CCB}\u{CAE}.",
            "\u{CAE}\u{C82}\u{C97}\u{CB3}.",
            "\u{CAC}\u{CC1}\u{CA7}.",
            "\u{C97}\u{CC1}\u{CB0}\u{CC1}.",
            "\u{CB6}\u{CC1}\u{C95}\u{CCD}\u{CB0}.",
            "\u{CB6}\u{CA8}\u{CBF}.",
            "\u{CAD}\u{CBE}\u{CA8}\u{CC1}.",
        ],
    ];

    /**
     * @var array[]|string Names of the months of the year, for the alternative
     * Gregorian calendar display
     */
    protected $aMonthNamesAL = [
        // Full name
        'full' => [
            "\u{C9C}\u{CA8}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAB}\u{CC6}\u{CAC}\u{CCD}\u{CB0}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAE}\u{CBE}\u{CB0}\u{CCD}\u{C9A}\u{CCD}",
            "\u{C8F}\u{CAA}\u{CCD}\u{CB0}\u{CC0}\u{CB2}\u{CCD}",
            "\u{CAE}\u{CC7}",
            "\u{C9C}\u{CC2}\u{CA8}\u{CCD}",
            "\u{C9C}\u{CC1}\u{CB2}\u{CC8}",
            "\u{C86}\u{C97}\u{CB8}\u{CCD}\u{C9F}\u{CCD}",
            "\u{CB8}\u{CC6}\u{CAA}\u{CCD}\u{C9F}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{C85}\u{C95}\u{CCD}\u{C9F}\u{CCB}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA8}\u{CB5}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA1}\u{CBF}\u{CB8}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
        ],
        // Short name
        'short' => [
            "\u{C9C}\u{CA8}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAB}\u{CC6}\u{CAC}\u{CCD}\u{CB0}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAE}\u{CBE}\u{CB0}\u{CCD}\u{C9A}\u{CCD}",
            "\u{C8E}\u{CAA}\u{CCD}\u{CB0}\u{CBF}\u{CB2}\u{CCD}",
            "\u{CAE}\u{CC7}",
            "\u{C9C}\u{CC2}\u{CA8}\u{CCD}",
            "\u{C9C}\u{CC1}\u{CB2}\u{CC8}",
            "\u{C86}\u{C97}\u{CB8}\u{CCD}\u{C9F}\u{CCD}",
            "\u{CB8}\u{CC6}\u{CAA}\u{CCD}\u{C9F}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{C85}\u{C95}\u{CCD}\u{C9F}\u{CCB}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA8}\u{CB5}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA1}\u{CBF}\u{CB8}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            "\u{CB8}\u{CCB}\u{CAE}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAE}\u{C82}\u{C97}\u{CB3}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAC}\u{CC1}\u{CA7}\u{CB5}\u{CBE}\u{CB0}",
            "\u{C97}\u{CC1}\u{CB0}\u{CC1}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CB6}\u{CC1}\u{C95}\u{CCD}\u{CB0}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CB6}\u{CA8}\u{CBF}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAD}\u{CBE}\u{CA8}\u{CC1}\u{CB5}\u{CBE}\u{CB0}",
        ],
        // Short name
        'short' => [
            "\u{CB8}\u{CCB}\u{CAE}",
            "\u{CAE}\u{C82}\u{C97}\u{CB3}",
            "\u{CAC}\u{CC1}\u{CA7}",
            "\u{C97}\u{CC1}\u{CB0}\u{CC1}",
            "\u{CB6}\u{CC1}\u{C95}\u{CCD}\u{CB0}",
            "\u{CB6}\u{CA8}\u{CBF}",
            "\u{CAD}\u{CBE}\u{CA8}\u{CC1}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            "\u{C9C}\u{CA8}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAB}\u{CC6}\u{CAC}\u{CCD}\u{CB0}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAE}\u{CBE}\u{CB0}\u{CCD}\u{C9A}\u{CCD}",
            "\u{C8F}\u{C8F}\u{CAA}\u{CCD}\u{CB0}\u{CBF}\u{CB2}\u{CCD}",
            "\u{CAE}\u{CC7}",
            "\u{C9C}\u{CC2}\u{CA8}\u{CCD}",
            "\u{C9C}\u{CC1}\u{CB2}\u{CC8}",
            "\u{C86}\u{C97}\u{CB8}\u{CCD}\u{C9F}\u{CCD}",
            "\u{CB8}\u{CC6}\u{CAA}\u{CCD}\u{C9F}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{C85}\u{C95}\u{CCD}\u{C9F}\u{CCB}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA8}\u{CB5}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA1}\u{CBF}\u{CB8}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
        ],
        // Short name
        'short' => [
            "\u{C9C}\u{CA8}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAB}\u{CC6}\u{CAC}\u{CCD}\u{CB0}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAE}\u{CBE}\u{CB0}\u{CCD}\u{C9A}\u{CCD}",
            "\u{C8E}\u{CAA}\u{CCD}\u{CB0}\u{CBF}\u{CB2}\u{CCD}",
            "\u{CAE}\u{CC7}",
            "\u{C9C}\u{CC2}\u{CA8}\u{CCD}",
            "\u{C9C}\u{CC1}\u{CB2}\u{CC8}",
            "\u{C86}\u{C97}\u{CB8}\u{CCD}\u{C9F}\u{CCD}",
            "\u{CB8}\u{CC6}\u{CAA}\u{CCD}\u{C9F}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{C85}\u{C95}\u{CCD}\u{C9F}\u{CCB}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA8}\u{CB5}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA1}\u{CBF}\u{CB8}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
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
