<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Türkmen dili (Turkmen)
 */
class locale_tk_tm extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "tk-tm";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NULL!",
        "DIV0" => "#SAN/0!",
        "VALUE" => "#BAHA!",
        "REF" => "#SALG!",
        "NAME" => "#AT?",
        "NUM" => "#SAN!",
        "NA" => "#ÝOK",
        "GETTINGDATA" => "#MAGLUMAT_ALYNÝAR!",
        "SPILL" => "#DAŞGYN!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BÖKDELEN!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
