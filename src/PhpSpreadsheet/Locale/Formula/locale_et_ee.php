<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Eesti (Estonian)
 */
class locale_et_ee extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "et-ee";

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
        "VALUE" => "#VALUE!",
        "REF" => "#REF!",
        "NAME" => "#NAME?",
        "NUM" => "#NUM!",
        "NA" => "#N/A",
        "GETTINGDATA" => "#GETTING_DATA!",
        "SPILL" => "#SPILL!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#VäLINE!",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Otsingu- ja viitamisfunktsioonid (Lookup and reference functions)
        "*RC" => "RC",

        // Tekstifunktsioonid (Text functions)
        "DOLLAR" => "CURRENCY",
    );

}
