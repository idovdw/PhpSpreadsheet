<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Pulaar / Fulah (Nigeria).
 *
 * Do not alter this file; it is generated content.
 */
class FormatFFxLATNxNG extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0467;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ff-latn-ng';

    /**
     * @var string The currency code "₦"
     */
    protected $strCurrencyCode = "\u{20A6}";

    /**
     * @var string The decimal separator ","
     */
    protected $strDecimalSeparator = ',';

    /**
     * @var string The thousands separator " "
     */
    protected $strThousandsSeparator = "\u{A0}";

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
            'altine',
            'talaata',
            'alarba',
            'alkamiisa',
            'aljumaa',
            'asete',
            'alete',
        ],
        // Short name
        'short' => [
            'alt.',
            'tal.',
            'alar.',
            'alk.',
            'alj.',
            'aset',
            'alet',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'samwiee',
            'feeburyee',
            'marsa',
            'awril',
            'me',
            "suye\u{14B}",
            'sulyee',
            'ut',
            'satambara',
            'oktoobar',
            'nowamburu',
            'deesamburu',
        ],
        // Short name
        'short' => [
            'samw',
            'feeb',
            'mar',
            'awr',
            'me',
            'suy',
            'sul',
            'ut',
            'sat',
            'okt',
            'now',
            'dees',
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
