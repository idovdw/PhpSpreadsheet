<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for српски (Serbian)
 */
class locale_sr_cyrl_rs extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "sr-cyrl-rs";

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
        "GETTINGDATA" => "#GETTING_DATА!",
        "SPILL" => "#ПРЕЛИВАЊЕ!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Информативне функције (Information functions)
        "SHEETS" => "ЛИСТОВИ",

        // Функције претраге и референце (Lookup and reference functions)
        "*RC" => "RC",
        "FORMULATEXT" => "ТЕКСТФОРМУЛЕ",

        // Математичке и тригонометријске функције (Math and trigonometry functions)
        "SEC" => "СЕК.",
    );

}
