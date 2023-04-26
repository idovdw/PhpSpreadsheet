<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Te reo Māori (Māori)
 */
class locale_mi_nz extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "mi-nz";

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
        "SPILL" => "#MARINGI!",
        "CONNECT" => "#TŪHONO!",
        "BLOCKED" => "#KUA ĀRAITIA!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#WAHO!",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Ngā mahi rapu whakaahua me te hononga (Lookup and reference functions)
        "*RC" => "RC",

        // Ngā mahi tatauranga (Statistical functions)
        "FORECAST.ETS.STAT" => "MATAPAE.ETS.STAT",
    );

}
