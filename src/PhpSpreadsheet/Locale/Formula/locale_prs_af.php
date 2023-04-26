<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Dari
 */
class locale_prs_af extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "prs-af";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // توابع تاریخ و زمان (Date and time functions)
        "DAYS" => "روزها",

        // توابع منطقی (Logical functions)
        "IF" => "اگر",

        // بررسی و عملکرد مرجع (Lookup and reference functions)
        "*RC" => "RC",
    );

}
