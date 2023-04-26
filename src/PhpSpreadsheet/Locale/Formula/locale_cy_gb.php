<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Cymraeg (Welsh)
 */
class locale_cy_gb extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "cy-gb";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NWL!",
        "DIV0" => "#RH/0!",
        "VALUE" => "#GWERTH!",
        "REF" => "#REF!",
        "NAME" => "#ENW?",
        "NUM" => "#RHIF!",
        "NA" => "#N/A",
        "GETTINGDATA" => "#NÔL_DATA!",
        "SPILL" => "#SPILL!",
        "CONNECT" => "#CYSYLLTU!",
        "BLOCKED" => "#RHWYSTRWYD!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#MAES!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#ALLANOL!",
    );

}
