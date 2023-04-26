<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Norsk nynorsk (Norwegian Nynorsk)
 */
class locale_nn_no extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "nn-no";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NULL!",
        "DIV0" => "#DIV/0!",
        "VALUE" => "#VERDI!",
        "REF" => "#REF!",
        "NAME" => "#NAMN?",
        "NUM" => "#NUM!",
        "NA" => "#I/T",
        "GETTINGDATA" => "#HENTAR_DATA!",
        "SPILL" => "#OVERFLYT!",
        "CONNECT" => "#KOPLE_TIL!",
        "BLOCKED" => "#BLOKKERT!",
        "UNKNOWN" => "#UKJEND!",
        "FIELD" => "#FELT!",
        "CALC" => "#BEREKN!",
        "EXTERNAL" => "#EKSTERN!",
    );

}
