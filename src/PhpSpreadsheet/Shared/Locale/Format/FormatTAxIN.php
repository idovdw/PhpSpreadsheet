<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for தமிழ் / Tamil (India).
 *
 * Do not alter this file; it is generated content.
 */
class FormatTAxIN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0449;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ta-in';

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
            "\u{BA4}\u{BBF}\u{B99}\u{BCD}\u{B95}\u{BB3}\u{BCD}\u{B95}\u{BBF}\u{BB4}\u{BAE}\u{BC8}",
            "\u{B9A}\u{BC6}\u{BB5}\u{BCD}\u{BB5}\u{BBE}\u{BAF}\u{BCD}\u{B95}\u{BCD}\u{B95}\u{BBF}\u{BB4}\u{BAE}\u{BC8}",
            "\u{BAA}\u{BC1}\u{BA4}\u{BA9}\u{BCD}\u{B95}\u{BBF}\u{BB4}\u{BAE}\u{BC8}",
            "\u{BB5}\u{BBF}\u{BAF}\u{BBE}\u{BB4}\u{B95}\u{BCD}\u{B95}\u{BBF}\u{BB4}\u{BAE}\u{BC8}",
            "\u{BB5}\u{BC6}\u{BB3}\u{BCD}\u{BB3}\u{BBF}\u{B95}\u{BCD}\u{B95}\u{BBF}\u{BB4}\u{BAE}\u{BC8}",
            "\u{B9A}\u{BA9}\u{BBF}\u{B95}\u{BCD}\u{B95}\u{BBF}\u{BB4}\u{BAE}\u{BC8}",
            "\u{B9E}\u{BBE}\u{BAF}\u{BBF}\u{BB1}\u{BCD}\u{BB1}\u{BC1}\u{B95}\u{BCD}\u{B95}\u{BBF}\u{BB4}\u{BAE}\u{BC8}",
        ],
        // Short name
        'short' => [
            "\u{BA4}\u{BBF}\u{B99}\u{BCD}\u{B95}\u{BB3}\u{BCD}",
            "\u{B9A}\u{BC6}\u{BB5}\u{BCD}\u{BB5}\u{BBE}\u{BAF}\u{BCD}",
            "\u{BAA}\u{BC1}\u{BA4}\u{BA9}\u{BCD}",
            "\u{BB5}\u{BBF}\u{BAF}\u{BBE}\u{BB4}\u{BA9}\u{BCD}",
            "\u{BB5}\u{BC6}\u{BB3}\u{BCD}\u{BB3}\u{BBF}",
            "\u{B9A}\u{BA9}\u{BBF}",
            "\u{B9E}\u{BBE}\u{BAF}\u{BBF}\u{BB1}\u{BC1}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            "\u{B9C}\u{BA9}\u{BB5}\u{BB0}\u{BBF}",
            "\u{BAA}\u{BBF}\u{BAA}\u{BCD}\u{BB0}\u{BB5}\u{BB0}\u{BBF}",
            "\u{BAE}\u{BBE}\u{BB0}\u{BCD}\u{B9A}\u{BCD}",
            "\u{B8F}\u{BAA}\u{BCD}\u{BB0}\u{BB2}\u{BCD}",
            "\u{BAE}\u{BC7}",
            "\u{B9C}\u{BC2}\u{BA9}\u{BCD}",
            "\u{B9C}\u{BC2}\u{BB2}\u{BC8}",
            "\u{B86}\u{B95}\u{BB8}\u{BCD}\u{B9F}\u{BCD}",
            "\u{B9A}\u{BC6}\u{BAA}\u{BCD}\u{B9F}\u{BAE}\u{BCD}\u{BAA}\u{BB0}\u{BCD}",
            "\u{B85}\u{B95}\u{BCD}\u{B9F}\u{BCB}\u{BAA}\u{BB0}\u{BCD}",
            "\u{BA8}\u{BB5}\u{BAE}\u{BCD}\u{BAA}\u{BB0}\u{BCD}",
            "\u{B9F}\u{BBF}\u{B9A}\u{BAE}\u{BCD}\u{BAA}\u{BB0}\u{BCD}",
        ],
        // Short name
        'short' => [
            "\u{B9C}\u{BA9}\u{BB5}\u{BB0}\u{BBF}",
            "\u{BAA}\u{BBF}\u{BAA}\u{BCD}\u{BB0}\u{BB5}\u{BB0}\u{BBF}",
            "\u{BAE}\u{BBE}\u{BB0}\u{BCD}\u{B9A}\u{BCD}",
            "\u{B8F}\u{BAA}\u{BCD}\u{BB0}\u{BB2}\u{BCD}",
            "\u{BAE}\u{BC7}",
            "\u{B9C}\u{BC2}\u{BA9}\u{BCD}",
            "\u{B9C}\u{BC2}\u{BB2}\u{BC8}",
            "\u{B86}\u{B95}\u{BB8}\u{BCD}\u{B9F}\u{BCD}",
            "\u{B9A}\u{BC6}\u{BAA}\u{BCD}\u{B9F}\u{BAE}\u{BCD}\u{BAA}\u{BB0}\u{BCD}",
            "\u{B85}\u{B95}\u{BCD}\u{B9F}\u{BCB}\u{BAA}\u{BB0}\u{BCD}",
            "\u{BA8}\u{BB5}\u{BAE}\u{BCD}\u{BAA}\u{BB0}\u{BCD}",
            "\u{B9F}\u{BBF}\u{B9A}\u{BAE}\u{BCD}\u{BAA}\u{BB0}\u{BCD}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd/mmm/yy',
        'd-mmm' => 'dd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy hh:mm',
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
