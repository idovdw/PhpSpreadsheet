<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for հայերեն (Armenian)
 */
class locale_hy_am extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "hy-am";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#ԶՐՈ!",
        "DIV0" => "#ԲԱԺԱՆՈՒՄ/0!",
        "VALUE" => "#ԱՐԺԵՔ!",
        "REF" => "#ՀՂՈՒՄ!",
        "NAME" => "#ԱՆՈՒՆ?",
        "NUM" => "#ԹԻՎ!",
        "NA" => "#ԿԻՌ/ՉԷ",
        "GETTINGDATA" => "#ՏՎՅԱԼՆԵՐԻ_ՍՏԱՑՈՒՄ!",
        "SPILL" => "#ՎԱՆԴԱԿԱՀԱՏՈՒՄ!",
        "CONNECT" => "#ԿԱՊԱԿՑՈՒՄ!",
        "BLOCKED" => "#ԱՐԳԵԼԱՓԱԿՎԱԾ!",
        "UNKNOWN" => "#ԱՆՀԱՅՏ!",
        "FIELD" => "#ԴԱՇՏ!",
        "CALC" => "#ՀԱՇՎԱՐԿ!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
