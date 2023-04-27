<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_ml_in extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x044C;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ml-in';

    /**
     * @var string The currency code "₹"
     */
    protected $currencyCode = "\u{20B9}";

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
            "\u{D24}\u{D3F}\u{D19}\u{D4D}\u{D15}\u{D33}\u{D3E}\u{D34}\u{D4D}\u{200C}\u{D1A}",
            "\u{D1A}\u{D4A}\u{D35}\u{D4D}\u{D35}\u{D3E}\u{D34}\u{D4D}\u{D1A}",
            "\u{D2C}\u{D41}\u{D27}\u{D28}\u{D3E}\u{D34}\u{D4D}\u{200C}\u{D1A}",
            "\u{D35}\u{D4D}\u{D2F}\u{D3E}\u{D34}\u{D3E}\u{D34}\u{D4D}\u{200C}\u{D1A}",
            "\u{D35}\u{D46}\u{D33}\u{D4D}\u{D33}\u{D3F}\u{D2F}\u{D3E}\u{D34}\u{D4D}\u{200C}\u{D1A}",
            "\u{D36}\u{D28}\u{D3F}\u{D2F}\u{D3E}\u{D34}\u{D4D}\u{200C}\u{D1A}",
            "\u{D1E}\u{D3E}\u{D2F}\u{D31}\u{D3E}\u{D34}\u{D4D}\u{200C}\u{D1A}",
        ],
        // Short name
        'short' => [
            "\u{D24}\u{D3F}\u{D19}\u{D4D}\u{D15}\u{D7E}",
            "\u{D1A}\u{D4A}\u{D35}\u{D4D}\u{D35}",
            "\u{D2C}\u{D41}\u{D27}\u{D7B}",
            "\u{D35}\u{D4D}\u{D2F}\u{D3E}\u{D34}\u{D02}",
            "\u{D35}\u{D46}\u{D33}\u{D4D}\u{D33}\u{D3F}",
            "\u{D36}\u{D28}\u{D3F}",
            "\u{D1E}\u{D3E}\u{D2F}\u{D7C}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{D1C}\u{D28}\u{D41}\u{D35}\u{D30}\u{D3F}",
            "\u{D2B}\u{D46}\u{D2C}\u{D4D}\u{D30}\u{D41}\u{D35}\u{D30}\u{D3F}",
            "\u{D2E}\u{D3E}\u{D30}\u{D4D}\u{200D}\u{200C}\u{D1A}\u{D4D}\u{D1A}\u{D4D}",
            "\u{D0F}\u{D2A}\u{D4D}\u{D30}\u{D3F}\u{D32}\u{D4D}\u{200D}",
            "\u{D2E}\u{D47}\u{D2F}\u{D4D}",
            "\u{D1C}\u{D42}\u{D7A}",
            "\u{D1C}\u{D42}\u{D32}\u{D48}",
            "\u{D06}\u{D17}\u{D38}\u{D4D}\u{D31}\u{D4D}\u{D31}\u{D4D}",
            "\u{D38}\u{D46}\u{D2A}\u{D4D}\u{200C}\u{D31}\u{D4D}\u{D31}\u{D02}\u{D2C}\u{D30}\u{D4D}\u{200D}",
            "\u{D12}\u{D15}\u{D4D}\u{200C}\u{D1F}\u{D4B}\u{D2C}\u{D30}\u{D4D}\u{200D}",
            "\u{D28}\u{D35}\u{D02}\u{D2C}\u{D30}\u{D4D}\u{200D}",
            "\u{D21}\u{D3F}\u{D38}\u{D02}\u{D2C}\u{D30}\u{D4D}\u{200D}",
        ],
        // Short name
        'short' => [
            "\u{D1C}\u{D28}\u{D41}",
            "\u{D2B}\u{D46}\u{D2C}\u{D4D}\u{D30}\u{D41}",
            "\u{D2E}\u{D3E}\u{D7C}",
            "\u{D0F}\u{D2A}\u{D4D}\u{D30}\u{D3F}",
            "\u{D2E}\u{D47}\u{D2F}\u{D4D}",
            "\u{D1C}\u{D42}\u{D7A}",
            "\u{D1C}\u{D42}\u{D32}\u{D48}",
            "\u{D13}\u{D17}",
            "\u{D38}\u{D46}\u{D2A}\u{D4D}\u{D31}\u{D4D}\u{D31}\u{D02}",
            "\u{D12}\u{D15}\u{D4D}\u{D1F}\u{D4B}",
            "\u{D28}\u{D35}\u{D02}",
            "\u{D21}\u{D3F}\u{D38}\u{D02}",
        ],
    ];
}
