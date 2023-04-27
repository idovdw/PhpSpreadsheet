<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Deutsch (German)
 */
class locale_de_de extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "de-de";

    /**
     * @var string International configuration
     */
    protected $aInternational = array(
        "xlCountryCode" => 49,
        "xlCountrySetting" => 49,
        "xlDecimalSeparator" => ",",
        "xlThousandsSeparator" => ".",
        "xlListSeparator" => ";",
        "xlUpperCaseRowLetter" => "Z",
        "xlUpperCaseColumnLetter" => "S",
        "xlLowerCaseRowLetter" => "z",
        "xlLowerCaseColumnLetter" => "s",
        "xlLeftBracket" => "(",
        "xlRightBracket" => ")",
        "xlLeftBrace" => "{",
        "xlRightBrace" => "}",
        "xlColumnSeparator" => ".",
        "xlRowSeparator" => ";",
        "xlAlternateArraySeparator" => "@",
        "xlDateSeparator" => ".",
        "xlTimeSeparator" => ":",
        "xlYearCode" => "J",
        "xlMonthCode" => "M",
        "xlDayCode" => "T",
        "xlHourCode" => "h",
        "xlMinuteCode" => "m",
        "xlSecondCode" => "s",
        "xlCurrencyCode" => "\u{20AC}",
        "xlGeneralFormatName" => "Standard",
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
        "xlTimeLeadingZero" => true,
    );

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var string TRUE/FALSE/NULL representation
     */
    protected $aBooleanRepresentation = array(
        "TRUE" => "WAHR",
        "FALSE" => "FALSCH",
        "NULL" => "NULL",
    );

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NULL!",
        "DIV0" => "#DIV/0!",
        "VALUE" => "#WERT!",
        "REF" => "#BEZUG!",
        "NAME" => "#NAME?",
        "NUM" => "#ZAHL!",
        "NA" => "#NV",
        "GETTINGDATA" => "#DATEN_ABRUFEN!",
        "SPILL" => "#ÜBERLAUF!",
        "CONNECT" => "#VERBINDEN!",
        "BLOCKED" => "#BLOCKIERT!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FELD!",
        "CALC" => "#KALK!",
        "EXTERNAL" => "#EXTERN!",
    );

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $functions_legacy = array(
        // Finanzfunktionen (Financial functions)
        "STOCKHISTORY" => "BÖRSENHISTORIE",

        // Informationsfunktionen (Information functions)
        "ISOMITTED" => "WURDEAUSGELASSEN",

        // Logische Funktionen (Logical functions)
        "BYCOL" => "NACHSPALTE",
        "BYROW" => "NACHZEILE",
        "MAKEARRAY" => "MATRIXERSTELLEN",

        // Such- und Verweisfunktionen (Lookup and reference functions)
        "*RC" => "ZS",
        "CHOOSECOLS" => "SPALTENWAHL",
        "CHOOSEROWS" => "ZEILENWAHL",
        "DROP" => "WEGLASSEN",
        "EXPAND" => "ERWEITERN",
        "HSTACK" => "HSTAPELN",
        "SORT" => "SORTIEREN",
        "SORTBY" => "SORTIERENNACH",
        "TAKE" => "ÜBERNEHMEN",
        "TOCOL" => "ZUSPALTE",
        "TOROW" => "ZUZEILE",
        "UNIQUE" => "EINDEUTIG",
        "VSTACK" => "VSTAPELN",
        "WRAPCOLS" => "SPALTENUMBRUCH",
        "WRAPROWS" => "ZEILENUMBRUCH",
        "XLOOKUP" => "XVERWEIS",
        "XMATCH" => "XVERGLEICH",

        // Mathematische und trigonometrische Funktionen (Math and trigonometry functions)
        "RANDARRAY" => "ZUFALLSMATRIX",
        "SEQUENCE" => "SEQUENZ",

        // Textfunktionen (Text functions)
        "ARRAYTOTEXT" => "MATRIXZUTEXT",
        "FINDB" => "FINDENB",
        "LEFTB" => "LINKSB",
        "LENB" => "LÄNGEB",
        "MIDB" => "TEILB",
        "REPLACEB" => "ERSETZENB",
        "RIGHTB" => "RECHTSB",
        "SEARCHB" => "SUCHENB",
        "TEXTAFTER" => "TEXTNACH",
        "TEXTBEFORE" => "TEXTVOR",
        "TEXTSPLIT" => "TEXTTEILEN",
        "VALUETOTEXT" => "WERTZUTEXT",

        // Add-In und Automatisierung (Add-in and automation)
        "CALL" => "AUFRUFEN",
        "REGISTER.ID" => "REGISTER.KENNUMMER",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Würfelfunktionen (Cube functions)
        "CUBEKPIMEMBER" => "CUBEKPIELEMENT",
        "CUBEMEMBER" => "CUBEELEMENT",
        "CUBEMEMBERPROPERTY" => "CUBEELEMENTEIGENSCHAFT",
        "CUBERANKEDMEMBER" => "CUBERANGELEMENT",
        "CUBESET" => "CUBEMENGE",
        "CUBESETCOUNT" => "CUBEMENGENANZAHL",
        "CUBEVALUE" => "CUBEWERT",

        // Datenbankfunktionen (Database functions)
        "DAVERAGE" => "DBMITTELWERT",
        "DCOUNT" => "DBANZAHL",
        "DCOUNTA" => "DBANZAHL2",
        "DGET" => "DBAUSZUG",
        "DMAX" => "DBMAX",
        "DMIN" => "DBMIN",
        "DPRODUCT" => "DBPRODUKT",
        "DSTDEV" => "DBSTDABW",
        "DSTDEVP" => "DBSTDABWN",
        "DSUM" => "DBSUMME",
        "DVAR" => "DBVARIANZ",
        "DVARP" => "DBVARIANZEN",

        // Datums- und Uhrzeitfunktionen (Date and time functions)
        "DATE" => "DATUM",
        "DATEVALUE" => "DATWERT",
        "DAY" => "TAG",
        "DAYS" => "TAGE",
        "DAYS360" => "TAGE360",
        "EDATE" => "EDATUM",
        "EOMONTH" => "MONATSENDE",
        "HOUR" => "STUNDE",
        "ISOWEEKNUM" => "ISOKALENDERWOCHE",
        "MONTH" => "MONAT",
        "NETWORKDAYS" => "NETTOARBEITSTAGE",
        "NETWORKDAYS.INTL" => "NETTOARBEITSTAGE.INTL",
        "NOW" => "JETZT",
        "SECOND" => "SEKUNDE",
        "THAIDAYOFWEEK" => "THAIWOCHENTAG",
        "THAIMONTHOFYEAR" => "THAIMONATDESJAHRES",
        "THAIYEAR" => "THAIJAHR",
        "TIME" => "ZEIT",
        "TIMEVALUE" => "ZEITWERT",
        "TODAY" => "HEUTE",
        "WEEKDAY" => "WOCHENTAG",
        "WEEKNUM" => "KALENDERWOCHE",
        "WORKDAY" => "ARBEITSTAG",
        "WORKDAY.INTL" => "ARBEITSTAG.INTL",
        "YEAR" => "JAHR",
        "YEARFRAC" => "BRTEILJAHRE",

        // Technische Funktionen (Engineering functions)
        "BIN2DEC" => "BININDEZ",
        "BIN2HEX" => "BININHEX",
        "BIN2OCT" => "BININOKT",
        "BITAND" => "BITUND",
        "BITLSHIFT" => "BITLVERSCHIEB",
        "BITOR" => "BITODER",
        "BITRSHIFT" => "BITRVERSCHIEB",
        "BITXOR" => "BITXODER",
        "COMPLEX" => "KOMPLEXE",
        "CONVERT" => "UMWANDELN",
        "DEC2BIN" => "DEZINBIN",
        "DEC2HEX" => "DEZINHEX",
        "DEC2OCT" => "DEZINOKT",
        "ERF" => "GAUSSFEHLER",
        "ERF.PRECISE" => "GAUSSF.GENAU",
        "ERFC" => "GAUSSFKOMPL",
        "ERFC.PRECISE" => "GAUSSFKOMPL.GENAU",
        "GESTEP" => "GGANZZAHL",
        "HEX2BIN" => "HEXINBIN",
        "HEX2DEC" => "HEXINDEZ",
        "HEX2OCT" => "HEXINOKT",
        "IMAGINARY" => "IMAGINÄRTEIL",
        "IMCONJUGATE" => "IMKONJUGIERTE",
        "IMCOSH" => "IMCOSHYP",
        "IMCSC" => "IMCOSEC",
        "IMCSCH" => "IMCOSECHYP",
        "IMPOWER" => "IMAPOTENZ",
        "IMPRODUCT" => "IMPRODUKT",
        "IMREAL" => "IMREALTEIL",
        "IMSECH" => "IMSECHYP",
        "IMSINH" => "IMSINHYP",
        "IMSQRT" => "IMWURZEL",
        "IMSUM" => "IMSUMME",
        "OCT2BIN" => "OKTINBIN",
        "OCT2DEC" => "OKTINDEZ",
        "OCT2HEX" => "OKTINHEX",

        // Finanzfunktionen (Financial functions)
        "ACCRINT" => "AUFGELZINS",
        "ACCRINTM" => "AUFGELZINSF",
        "AMORDEGRC" => "AMORDEGRK",
        "AMORLINC" => "AMORLINEARK",
        "COUPDAYBS" => "ZINSTERMTAGVA",
        "COUPDAYS" => "ZINSTERMTAGE",
        "COUPDAYSNC" => "ZINSTERMTAGNZ",
        "COUPNCD" => "ZINSTERMNZ",
        "COUPNUM" => "ZINSTERMZAHL",
        "COUPPCD" => "ZINSTERMVZ",
        "CUMIPMT" => "KUMZINSZ",
        "CUMPRINC" => "KUMKAPITAL",
        "DB" => "GDA2",
        "DDB" => "GDA",
        "DISC" => "DISAGIO",
        "DOLLARDE" => "NOTIERUNGDEZ",
        "DOLLARFR" => "NOTIERUNGBRU",
        "EFFECT" => "EFFEKTIV",
        "FV" => "ZW",
        "FVSCHEDULE" => "ZW2",
        "INTRATE" => "ZINSSATZ",
        "IPMT" => "ZINSZ",
        "IRR" => "IKV",
        "MIRR" => "QIKV",
        "NPER" => "ZZR",
        "NPV" => "NBW",
        "ODDFPRICE" => "UNREGER.KURS",
        "ODDFYIELD" => "UNREGER.REND",
        "ODDLPRICE" => "UNREGLE.KURS",
        "ODDLYIELD" => "UNREGLE.REND",
        "PMT" => "RMZ",
        "PPMT" => "KAPZ",
        "PRICE" => "KURS",
        "PRICEDISC" => "KURSDISAGIO",
        "PRICEMAT" => "KURSFÄLLIG",
        "PV" => "BW",
        "RATE" => "ZINS",
        "RECEIVED" => "AUSZAHLUNG",
        "RRI" => "ZSATZINVEST",
        "SLN" => "LIA",
        "STOCKHISTORY" => "BÖRSENHISTORIE",
        "SYD" => "DIA",
        "TBILLEQ" => "TBILLÄQUIV",
        "TBILLPRICE" => "TBILLKURS",
        "TBILLYIELD" => "TBILLRENDITE",
        "XIRR" => "XINTZINSFUSS",
        "XNPV" => "XKAPITALWERT",
        "YIELD" => "RENDITE",
        "YIELDDISC" => "RENDITEDIS",
        "YIELDMAT" => "RENDITEFÄLL",

        // Informationsfunktionen (Information functions)
        "CELL" => "ZELLE",
        "ERROR.TYPE" => "FEHLER.TYP",
        "ISBLANK" => "ISTLEER",
        "ISERR" => "ISTFEHL",
        "ISERROR" => "ISTFEHLER",
        "ISEVEN" => "ISTGERADE",
        "ISFORMULA" => "ISTFORMEL",
        "ISLOGICAL" => "ISTLOG",
        "ISNA" => "ISTNV",
        "ISNONTEXT" => "ISTKTEXT",
        "ISNUMBER" => "ISTZAHL",
        "ISODD" => "ISTUNGERADE",
        "ISOMITTED" => "WURDEAUSGELASSEN",
        "ISREF" => "ISTBEZUG",
        "ISTEXT" => "ISTTEXT",
        "NA" => "NV",
        "SHEET" => "BLATT",
        "SHEETS" => "BLÄTTER",
        "TYPE" => "TYP",

        // Logische Funktionen (Logical functions)
        "AND" => "UND",
        "BYCOL" => "NACHSPALTE",
        "BYROW" => "NACHZEILE",
        "IF" => "WENN",
        "IFERROR" => "WENNFEHLER",
        "IFNA" => "WENNNV",
        "IFS" => "WENNS",
        "MAKEARRAY" => "MATRIXERSTELLEN",
        "NOT" => "NICHT",
        "OR" => "ODER",
        "SWITCH" => "ERSTERWERT",
        "XOR" => "XODER",

        // Such- und Verweisfunktionen (Lookup and reference functions)
        "*RC" => "ZS",
        "ADDRESS" => "ADRESSE",
        "AREAS" => "BEREICHE",
        "CHOOSE" => "WAHL",
        "CHOOSECOLS" => "SPALTENWAHL",
        "CHOOSEROWS" => "ZEILENWAHL",
        "COLUMN" => "SPALTE",
        "COLUMNS" => "SPALTEN",
        "DROP" => "WEGLASSEN",
        "EXPAND" => "ERWEITERN",
        "FORMULATEXT" => "FORMELTEXT",
        "GETPIVOTDATA" => "PIVOTDATENZUORDNEN",
        "HLOOKUP" => "WVERWEIS",
        "HSTACK" => "HSTAPELN",
        "INDIRECT" => "INDIREKT",
        "LOOKUP" => "VERWEIS",
        "MATCH" => "VERGLEICH",
        "OFFSET" => "BEREICH.VERSCHIEBEN",
        "ROW" => "ZEILE",
        "ROWS" => "ZEILEN",
        "SORT" => "SORTIEREN",
        "SORTBY" => "SORTIERENNACH",
        "TAKE" => "ÜBERNEHMEN",
        "TOCOL" => "ZUSPALTE",
        "TOROW" => "ZUZEILE",
        "TRANSPOSE" => "MTRANS",
        "UNIQUE" => "EINDEUTIG",
        "VLOOKUP" => "SVERWEIS",
        "VSTACK" => "VSTAPELN",
        "WRAPCOLS" => "SPALTENUMBRUCH",
        "WRAPROWS" => "ZEILENUMBRUCH",
        "XLOOKUP" => "XVERWEIS",
        "XMATCH" => "XVERGLEICH",

        // Mathematische und trigonometrische Funktionen (Math and trigonometry functions)
        "ACOS" => "ARCCOS",
        "ACOSH" => "ARCCOSHYP",
        "ACOT" => "ARCCOT",
        "ACOTH" => "ARCCOTHYP",
        "AGGREGATE" => "AGGREGAT",
        "ARABIC" => "ARABISCH",
        "ASIN" => "ARCSIN",
        "ASINH" => "ARCSINHYP",
        "ATAN" => "ARCTAN",
        "ATAN2" => "ARCTAN2",
        "ATANH" => "ARCTANHYP",
        "BASE" => "BASIS",
        "CEILING.MATH" => "OBERGRENZE.MATHEMATIK",
        "CEILING.PRECISE" => "OBERGRENZE.GENAU",
        "COMBIN" => "KOMBINATIONEN",
        "COMBINA" => "KOMBINATIONEN2",
        "COSH" => "COSHYP",
        "COTH" => "COTHYP",
        "CSC" => "COSEC",
        "CSCH" => "COSECHYP",
        "DECIMAL" => "DEZIMAL",
        "DEGREES" => "GRAD",
        "ECMA.CEILING" => "ECMA.OBERGRENZE",
        "EVEN" => "GERADE",
        "FACT" => "FAKULTÄT",
        "FACTDOUBLE" => "ZWEIFAKULTÄT",
        "FLOOR.MATH" => "UNTERGRENZE.MATHEMATIK",
        "FLOOR.PRECISE" => "UNTERGRENZE.GENAU",
        "GCD" => "GGT",
        "INT" => "GANZZAHL",
        "ISO.CEILING" => "ISO.OBERGRENZE",
        "LCM" => "KGV",
        "MDETERM" => "MDET",
        "MINVERSE" => "MINV",
        "MOD" => "REST",
        "MROUND" => "VRUNDEN",
        "MULTINOMIAL" => "POLYNOMIAL",
        "MUNIT" => "MEINHEIT",
        "ODD" => "UNGERADE",
        "POWER" => "POTENZ",
        "PRODUCT" => "PRODUKT",
        "RADIANS" => "BOGENMASS",
        "RAND" => "ZUFALLSZAHL",
        "RANDARRAY" => "ZUFALLSMATRIX",
        "RANDBETWEEN" => "ZUFALLSBEREICH",
        "ROMAN" => "RÖMISCH",
        "ROUND" => "RUNDEN",
        "ROUNDBAHTDOWN" => "BAHTABRUNDEN",
        "ROUNDBAHTUP" => "BAHTAUFRUNDEN",
        "ROUNDDOWN" => "ABRUNDEN",
        "ROUNDUP" => "AUFRUNDEN",
        "SECH" => "SECHYP",
        "SEQUENCE" => "SEQUENZ",
        "SERIESSUM" => "POTENZREIHE",
        "SIGN" => "VORZEICHEN",
        "SINH" => "SINHYP",
        "SQRT" => "WURZEL",
        "SQRTPI" => "WURZELPI",
        "SUBTOTAL" => "TEILERGEBNIS",
        "SUM" => "SUMME",
        "SUMIF" => "SUMMEWENN",
        "SUMIFS" => "SUMMEWENNS",
        "SUMPRODUCT" => "SUMMENPRODUKT",
        "SUMSQ" => "QUADRATESUMME",
        "SUMX2MY2" => "SUMMEX2MY2",
        "SUMX2PY2" => "SUMMEX2PY2",
        "SUMXMY2" => "SUMMEXMY2",
        "TANH" => "TANHYP",
        "TRUNC" => "KÜRZEN",

        // Statistische Funktionen (Statistical functions)
        "AVEDEV" => "MITTELABW",
        "AVERAGE" => "MITTELWERT",
        "AVERAGEA" => "MITTELWERTA",
        "AVERAGEIF" => "MITTELWERTWENN",
        "AVERAGEIFS" => "MITTELWERTWENNS",
        "BETA.DIST" => "BETA.VERT",
        "BINOM.DIST" => "BINOM.VERT",
        "BINOM.DIST.RANGE" => "BINOM.VERT.BEREICH",
        "CHISQ.DIST" => "CHIQU.VERT",
        "CHISQ.DIST.RT" => "CHIQU.VERT.RE",
        "CHISQ.INV" => "CHIQU.INV",
        "CHISQ.INV.RT" => "CHIQU.INV.RE",
        "CHISQ.TEST" => "CHIQU.TEST",
        "CONFIDENCE.NORM" => "KONFIDENZ.NORM",
        "CONFIDENCE.T" => "KONFIDENZ.T",
        "CORREL" => "KORREL",
        "COUNT" => "ANZAHL",
        "COUNTA" => "ANZAHL2",
        "COUNTBLANK" => "ANZAHLLEEREZELLEN",
        "COUNTIF" => "ZÄHLENWENN",
        "COUNTIFS" => "ZÄHLENWENNS",
        "COVARIANCE.P" => "KOVARIANZ.P",
        "COVARIANCE.S" => "KOVARIANZ.S",
        "DEVSQ" => "SUMQUADABW",
        "EXPON.DIST" => "EXPON.VERT",
        "F.DIST" => "F.VERT",
        "F.DIST.RT" => "F.VERT.RE",
        "F.INV.RT" => "F.INV.RE",
        "FORECAST.ETS" => "PROGNOSE.ETS",
        "FORECAST.ETS.CONFINT" => "PROGNOSE.ETS.KONFINT",
        "FORECAST.ETS.SEASONALITY" => "PROGNOSE.ETS.SAISONALITÄT",
        "FORECAST.ETS.STAT" => "PROGNOSE.ETS.STAT",
        "FORECAST.LINEAR" => "PROGNOSE.LINEAR",
        "FREQUENCY" => "HÄUFIGKEIT",
        "GAMMA.DIST" => "GAMMA.VERT",
        "GAMMALN.PRECISE" => "GAMMALN.GENAU",
        "GEOMEAN" => "GEOMITTEL",
        "GROWTH" => "VARIATION",
        "HARMEAN" => "HARMITTEL",
        "HYPGEOM.DIST" => "HYPGEOM.VERT",
        "INTERCEPT" => "ACHSENABSCHNITT",
        "LARGE" => "KGRÖSSTE",
        "LINEST" => "RGP",
        "LOGEST" => "RKP",
        "LOGNORM.DIST" => "LOGNORM.VERT",
        "MAXIFS" => "MAXWENNS",
        "MINIFS" => "MINWENNS",
        "MODE.MULT" => "MODUS.VIELF",
        "MODE.SNGL" => "MODUS.EINF",
        "NEGBINOM.DIST" => "NEGBINOM.VERT",
        "NORM.DIST" => "NORM.VERT",
        "NORM.S.DIST" => "NORM.S.VERT",
        "PERCENTILE.EXC" => "QUANTIL.EXKL",
        "PERCENTILE.INC" => "QUANTIL.INKL",
        "PERCENTRANK.EXC" => "QUANTILSRANG.EXKL",
        "PERCENTRANK.INC" => "QUANTILSRANG.INKL",
        "PERMUT" => "VARIATIONEN",
        "PERMUTATIONA" => "VARIATIONEN2",
        "POISSON.DIST" => "POISSON.VERT",
        "PROB" => "WAHRSCHBEREICH",
        "QUARTILE.EXC" => "QUARTILE.EXKL",
        "QUARTILE.INC" => "QUARTILE.INKL",
        "RANK.AVG" => "RANG.MITTELW",
        "RANK.EQ" => "RANG.GLEICH",
        "RSQ" => "BESTIMMTHEITSMASS",
        "SKEW" => "SCHIEFE",
        "SKEW.P" => "SCHIEFE.P",
        "SLOPE" => "STEIGUNG",
        "SMALL" => "KKLEINSTE",
        "STANDARDIZE" => "STANDARDISIERUNG",
        "STDEV.P" => "STABW.N",
        "STDEV.S" => "STABW.S",
        "STDEVA" => "STABWA",
        "STDEVPA" => "STABWNA",
        "STEYX" => "STFEHLERYX",
        "T.DIST" => "T.VERT",
        "T.DIST.2T" => "T.VERT.2S",
        "T.DIST.RT" => "T.VERT.RE",
        "T.INV.2T" => "T.INV.2S",
        "TRIMMEAN" => "GESTUTZTMITTEL",
        "VARA" => "VARIANZA",
        "VARPA" => "VARIANZENA",
        "WEIBULL.DIST" => "WEIBULL.VERT",
        "Z.TEST" => "G.TEST",

        // Textfunktionen (Text functions)
        "ARRAYTOTEXT" => "MATRIXZUTEXT",
        "CHAR" => "ZEICHEN",
        "CLEAN" => "SÄUBERN",
        "CONCAT" => "TEXTKETTE",
        "DOLLAR" => "DM",
        "EXACT" => "IDENTISCH",
        "FIND" => "FINDEN",
        "FINDB" => "FINDENB",
        "FIXED" => "FEST",
        "ISTHAIDIGIT" => "ISTTHAIZAHLENWORT",
        "LEFT" => "LINKS",
        "LEFTB" => "LINKSB",
        "LEN" => "LÄNGE",
        "LENB" => "LÄNGEB",
        "LOWER" => "KLEIN",
        "MID" => "TEIL",
        "MIDB" => "TEILB",
        "NUMBERVALUE" => "ZAHLENWERT",
        "PROPER" => "GROSS2",
        "REPLACE" => "ERSETZEN",
        "REPLACEB" => "ERSETZENB",
        "REPT" => "WIEDERHOLEN",
        "RIGHT" => "RECHTS",
        "RIGHTB" => "RECHTSB",
        "SEARCH" => "SUCHEN",
        "SEARCHB" => "SUCHENB",
        "SUBSTITUTE" => "WECHSELN",
        "TEXTAFTER" => "TEXTNACH",
        "TEXTBEFORE" => "TEXTVOR",
        "TEXTJOIN" => "TEXTVERKETTEN",
        "TEXTSPLIT" => "TEXTTEILEN",
        "THAIDIGIT" => "THAIZAHLENWORT",
        "THAINUMSOUND" => "THAIZAHLSOUND",
        "THAINUMSTRING" => "THAIZAHLZEICHENFOLGE",
        "THAISTRINGLENGTH" => "THAIZEICHENFOLGENLÄNGE",
        "TRIM" => "GLÄTTEN",
        "UNICHAR" => "UNIZEICHEN",
        "UPPER" => "GROSS",
        "VALUE" => "WERT",
        "VALUETOTEXT" => "WERTZUTEXT",

        // Webfunktionen (Web functions)
        "ENCODEURL" => "URLCODIEREN",
        "FILTERXML" => "XMLFILTERN",
        "WEBSERVICE" => "WEBDIENST",

        // Kompatibilitätsfunktionen (Compatibility functions)
        "BETADIST" => "BETAVERT",
        "BINOMDIST" => "BINOMVERT",
        "CEILING" => "OBERGRENZE",
        "CHIDIST" => "CHIVERT",
        "CONCATENATE" => "VERKETTEN",
        "CONFIDENCE" => "KONFIDENZ",
        "COVAR" => "KOVAR",
        "CRITBINOM" => "KRITBINOM",
        "EXPONDIST" => "EXPONVERT",
        "FDIST" => "FVERT",
        "FLOOR" => "UNTERGRENZE",
        "FORECAST" => "SCHÄTZER",
        "GAMMADIST" => "GAMMAVERT",
        "HYPGEOMDIST" => "HYPGEOMVERT",
        "LOGNORMDIST" => "LOGNORMVERT",
        "MODE" => "MODALWERT",
        "NEGBINOMDIST" => "NEGBINOMVERT",
        "NORMDIST" => "NORMVERT",
        "NORMSDIST" => "STANDNORMVERT",
        "NORMSINV" => "STANDNORMINV",
        "PERCENTILE" => "QUANTIL",
        "PERCENTRANK" => "QUANTILSRANG",
        "RANK" => "RANG",
        "STDEV" => "STABW",
        "STDEVP" => "STABWN",
        "TDIST" => "TVERT",
        "VAR" => "VARIANZ",
        "VARP" => "VARIANZEN",
        "ZTEST" => "GTEST",

        // Add-In und Automatisierung (Add-in and automation)
        "CALL" => "AUFRUFEN",
        "REGISTER.ID" => "REGISTER.KENNUMMER",
    );

}
