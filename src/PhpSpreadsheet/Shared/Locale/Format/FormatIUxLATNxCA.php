<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Inuktitut (Canada).
 *
 * Do not alter this file; it is generated content.
 */
class FormatIUxLATNxCA extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x085D;

    /**
     * @var string The locale tag
     */
    protected $tag = 'iu-latn-ca';

    /**
     * @var string The currency code "C$"
     */
    protected $strCurrencyCode = 'C$';

    /**
     * @var string The decimal separator ","
     */
    protected $strDecimalSeparator = ',';

    /**
     * @var string The thousands separator "."
     */
    protected $strThousandsSeparator = '.';

    /**
     * @var string The date separator
     */
    protected $strDateSeparator = '-';

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
            'Naggajjau',
            'Aippiq',
            'Pingatsiq',
            'Sitammiq',
            'Tallirmiq',
            'Sivataarvik',
            'Naattiinguja',
        ],
        // Short name
        'short' => [
            'Nag',
            'Aip',
            'Pi',
            'Sit',
            'Tal',
            'Siv',
            'Nat',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Jaannuari',
            'Viivvuari',
            'Maatsi',
            'Iipuri',
            'Mai',
            'Juuni',
            'Julai',
            'Aaggiisi',
            'Sitipiri',
            'Utupiri',
            'Nuvipiri',
            'Tisipiri',
        ],
        // Short name
        'short' => [
            'Jan',
            'Viv',
            'Mas',
            'Ipu',
            'Mai',
            'Jun',
            'Jul',
            'Agi',
            'Sii',
            'Uut',
            'Nuv',
            'Tis',
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
