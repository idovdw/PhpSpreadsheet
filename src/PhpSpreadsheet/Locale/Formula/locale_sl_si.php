<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Slovenščina (Slovenian)
 */
class locale_sl_si extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "sl-si";

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
        "EXTERNAL" => "#ZUNANJI!",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Funkcije za iskanje in sklicevanje (Lookup and reference functions)
        "*RC" => "RC",

        // Statistične funkcije (Statistical functions)
        "STANDARDIZE" => "STANDARDIZIRANJE",

        // Besedilne funkcije (Text functions)
        "DOLLAR" => "VALUTA",
    );

}
