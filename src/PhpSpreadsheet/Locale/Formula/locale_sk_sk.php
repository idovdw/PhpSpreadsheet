<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Slovenčina (Slovak)
 */
class locale_sk_sk extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "sk-sk";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NEPLATNÝ!",
        "DIV0" => "#DELENIENULOU!",
        "VALUE" => "#HODNOTA!",
        "REF" => "#ODKAZ!",
        "NAME" => "#NÁZOV?",
        "NUM" => "#ČÍSLO!",
        "NA" => "#NEDOSTUPNÝ",
        "GETTINGDATA" => "#ZÍSKANIE_ÚDAJOV!",
        "SPILL" => "#PRESAHOVANIE!",
        "CONNECT" => "#PRIPOJIŤ!",
        "BLOCKED" => "#BLOKOVANÉ!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#VÝPOČET!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
