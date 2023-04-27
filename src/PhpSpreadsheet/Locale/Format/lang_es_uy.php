<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_es_uy extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x380A;

    /**
     * @var string The locale tag
     */
    protected $tag = "es-uy";

    /**
     * @var string The currency code "$"
     */
    protected $currencyCode = "\$";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ",";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ".";

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
            "lunes",
            "martes",
            "miércoles",
            "jueves",
            "viernes",
            "sábado",
            "domingo",
        ],
        // Short name
        "short" => [
            "lun.",
            "mar.",
            "mié.",
            "jue.",
            "vie.",
            "sáb.",
            "dom.",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Setiembre",
            "Octubre",
            "Noviembre",
            "Diciembre",
        ],
        // Short name
        "short" => [
            "Ene.",
            "Feb.",
            "Mar.",
            "Abr.",
            "May.",
            "Jun.",
            "Jul.",
            "Ago.",
            "set",
            "Oct.",
            "Nov.",
            "Dic.",
        ],
    ];

}
