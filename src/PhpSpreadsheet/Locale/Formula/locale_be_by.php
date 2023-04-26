<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for беларуская (Belarusian)
 */
class locale_be_by extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "be-by";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#ПУСТА!",
        "DIV0" => "#ДЗЯЛ/0!",
        "VALUE" => "#ЗНАЧ!",
        "REF" => "#СПАСЫЛКА!",
        "NAME" => "#ІМЯ?",
        "NUM" => "#ЛІК!",
        "NA" => "#Н/Д",
        "GETTINGDATA" => "#АТРЫМАННЕ_ДАДЗЕНЫХ!",
        "SPILL" => "#ПЕРАЦЯКАННЕ!",
        "CONNECT" => "#ПАДЛУЧЭННЕ!",
        "BLOCKED" => "#ЗАБЛАКІРАВАНА!",
        "UNKNOWN" => "#НЕВЯДОМА!",
        "FIELD" => "#ПОЛЕ!",
        "CALC" => "#ВЫЛІЧ!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
