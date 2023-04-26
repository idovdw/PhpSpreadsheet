<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Kiswahili (Swahili)
 */
class locale_sw_ke extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "sw-ke";

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
        "NAME" => "#JINA?",
        "NUM" => "#NAM!",
        "NA" => "#HAITUMAKI",
        "GETTINGDATA" => "#INAPATA_DATA!",
        "SPILL" => "#MWAGIKA!",
        "CONNECT" => "#UNGANISHA!",
        "BLOCKED" => "#IMEZUIWA!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#UGA!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
