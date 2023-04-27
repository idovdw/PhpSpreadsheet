<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_th_th extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x041E;

    /**
     * @var string The locale tag
     */
    protected $tag = 'th-th';

    /**
     * @var string The currency code "฿"
     */
    protected $currencyCode = "\u{E3F}";

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
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $weekdayNames = [
        // Full name
        'full' => [
            "\u{E08}\u{E31}\u{E19}\u{E17}\u{E23}\u{E4C}",
            "\u{E2D}\u{E31}\u{E07}\u{E04}\u{E32}\u{E23}",
            "\u{E1E}\u{E38}\u{E18}",
            "\u{E1E}\u{E24}\u{E2B}\u{E31}\u{E2A}\u{E1A}\u{E14}\u{E35}",
            "\u{E28}\u{E38}\u{E01}\u{E23}\u{E4C}",
            "\u{E40}\u{E2A}\u{E32}\u{E23}\u{E4C}",
            "\u{E2D}\u{E32}\u{E17}\u{E34}\u{E15}\u{E22}\u{E4C}",
        ],
        // Short name
        'short' => [
            "\u{E08}.",
            "\u{E2D}.",
            "\u{E1E}.",
            "\u{E1E}\u{E24}.",
            "\u{E28}.",
            "\u{E2A}.",
            "\u{E2D}\u{E32}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{E21}\u{E01}\u{E23}\u{E32}\u{E04}\u{E21}",
            "\u{E01}\u{E38}\u{E21}\u{E20}\u{E32}\u{E1E}\u{E31}\u{E19}\u{E18}\u{E4C}",
            "\u{E21}\u{E35}\u{E19}\u{E32}\u{E04}\u{E21}",
            "\u{E40}\u{E21}\u{E29}\u{E32}\u{E22}\u{E19}",
            "\u{E1E}\u{E24}\u{E29}\u{E20}\u{E32}\u{E04}\u{E21}",
            "\u{E21}\u{E34}\u{E16}\u{E38}\u{E19}\u{E32}\u{E22}\u{E19}",
            "\u{E01}\u{E23}\u{E01}\u{E0E}\u{E32}\u{E04}\u{E21}",
            "\u{E2A}\u{E34}\u{E07}\u{E2B}\u{E32}\u{E04}\u{E21}",
            "\u{E01}\u{E31}\u{E19}\u{E22}\u{E32}\u{E22}\u{E19}",
            "\u{E15}\u{E38}\u{E25}\u{E32}\u{E04}\u{E21}",
            "\u{E1E}\u{E24}\u{E28}\u{E08}\u{E34}\u{E01}\u{E32}\u{E22}\u{E19}",
            "\u{E18}\u{E31}\u{E19}\u{E27}\u{E32}\u{E04}\u{E21}",
        ],
        // Short name
        'short' => [
            "\u{E21}.\u{E04}.",
            "\u{E01}.\u{E1E}.",
            "\u{E21}\u{E35}.\u{E04}.",
            "\u{E40}\u{E21}.\u{E22}.",
            "\u{E1E}.\u{E04}.",
            "\u{E21}\u{E34}.\u{E22}.",
            "\u{E01}.\u{E04}.",
            "\u{E2A}.\u{E04}.",
            "\u{E01}.\u{E22}.",
            "\u{E15}.\u{E04}.",
            "\u{E1E}.\u{E22}.",
            "\u{E18}.\u{E04}.",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        'm/d/yyyy' => 'd/m/yyyy',
        'm/d/yyyy h:mm' => 'd/m/yyyy h:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '[$-F800]dddd, mmmm dd, yyyy' => 'd mmmm yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
    ];
}
