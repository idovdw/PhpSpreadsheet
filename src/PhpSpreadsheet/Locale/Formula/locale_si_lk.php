<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for සිංහල (Sinhala)
 */
class locale_si_lk extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "si-lk";

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
        "SPILL" => "#කඩදාසි කූර!",
        "CONNECT" => "#සබඳින්න!",
        "BLOCKED" => "#අවහිරයි!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#ක්ෂේත්‍රය!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
