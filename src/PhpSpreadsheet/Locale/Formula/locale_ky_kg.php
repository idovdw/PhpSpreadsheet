<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for кыргызча (Kyrgyz)
 */
class locale_ky_kg extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "ky-kg";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#БОШ!",
        "DIV0" => "#БӨЛ/0!",
        "VALUE" => "#НАРК!",
        "REF" => "#КАЙР!",
        "NAME" => "#АТЫ?",
        "NUM" => "#САН!",
        "NA" => "#Б/Б",
        "GETTINGDATA" => "#БЕРИЛМЕ_АЛУУ!",
        "SPILL" => "#АШЫПТАШУУ!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#БӨГӨЛГӨН!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#ТАЛАА!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Издөө жана сыдыруу функциялары (Lookup and reference functions)
        "*RC" => "RC",

        // Статистикалык функциялар (Statistical functions)
        "FORECAST.ETS.STAT" => "БОЛЖОЛ.КЖ.CTAT",
    );

}
