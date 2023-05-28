<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for íslenska / Icelandic (Iceland).
 *
 * Do not alter this file; it is generated content.
 */
class FormatISxIS extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x040F;

    /**
     * @var string The locale tag
     */
    protected $tag = 'is-is';

    /**
     * @var string The currency code "kr"
     */
    protected $strCurrencyCode = 'kr';

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
    protected $strDateSeparator = '.';

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
            'mánudagur',
            "\u{FE}riðjudagur",
            'miðvikudagur',
            'fimmtudagur',
            'föstudagur',
            'laugardagur',
            'sunnudagur',
        ],
        // Short name
        'short' => [
            'mán.',
            "\u{FE}ri.",
            'mið.',
            'fim.',
            'fös.',
            'lau.',
            'sun.',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'janúar',
            'febrúar',
            'mars',
            'apríl',
            'maí',
            'júní',
            'júlí',
            'ágúst',
            'september',
            'október',
            'nóvember',
            'desember',
        ],
        // Short name
        'short' => [
            'jan.',
            'feb.',
            'mar.',
            'apr.',
            'maí',
            'jún.',
            'júl.',
            'ágú.',
            'sep.',
            'okt.',
            'nóv.',
            'des.',
        ],
    ];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [
        // Full name
        'full' => [
            'mánudagur',
            "\u{FE}riðjudagur",
            'miðvikudagur',
            'fimmtudagur',
            'föstudagur',
            'laugardagur',
            'sunnudagur',
        ],
        // Short name
        'short' => [
            'mán',
            "\u{FE}ri",
            'mið',
            'fim',
            'fös',
            'lau',
            'sun',
        ],
    ];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [
        // Full name
        'full' => [
            'janúar',
            'febrúar',
            'mars',
            'apríl',
            'maí',
            'júní',
            'júlí',
            'ágúst',
            'september',
            'október',
            'nóvember',
            'desember',
        ],
        // Short name
        'short' => [
            'jan',
            'feb',
            'mar',
            'apr',
            'maí',
            'jún',
            'júl',
            'ágú',
            'sep',
            'okt',
            'nóv',
            'des',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'd/m/yyyy',
        'd-mmm-yy' => 'd/mmm/yy',
        'd-mmm' => 'd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'd/m/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"d"{. }"mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
