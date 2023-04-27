<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_dv_mv extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0465;

    /**
     * @var string The locale tag
     */
    protected $tag = 'dv-mv';

    /**
     * @var string The currency code "MVR"
     */
    protected $currencyCode = 'MVR';

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ',';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = '.';

    /**
     * @var string The date separator
     */
    protected $dateSeparator = '-';

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
            "\u{780}\u{7AF}\u{789}\u{7A6}",
            "\u{787}\u{7A6}\u{782}\u{7B0}\u{78E}\u{7A7}\u{783}\u{7A6}",
            "\u{784}\u{7AA}\u{78B}\u{7A6}",
            "\u{784}\u{7AA}\u{783}\u{7A7}\u{790}\u{7B0}\u{78A}\u{7A6}\u{78C}\u{7A8}",
            "\u{780}\u{7AA}\u{786}\u{7AA}\u{783}\u{7AA}",
            "\u{780}\u{7AE}\u{782}\u{7A8}\u{780}\u{7A8}\u{783}\u{7AA}",
            "\u{787}\u{7A7}\u{78B}\u{7A9}\u{787}\u{7B0}\u{78C}\u{7A6}",
        ],
        // Short name
        'short' => [
            "\u{780}\u{7AF}\u{789}\u{7A6}",
            "\u{787}\u{7A6}\u{782}\u{7B0}\u{78E}\u{7A7}\u{783}\u{7A6}",
            "\u{784}\u{7AA}\u{78B}\u{7A6}",
            "\u{784}\u{7AA}\u{783}\u{7A7}\u{790}\u{7B0}\u{78A}\u{7A6}\u{78C}\u{7A8}",
            "\u{780}\u{7AA}\u{786}\u{7AA}\u{783}\u{7AA}",
            "\u{780}\u{7AE}\u{782}\u{7A8}\u{780}\u{7A8}\u{783}\u{7AA}",
            "\u{787}\u{7A7}\u{78B}\u{7A9}\u{787}\u{7B0}\u{78C}\u{7A6}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{796}\u{7A6}\u{782}\u{7A6}\u{788}\u{7A6}\u{783}\u{7A9}",
            "\u{78A}\u{7AC}\u{784}\u{7B0}\u{783}\u{7AA}\u{787}\u{7A6}\u{783}\u{7A9}",
            "\u{789}\u{7A7}\u{783}\u{797}\u{7B0}",
            "\u{787}\u{7AD}\u{795}\u{7B0}\u{783}\u{7A8}\u{78D}\u{7B0}",
            "\u{789}\u{7AC}\u{787}\u{7A8}",
            "\u{796}\u{7AB}\u{782}\u{7B0}",
            "\u{796}\u{7AA}\u{78D}\u{7A6}\u{787}\u{7A8}",
            "\u{787}\u{7AE}\u{78E}\u{7A6}\u{790}\u{7B0}\u{793}\u{7B0}",
            "\u{790}\u{7AC}\u{795}\u{7B0}\u{793}\u{7AC}\u{789}\u{7B0}\u{784}\u{7A6}\u{783}",
            "\u{787}\u{7AE}\u{786}\u{7B0}\u{793}\u{7AF}\u{784}\u{7A6}\u{783}",
            "\u{782}\u{7AE}\u{788}\u{7AC}\u{789}\u{7B0}\u{784}\u{7A6}\u{783}",
            "\u{791}\u{7A8}\u{790}\u{7AC}\u{789}\u{7B0}\u{784}\u{7A6}\u{783}",
        ],
        // Short name
        'short' => [
            "\u{796}\u{7A6}\u{782}\u{7A6}\u{788}\u{7A6}\u{783}\u{7A9}",
            "\u{78A}\u{7AC}\u{784}\u{7B0}\u{783}\u{7AA}\u{787}\u{7A6}\u{783}\u{7A9}",
            "\u{789}\u{7A7}\u{783}\u{797}\u{7B0}",
            "\u{787}\u{7AD}\u{795}\u{7B0}\u{783}\u{7A8}\u{78D}\u{7B0}",
            "\u{789}\u{7AC}\u{787}\u{7A8}",
            "\u{796}\u{7AB}\u{782}\u{7B0}",
            "\u{796}\u{7AA}\u{78D}\u{7A6}\u{787}\u{7A8}",
            "\u{787}\u{7AE}\u{78E}\u{7A6}\u{790}\u{7B0}\u{793}\u{7B0}",
            "\u{790}\u{7AC}\u{795}\u{7B0}\u{793}\u{7AC}\u{789}\u{7B0}\u{784}\u{7A6}\u{783}",
            "\u{787}\u{7AE}\u{786}\u{7B0}\u{793}\u{7AF}\u{784}\u{7A6}\u{783}",
            "\u{782}\u{7AE}\u{788}\u{7AC}\u{789}\u{7B0}\u{784}\u{7A6}\u{783}",
            "\u{791}\u{7A8}\u{790}\u{7AC}\u{789}\u{7B0}\u{784}\u{7A6}\u{783}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        '$ #,##0;$ -#,##0' => '$ #,##0;$ -#,##0',
        '$ #,##0;[Red]$ -#,##0' => '$ #,##0;[Red]$ -#,##0',
        '$ #,##0.00;$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '$ #,##0.00;[Red]$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ',
        '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"mmmm d"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
