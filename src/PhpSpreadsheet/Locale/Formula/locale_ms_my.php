<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Melayu (Malay)
 */
class locale_ms_my extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "ms-my";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NOL!",
        "DIV0" => "#DIV/0!",
        "VALUE" => "#NILAI!",
        "REF" => "#REF!",
        "NAME" => "#NAMA?",
        "NUM" => "#NUM!",
        "NA" => "#N/A",
        "GETTINGDATA" => "#MENDAPATKAN_DATA!",
        "SPILL" => "#LIMPAH!",
        "CONNECT" => "#SAMBUNG!",
        "BLOCKED" => "#DISEKAT!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Fungsi carian dan rujukan (Lookup and reference functions)
        "*RC" => "RC",

        // Fungsi web (Web functions)
        "ENCODEURL" => "URLMENGEKOD",
    );

}
