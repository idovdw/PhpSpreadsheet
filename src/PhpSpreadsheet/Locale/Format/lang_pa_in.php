<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_pa_in extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0446;

    /**
     * @var string The locale tag
     */
    protected $tag = 'pa-in';

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
            "\u{A38}\u{A4B}\u{A2E}\u{A35}\u{A3E}\u{A30}",
            "\u{A2E}\u{A70}\u{A17}\u{A32}\u{A35}\u{A3E}\u{A30}",
            "\u{A2C}\u{A41}\u{A71}\u{A27}\u{A35}\u{A3E}\u{A30}",
            "\u{A35}\u{A40}\u{A30}\u{A35}\u{A3E}\u{A30}",
            "\u{A36}\u{A41}\u{A71}\u{A15}\u{A30}\u{A35}\u{A3E}\u{A30}",
            "\u{A36}\u{A28}\u{A3F}\u{A71}\u{A1A}\u{A30}\u{A35}\u{A3E}\u{A30}",
            "\u{A10}\u{A24}\u{A35}\u{A3E}\u{A30}",
        ],
        // Short name
        'short' => [
            "\u{A38}\u{A4B}\u{A2E}.",
            "\u{A2E}\u{A70}\u{A17}\u{A32}.",
            "\u{A2C}\u{A41}\u{A71}\u{A27}.",
            "\u{A35}\u{A40}\u{A30}.",
            "\u{A36}\u{A41}\u{A15}\u{A30}.",
            "\u{A36}\u{A28}\u{A3F}\u{A71}\u{A1A}\u{A30}.",
            "\u{A10}\u{A24}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{A1C}\u{A28}\u{A35}\u{A30}\u{A40}",
            "\u{A5E}\u{A30}\u{A35}\u{A30}\u{A40}",
            "\u{A2E}\u{A3E}\u{A30}\u{A1A}",
            "\u{A05}\u{A2A}\u{A4D}\u{A30}\u{A48}\u{A32}",
            "\u{A2E}\u{A08}",
            "\u{A1C}\u{A42}\u{A28}",
            "\u{A1C}\u{A41}\u{A32}\u{A3E}\u{A08}",
            "\u{A05}\u{A17}\u{A38}\u{A24}",
            "\u{A38}\u{A24}\u{A70}\u{A2C}\u{A30}",
            "\u{A05}\u{A15}\u{A24}\u{A42}\u{A2C}\u{A30}",
            "\u{A28}\u{A35}\u{A70}\u{A2C}\u{A30}",
            "\u{A26}\u{A38}\u{A70}\u{A2C}\u{A30}",
        ],
        // Short name
        'short' => [
            "\u{A1C}\u{A28}\u{A35}\u{A30}\u{A40}",
            "\u{A5E}\u{A30}\u{A35}\u{A30}\u{A40}",
            "\u{A2E}\u{A3E}\u{A30}\u{A1A}",
            "\u{A05}\u{A2A}\u{A4D}\u{A30}\u{A48}\u{A32}",
            "\u{A2E}\u{A08}",
            "\u{A1C}\u{A42}\u{A28}",
            "\u{A1C}\u{A41}\u{A32}\u{A3E}\u{A08}",
            "\u{A05}\u{A17}\u{A38}\u{A24}",
            "\u{A38}\u{A24}\u{A70}\u{A2C}\u{A30}",
            "\u{A05}\u{A15}\u{A24}\u{A42}\u{A2C}\u{A30}",
            "\u{A28}\u{A35}\u{A70}\u{A2C}\u{A30}",
            "\u{A26}\u{A38}\u{A70}\u{A2C}\u{A30}",
        ],
    ];
}
