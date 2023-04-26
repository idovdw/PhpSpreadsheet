<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for O‘zbek (Uzbek)
 */
class locale_uz_latn_uz extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "uz-latn-uz";

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
        "SPILL" => "#TO‘KISH!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
