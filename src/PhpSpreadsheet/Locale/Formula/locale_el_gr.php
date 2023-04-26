<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Ελληνικά (Greek)
 */
class locale_el_gr extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "el-gr";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#ΚΕΝΟ!",
        "DIV0" => "#ΔΙΑΙΡ/0!",
        "VALUE" => "#ΤΙΜΗ!",
        "REF" => "#ΑΝΑΦ!",
        "NAME" => "#ΟΝΟΜΑ?",
        "NUM" => "#ΑΡΙΘ!",
        "NA" => "#Δ/Υ",
        "GETTINGDATA" => "#ΛΗΨΗ_ΔΕΔΟΜΕΝΩΝ!",
        "SPILL" => "#ΕΚΧΥΣΗ!",
        "CONNECT" => "#ΣΥΝΔΕΣΗ!",
        "BLOCKED" => "#ΑΠΟΚΛ!",
        "UNKNOWN" => "#ΑΓΝΩΣΤΟ!",
        "FIELD" => "#ΠΕΔΙΟ!",
        "CALC" => "#ΥΠΟΛ!",
        "EXTERNAL" => "#ΕΞΩΤΕΡΙΚΟΣ!",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Λειτουργίες αναζήτησης και αναφοράς (Lookup and reference functions)
        "*RC" => "RC",

        // Λειτουργίες κειμένου (Text functions)
        "DOLLAR" => "CURRENCY",
    );

}
