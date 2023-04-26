<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for čeština (Czech)
 */
class locale_cs_cz extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "cs-cz";

    /**
     * @var string International configuration
     */
    protected $aInternational = array(
        "xlCountryCode" => 420,
        "xlCountrySetting" => 420,
        "xlDecimalSeparator" => ",",
        "xlThousandsSeparator" => " ",
        "xlListSeparator" => ";",
        "xlUpperCaseRowLetter" => "R",
        "xlUpperCaseColumnLetter" => "C",
        "xlLowerCaseRowLetter" => "r",
        "xlLowerCaseColumnLetter" => "c",
        "xlLeftBracket" => "[",
        "xlRightBracket" => "]",
        "xlLeftBrace" => "{",
        "xlRightBrace" => "}",
        "xlColumnSeparator" => "\\",
        "xlRowSeparator" => ";",
        "xlAlternateArraySeparator" => "@",
        "xlDateSeparator" => ".",
        "xlTimeSeparator" => ":",
        "xlYearCode" => "r",
        "xlMonthCode" => "m",
        "xlDayCode" => "d",
        "xlHourCode" => "h",
        "xlMinuteCode" => "m",
        "xlSecondCode" => "s",
        "xlCurrencyCode" => "K\u{10D}",
        "xlGeneralFormatName" => "V\u{161}eobecn\u{FD}",
        "xlCurrencyDigits" => 2,
        "xlCurrencyNegative" => 1,
        "xlNoncurrencyDigits" => 2,
        "xlMonthNameChars" => 3,
        "xlWeekdayNameChars" => 3,
        "xlDateOrder" => 1,
        "xl24HourClock" => true,
        "xlNonEnglishFunctions" => true,
        "xlMetric" => true,
        "xlCurrencySpaceBefore" => true,
        "xlCurrencyBefore" => false,
        "xlCurrencyMinusSign" => true,
        "xlCurrencyTrailingZeros" => true,
        "xlCurrencyLeadingZeros" => true,
        "xlMonthLeadingZero" => true,
        "xlDayLeadingZero" => true,
        "xl4DigitYears" => true,
        "xlMDY" => false,
        "xlTimeLeadingZero" => false,
    );

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var string TRUE/FALSE/NULL representation
     */
    protected $aBooleanRepresentation = array(
        "TRUE" => "PRAVDA",
        "FALSE" => "NEPRAVDA",
        "NULL" => "NULL",
    );

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NULL!",
        "DIV0" => "#D\u{11A}LENÍ_NULOU!",
        "VALUE" => "#HODNOTA!",
        "REF" => "#ODKAZ!",
        "NAME" => "#NÁZEV?",
        "NUM" => "#\u{10C}ÍSLO!",
        "NA" => "#NENÍ_K_DISPOZICI",
        "GETTINGDATA" => "#NA\u{10C}ÍTÁNÍ_DAT!",
        "SPILL" => "#P\u{158}ESAH_DAT!",
        "CONNECT" => "#P\u{158}IPOJIT!",
        "BLOCKED" => "#BLOKOVÁNO!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#BU\u{147}KA!",
        "CALC" => "#VÝPO\u{10C}ET!",
        "EXTERNAL" => "#EXTERNÍ!",
    );

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $functions_legacy = array(
        // Vyhledávací a odkazové funkce (Lookup and reference functions)
        "*RC" => "RC",
        "CHOOSECOLS" => "ZVOLITSLOUPCE",
        "CHOOSEROWS" => "ZVOLIT\u{158}ÁDKY",
        "DROP" => "ZAHODIT",
        "EXPAND" => "ROZBALIT",
        "HSTACK" => "SROVNAT.VODOROVN\u{11A}",
        "TAKE" => "VZÍT",
        "TOCOL" => "DO.SLOUPCE",
        "TOROW" => "DO.\u{158}ÁDKU",
        "VSTACK" => "SROVNAT.SVISLE",
        "WRAPCOLS" => "ZABALSLOUPCE",
        "WRAPROWS" => "ZABAL\u{158}ÁDKY",

        // Textové funkce (Text functions)
        "REPLACEB" => "NAHRADITB",
        "TEXTAFTER" => "TEXTZA",
        "TEXTBEFORE" => "TEXTP\u{158}ED",
        "TEXTSPLIT" => "ROZD\u{11A}LIT.TEXT",

        // Doplněk a automatizace (Add-in and automation)
        "CALL" => "VOLAT",
        "REGISTER.ID" => "P\u{158}IHLÁSIT.ID",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Databázové funkce (Database functions)
        "DAVERAGE" => "DPR\u{16E}M\u{11A}R",
        "DCOUNT" => "DPO\u{10C}ET",
        "DCOUNTA" => "DPO\u{10C}ET2",
        "DGET" => "DZÍSKAT",
        "DPRODUCT" => "DSOU\u{10C}IN",
        "DSTDEV" => "DSMODCH.VÝB\u{11A}R",
        "DSTDEVP" => "DSMODCH",
        "DSUM" => "DSUMA",
        "DVAR" => "DVAR.VÝB\u{11A}R",
        "DVARP" => "DVAR",

        // Funkce pro práci s datem a časem (Date and time functions)
        "DATE" => "DATUM",
        "DATEVALUE" => "DATUMHODN",
        "DAY" => "DEN",
        "DAYS360" => "ROK360",
        "HOUR" => "HODINA",
        "MINUTE" => "MINUTA",
        "MONTH" => "M\u{11A}SÍC",
        "NOW" => "NYNÍ",
        "SECOND" => "SEKUNDA",
        "TIME" => "\u{10C}AS",
        "TIMEVALUE" => "\u{10C}ASHODN",
        "TODAY" => "DNES",
        "WEEKDAY" => "DENTÝDNE",
        "YEAR" => "ROK",

        // Finanční funkce (Financial functions)
        "DB" => "ODPIS.ZRYCH",
        "DDB" => "ODPIS.ZRYCH2",
        "FV" => "BUDHODNOTA",
        "IPMT" => "PLATBA.ÚROK",
        "IRR" => "MÍRA.VÝNOSNOSTI",
        "MIRR" => "MOD.MÍRA.VÝNOSNOSTI",
        "NPER" => "PO\u{10C}ET.OBDOBÍ",
        "NPV" => "\u{10C}ISTÁ.SOU\u{10C}HODNOTA",
        "PMT" => "PLATBA",
        "PPMT" => "PLATBA.ZÁKLAD",
        "PV" => "SOU\u{10C}HODNOTA",
        "RATE" => "ÚROKOVÁ.MÍRA",
        "SLN" => "ODPIS.LIN",
        "SYD" => "ODPIS.NELIN",
        "VDB" => "ODPIS.ZA.INT",

        // Informační funkce (Information functions)
        "CELL" => "POLÍ\u{10C}KO",
        "ERROR.TYPE" => "CHYBA.TYP",
        "INFO" => "O.PROST\u{158}EDÍ",
        "ISBLANK" => "JE.PRÁZDNÉ",
        "ISERR" => "JE.CHYBA",
        "ISERROR" => "JE.CHYBHODN",
        "ISLOGICAL" => "JE.LOGHODN",
        "ISNA" => "JE.NEDEF",
        "ISNONTEXT" => "JE.NETEXT",
        "ISNUMBER" => "JE.\u{10C}ISLO",
        "ISREF" => "JE.ODKAZ",
        "ISTEXT" => "JE.TEXT",
        "NA" => "NEDEF",
        "TYPE" => "TYP",

        // Logické funkce (Logical functions)
        "AND" => "A",
        "IF" => "KDY\u{17D}",
        "NOT" => "NE",
        "OR" => "NEBO",

        // Vyhledávací a odkazové funkce (Lookup and reference functions)
        "*RC" => "RC",
        "ADDRESS" => "ODKAZ",
        "AREAS" => "PO\u{10C}ET.BLOK\u{16E}",
        "CHOOSE" => "ZVOLIT",
        "CHOOSECOLS" => "ZVOLITSLOUPCE",
        "CHOOSEROWS" => "ZVOLIT\u{158}ÁDKY",
        "COLUMN" => "SLOUPEC",
        "COLUMNS" => "SLOUPCE",
        "DROP" => "ZAHODIT",
        "EXPAND" => "ROZBALIT",
        "GETPIVOTDATA" => "ZÍSKATKONTDATA",
        "HLOOKUP" => "VVYHLEDAT",
        "HSTACK" => "SROVNAT.VODOROVN\u{11A}",
        "HYPERLINK" => "HYPERTEXTOVÝ.ODKAZ",
        "INDIRECT" => "NEP\u{158}ÍMÝ.ODKAZ",
        "LOOKUP" => "VYHLEDAT",
        "MATCH" => "POZVYHLEDAT",
        "OFFSET" => "POSUN",
        "ROW" => "\u{158}ÁDEK",
        "ROWS" => "\u{158}ÁDKY",
        "TAKE" => "VZÍT",
        "TOCOL" => "DO.SLOUPCE",
        "TOROW" => "DO.\u{158}ÁDKU",
        "TRANSPOSE" => "TRANSPOZICE",
        "VLOOKUP" => "SVYHLEDAT",
        "VSTACK" => "SROVNAT.SVISLE",
        "WRAPCOLS" => "ZABALSLOUPCE",
        "WRAPROWS" => "ZABAL\u{158}ÁDKY",

        // Matematické a trigonometrické funkce (Math and trigonometry functions)
        "ACOS" => "ARCCOS",
        "ACOSH" => "ARCCOSH",
        "ASIN" => "ARCSIN",
        "ASINH" => "ARCSINH",
        "ATAN" => "ARCTG",
        "ATAN2" => "ARCTG2",
        "ATANH" => "ARCTGH",
        "COMBIN" => "KOMBINACE",
        "EVEN" => "ZAOKROUHLIT.NA.SUDÉ",
        "FACT" => "FAKTORIÁL",
        "INT" => "CELÁ.\u{10C}ÁST",
        "LOG" => "LOGZ",
        "LOG10" => "LOG",
        "MDETERM" => "DETERMINANT",
        "MINVERSE" => "INVERZE",
        "MMULT" => "SOU\u{10C}IN.MATIC",
        "ODD" => "ZAOKROUHLIT.NA.LICHÉ",
        "PRODUCT" => "SOU\u{10C}IN",
        "RAND" => "NÁH\u{10C}ÍSLO",
        "ROUND" => "ZAOKROUHLIT",
        "SQRT" => "ODMOCNINA",
        "SUM" => "SUMA",
        "SUMPRODUCT" => "SOU\u{10C}IN.SKALÁRNÍ",
        "SUMSQ" => "SUMA.\u{10C}TVERC\u{16E}",
        "TAN" => "TG",
        "TANH" => "TGH",
        "TRUNC" => "USEKNOUT",

        // Statistické funkce (Statistical functions)
        "AVEDEV" => "PR\u{16E}MODCHYLKA",
        "AVERAGE" => "PR\u{16E}M\u{11A}R",
        "COUNT" => "PO\u{10C}ET",
        "COUNTA" => "PO\u{10C}ET2",
        "FREQUENCY" => "\u{10C}ETNOSTI",
        "GROWTH" => "LOGLINTREND",
        "LINEST" => "LINREGRESE",
        "LOGEST" => "LOGLINREGRESE",
        "PERCENTILE.EXC" => "PERCENTIL.EXC",
        "PERCENTILE.INC" => "PERCENTIL.INC",
        "PERMUT" => "PERMUTACE",
        "QUARTILE.EXC" => "QUARTIL.EXC",
        "QUARTILE.INC" => "QUARTIL.INC",
        "RSQ" => "RKQ",
        "STDEV.P" => "SMODCH.P",
        "STDEV.S" => "SMODCH.VÝB\u{11A}R.S",
        "TREND" => "LINTREND",

        // Textové funkce (Text functions)
        "CHAR" => "ZNAK",
        "CLEAN" => "VY\u{10C}ISTIT",
        "CODE" => "KÓD",
        "DOLLAR" => "K\u{10C}",
        "EXACT" => "STEJNÉ",
        "FIND" => "NAJÍT",
        "FIXED" => "ZAOKROUHLIT.NA.TEXT",
        "LEFT" => "ZLEVA",
        "LEN" => "DÉLKA",
        "LOWER" => "MALÁ",
        "MID" => "\u{10C}ÁST",
        "PHONETIC" => "ZVUKOVÉ",
        "PROPER" => "VELKÁ2",
        "REPLACE" => "NAHRADIT",
        "REPLACEB" => "NAHRADITB",
        "REPT" => "OPAKOVAT",
        "RIGHT" => "ZPRAVA",
        "SEARCH" => "HLEDAT",
        "SUBSTITUTE" => "DOSADIT",
        "TEXT" => "HODNOTA.NA.TEXT",
        "TEXTAFTER" => "TEXTZA",
        "TEXTBEFORE" => "TEXTP\u{158}ED",
        "TEXTSPLIT" => "ROZD\u{11A}LIT.TEXT",
        "TRIM" => "PRO\u{10C}ISTIT",
        "UPPER" => "VELKÁ",
        "VALUE" => "HODNOTA",

        // Kompatibilní funkce (Compatibility functions)
        "CEILING" => "ZAOKR.NAHORU",
        "FLOOR" => "ZAOKR.DOL\u{16E}",
        "PERCENTILE" => "PERCENTIL",
        "QUARTILE" => "QUARTIL",
        "STDEV" => "SMODCH.VÝB\u{11A}R",
        "STDEVP" => "SMODCH",
        "VAR" => "VAR.VÝB\u{11A}R",
        "VARP" => "VAR",

        // Doplněk a automatizace (Add-in and automation)
        "CALL" => "VOLAT",
        "REGISTER.ID" => "P\u{158}IHLÁSIT.ID",
    );

}
