<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Indonesia (Indonesian)
 */
class locale_id_id extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "id-id";

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
        "SPILL" => "#LUAPAN!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Fungsi tanggal dan waktu (Date and time functions)
        "DAYS" => "HARI",

        // Fungsi informasi (Information functions)
        "SHEET" => "LEMBAR",

        // Fungsi cari dan acu (Lookup and reference functions)
        "*RC" => "RC",
    );

}
