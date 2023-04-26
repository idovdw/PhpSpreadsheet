<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for українська (Ukrainian)
 */
class locale_uk_ua extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "uk-ua";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NULL!",
        "DIV0" => "#ДІЛЕННЯ/0!",
        "VALUE" => "#ЗНАЧЕННЯ!",
        "REF" => "#ПОСИЛАННЯ!",
        "NAME" => "#ІМ’Я?",
        "NUM" => "#НОМЕР!",
        "NA" => "#Н/Д",
        "GETTINGDATA" => "#ОТРИМАННЯ_ДАНИХ!",
        "SPILL" => "#РОЗГОРТАННЯ!",
        "CONNECT" => "#ПІДКЛЮЧЕННЯ!",
        "BLOCKED" => "#ЗАБЛОКОВАНО!",
        "UNKNOWN" => "#НЕВІДОМО!",
        "FIELD" => "#ПОЛЕ!",
        "CALC" => "#ОБЧИСЛЕННЯ!",
        "EXTERNAL" => "#ЗОВНІШНЄ!",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Функції пошуку та посилання (Lookup and reference functions)
        "*RC" => "RC",

        // Функції сумісності (Compatibility functions)
        "FTEST" => "FTEST1",
    );

}
