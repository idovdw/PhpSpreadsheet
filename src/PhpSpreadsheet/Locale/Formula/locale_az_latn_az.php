<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Azərbaycan (Azerbaijani)
 */
class locale_az_latn_az extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "az-latn-az";

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
        "GETTINGDATA" => "#VERİLƏNLƏR_ƏLDƏ_EDİLİR!",
        "SPILL" => "#SIZMA!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOKLANIB!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
