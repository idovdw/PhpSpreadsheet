<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Català (Catalan)
 */
class locale_ca_es_valencia extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "ca-es-valencia";

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
        "SPILL" => "#DESBORDAMENT!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#CAMP!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $functions_legacy = array(
        // Funcions de cerca i referència (Lookup and reference functions)
        "*RC" => "RC",
        "CHOOSECOLS" => "TRIACOLS",
        "DROP" => "CAIGUDA",
        "EXPAND" => "EXPANDEIX",
        "TAKE" => "PREN",

        // Funcions de text (Text functions)
        "ARRAYTOTEXT" => "MATRIUATEXT",
        "VALUETOTEXT" => "VALORATEXT",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Funcions de cerca i referència (Lookup and reference functions)
        "*RC" => "RC",
        "CHOOSECOLS" => "TRIACOLS",
        "DROP" => "CAIGUDA",
        "EXPAND" => "EXPANDEIX",
        "TAKE" => "PREN",

        // Funcions de text (Text functions)
        "ARRAYTOTEXT" => "MATRIUATEXT",
        "VALUETOTEXT" => "VALORATEXT",
    );

}
