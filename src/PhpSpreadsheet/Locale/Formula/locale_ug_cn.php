<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for ئۇيغۇرچە (Uyghur)
 */
class locale_ug_cn extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "ug-cn";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#قۇرۇق!",
        "DIV0" => "#كاتەكچە/0!",
        "VALUE" => "#قىممىتى؟!",
        "REF" => "#REF!",
        "NAME" => "#نامى؟?",
        "NUM" => "#NUM!",
        "NA" => "#N/A",
        "GETTINGDATA" => "#GETTING_DATA!",
        "SPILL" => "#تېشىش!",
        "CONNECT" => "#ئۇلاش!",
        "BLOCKED" => "#توسۇق!",
        "UNKNOWN" => "#ئېنىقسىز!",
        "FIELD" => "#بۆلەك!",
        "CALC" => "#ھېسابلاش!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
