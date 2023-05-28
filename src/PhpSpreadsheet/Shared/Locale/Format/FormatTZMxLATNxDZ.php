<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Format;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\LocaleLayout;

/**
 * Format locale class for Tamaziɣt n laṭlaṣ / Central Atlas Tamazight (Algeria).
 *
 * Do not alter this file; it is generated content.
 */
class FormatTZMxLATNxDZ extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x085F;

    /**
     * @var string The locale tag
     */
    protected $tag = 'tzm-latn-dz';

    /**
     * @var string The currency code "DZD"
     */
    protected $strCurrencyCode = 'DZD';

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
            'letnayen',
            'ttlata',
            'larebâa',
            'lexmis',
            'ldjemâa',
            'ssebt',
            'lh\'ed',
        ],
        // Short name
        'short' => [
            'let',
            'ttl',
            'lar',
            'lex',
            'ldj',
            'sse',
            'lh\'d',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Yennayer',
            'Furar',
            'Meghres',
            'Yebrir',
            'Magu',
            'Yunyu',
            'Yulyu',
            'Ghuct',
            'Cutenber',
            'Tuber',
            'Nunember',
            'Dujanbir',
        ],
        // Short name
        'short' => [
            'Yen',
            'Fur',
            'Megh',
            'Yeb',
            'May',
            'Yun',
            'Yul',
            'Ghu',
            'Cut',
            'Tub',
            'Nun',
            'Duj',
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
