<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_zh_cn extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0804;

    /**
     * @var string The locale tag
     */
    protected $tag = 'zh-cn';

    /**
     * @var string The currency code "¥"
     */
    protected $currencyCode = '¥';

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = '.';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ',';

    /**
     * @var string The date separator
     */
    protected $dateSeparator = '/';

    /**
     * @var string[] The numerals representation (0 up to 9)
     */
    protected $numerals = [
        LocaleLayout::NUMERALS_CHINESE_TRADITIONAL,
        LocaleLayout::NUMERALS_CHINESE_FINANCIAL,
        LocaleLayout::NUMERALS_FULLWIDTH_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $weekdayNames = [
        // Full name
        'full' => [
            "\u{661F}\u{671F}\u{4E00}",
            "\u{661F}\u{671F}\u{4E8C}",
            "\u{661F}\u{671F}\u{4E09}",
            "\u{661F}\u{671F}\u{56DB}",
            "\u{661F}\u{671F}\u{4E94}",
            "\u{661F}\u{671F}\u{516D}",
            "\u{661F}\u{671F}\u{65E5}",
        ],
        // Short name
        'short' => [
            "\u{5468}\u{4E00}",
            "\u{5468}\u{4E8C}",
            "\u{5468}\u{4E09}",
            "\u{5468}\u{56DB}",
            "\u{5468}\u{4E94}",
            "\u{5468}\u{516D}",
            "\u{5468}\u{65E5}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{4E00}\u{6708}",
            "\u{4E8C}\u{6708}",
            "\u{4E09}\u{6708}",
            "\u{56DB}\u{6708}",
            "\u{4E94}\u{6708}",
            "\u{516D}\u{6708}",
            "\u{4E03}\u{6708}",
            "\u{516B}\u{6708}",
            "\u{4E5D}\u{6708}",
            "\u{5341}\u{6708}",
            "\u{5341}\u{4E00}\u{6708}",
            "\u{5341}\u{4E8C}\u{6708}",
        ],
        // Short name
        'short' => [
            "1\u{6708}",
            "2\u{6708}",
            "3\u{6708}",
            "4\u{6708}",
            "5\u{6708}",
            "6\u{6708}",
            "7\u{6708}",
            "8\u{6708}",
            "9\u{6708}",
            "10\u{6708}",
            "11\u{6708}",
            "12\u{6708}",
        ],
    ];
}
