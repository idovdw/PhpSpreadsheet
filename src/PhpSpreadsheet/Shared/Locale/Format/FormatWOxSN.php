<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Wolof (Senegal).
 *
 * Do not alter this file; it is generated content.
 */
class FormatWOxSN extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0488;

    /**
     * @var string The locale tag
     */
    protected $tag = 'wo-sn';

    /**
     * @var string The currency code "F CFA"
     */
    protected $strCurrencyCode = "F\u{202F}CFA";

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
            'Altine',
            'Talaata',
            'Àllarba',
            'Alxames',
            'Àjjuma',
            'Gaawu',
            'Dibéer',
        ],
        // Short name
        'short' => [
            'Alt.',
            'Tal.',
            'Àll.',
            'Alx.',
            'Àjj.',
            'Gaa.',
            'Dib.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Samwiye',
            'Fewriye',
            'Maars',
            'Awril',
            'Me',
            'Suwe',
            'Sullet',
            'Ut',
            "Sept\u{E0}mbar",
            'Oktoobar',
            "Noow\u{E0}mbar",
            "Des\u{E0}mbar",
        ],
        // Short name
        'short' => [
            'Sam.',
            'Few.',
            'Maa',
            'Awr.',
            'Me',
            'Suw',
            'Sul.',
            'Ut',
            'Sept.',
            'Okt.',
            'Now.',
            'Des.',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '\$ #,##0.00' => '$ #,##0.00',
        '\$ #,##0.00;[Red]\$ #,##0.00' => '$ #,##0.00;[Red]$ #,##0.00',
        '\$ #,##0.00;\$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '\$ #,##0.00;[Red]\$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ \$ * #,##0_ ;_ \$ * -#,##0_ ;_ \$ * \"-\"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * \"-\"_ ;_ @_ ',
        '_ \$ * #,##0.0_ ;_ \$ * -#,##0.0_ ;_ \$ * \"-\"?_ ;_ @_ ' => '_ $ * #,##0.0_ ;_ $ * -#,##0.0_ ;_ $ * \"-\"?_ ;_ @_ ',
        '_ \$ * #,##0.00_ ;_ \$ * -#,##0.00_ ;_ \$ * \"-\"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * \"-\"??_ ;_ @_ ',
        '_ \$ * #,##0.000_ ;_ \$ * -#,##0.000_ ;_ \$ * \"-\"???_ ;_ @_ ' => '_ $ * #,##0.000_ ;_ $ * -#,##0.000_ ;_ $ * \"-\"???_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd d mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
