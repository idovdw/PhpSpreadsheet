<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Română (Romanian)
 */
class locale_ro_ro extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "ro-ro";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NUL!",
        "DIV0" => "#DIV/0!",
        "VALUE" => "#VALOARE!",
        "REF" => "#REF!",
        "NAME" => "#NUME?",
        "NUM" => "#NUM!",
        "NA" => "#N/A",
        "GETTINGDATA" => "#PRELUARE_DATE!",
        "SPILL" => "#VĂRSARE!",
        "CONNECT" => "#CONECTARE!",
        "BLOCKED" => "#BLOCAT!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
