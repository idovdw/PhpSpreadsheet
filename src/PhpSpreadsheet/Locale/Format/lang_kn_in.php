<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_kn_in extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x044B;

    /**
     * @var string The locale tag
     */
    protected $tag = "kn-in";

    /**
     * @var string The currency code "₹"
     */
    protected $currencyCode = "\u{20B9}";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ".";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ",";

    /**
     * @var string The date separator
     */
    protected $dateSeparator = "/";

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
        "full" => [
            "\u{CB8}\u{CCB}\u{CAE}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAE}\u{C82}\u{C97}\u{CB3}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAC}\u{CC1}\u{CA7}\u{CB5}\u{CBE}\u{CB0}",
            "\u{C97}\u{CC1}\u{CB0}\u{CC1}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CB6}\u{CC1}\u{C95}\u{CCD}\u{CB0}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CB6}\u{CA8}\u{CBF}\u{CB5}\u{CBE}\u{CB0}",
            "\u{CAD}\u{CBE}\u{CA8}\u{CC1}\u{CB5}\u{CBE}\u{CB0}",
        ],
        // Short name
        "short" => [
            "\u{CB8}\u{CCB}\u{CAE}.",
            "\u{CAE}\u{C82}\u{C97}\u{CB3}.",
            "\u{CAC}\u{CC1}\u{CA7}.",
            "\u{C97}\u{CC1}\u{CB0}\u{CC1}.",
            "\u{CB6}\u{CC1}\u{C95}\u{CCD}\u{CB0}.",
            "\u{CB6}\u{CA8}\u{CBF}.",
            "\u{CAD}\u{CBE}\u{CA8}\u{CC1}.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{C9C}\u{CA8}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAB}\u{CC6}\u{CAC}\u{CCD}\u{CB0}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAE}\u{CBE}\u{CB0}\u{CCD}\u{C9A}\u{CCD}",
            "\u{C8F}\u{C8F}\u{CAA}\u{CCD}\u{CB0}\u{CBF}\u{CB2}\u{CCD}",
            "\u{CAE}\u{CC7}",
            "\u{C9C}\u{CC2}\u{CA8}\u{CCD}",
            "\u{C9C}\u{CC1}\u{CB2}\u{CC8}",
            "\u{C86}\u{C97}\u{CB8}\u{CCD}\u{C9F}\u{CCD}",
            "\u{CB8}\u{CC6}\u{CAA}\u{CCD}\u{C9F}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{C85}\u{C95}\u{CCD}\u{C9F}\u{CCB}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA8}\u{CB5}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA1}\u{CBF}\u{CB8}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
        ],
        // Short name
        "short" => [
            "\u{C9C}\u{CA8}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAB}\u{CC6}\u{CAC}\u{CCD}\u{CB0}\u{CB5}\u{CB0}\u{CBF}",
            "\u{CAE}\u{CBE}\u{CB0}\u{CCD}\u{C9A}\u{CCD}",
            "\u{C8E}\u{CAA}\u{CCD}\u{CB0}\u{CBF}\u{CB2}\u{CCD}",
            "\u{CAE}\u{CC7}",
            "\u{C9C}\u{CC2}\u{CA8}\u{CCD}",
            "\u{C9C}\u{CC1}\u{CB2}\u{CC8}",
            "\u{C86}\u{C97}\u{CB8}\u{CCD}\u{C9F}\u{CCD}",
            "\u{CB8}\u{CC6}\u{CAA}\u{CCD}\u{C9F}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{C85}\u{C95}\u{CCD}\u{C9F}\u{CCB}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA8}\u{CB5}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
            "\u{CA1}\u{CBF}\u{CB8}\u{CC6}\u{C82}\u{CAC}\u{CB0}\u{CCD}",
        ],
    ];

}
