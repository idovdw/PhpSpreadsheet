<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Shqip (Albanian)
 */
class locale_sq_al extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "sq-al";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NUL!",
        "DIV0" => "#PJES/0!",
        "VALUE" => "#VLERA!",
        "REF" => "#REF!",
        "NAME" => "#EMRI?",
        "NUM" => "#NUM!",
        "NA" => "#N/A",
        "GETTINGDATA" => "#SIGURIMI_I_TË_DHËNAVE!",
        "SPILL" => "#SPILL!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
