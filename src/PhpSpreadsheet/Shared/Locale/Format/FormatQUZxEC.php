<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Quechua (Ecuador).
 *
 * Do not alter this file; it is generated content.
 */
class FormatQUZxEC extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x086B;

    /**
     * @var string The locale tag
     */
    protected $tag = 'quz-ec';

    /**
     * @var string The currency code "US$"
     */
    protected $strCurrencyCode = 'US$';

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
            'awaki',
            'wanra',
            'chillay',
            'kullka',
            'chaska',
            'wakma',
            'inti',
        ],
        // Short name
        'short' => [
            'awk',
            'wan',
            'chy',
            'kuk',
            'cha',
            'wak',
            'int',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'kulla',
            'panchi',
            'pawkar',
            'ayriwa',
            'aymuray',
            'raymi',
            'sitwa',
            'karwa',
            'kuski',
            'wayru',
            'sasi',
            'kapak',
        ],
        // Short name
        'short' => [
            'kull',
            'pan',
            'paw',
            'ayr',
            'aym',
            'ray',
            'sit',
            'kar',
            'kus',
            'way',
            'sas',
            'kap',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $aFormatReplacements = [
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd-mmm-yy',
        'd-mmm' => 'dd-mmm',
        'h:mm AM/PM' => 'hh:mm AM/PM',
        'h:mm:ss AM/PM' => 'hh:mm:ss AM/PM',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_(* #,##0_);_(* (#,##0);_(* \"-\"_);_(@_)' => '_ * #,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ',
        '_(* #,##0.00_);_(* (#,##0.00);_(* \"-\"??_);_(@_)' => '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"d mmmm"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss"{ a.m.}"',
    ];
}
