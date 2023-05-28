<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for Català / Catalan (Spain).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleCAxES extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'ca-es';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 34,
        'xlCountrySetting' => 34,
        'xlDecimalSeparator' => ',',
        'xlThousandsSeparator' => '.',
        'xlListSeparator' => ';',
        'xlUpperCaseRowLetter' => 'F',
        'xlUpperCaseColumnLetter' => 'C',
        'xlLowerCaseRowLetter' => 'f',
        'xlLowerCaseColumnLetter' => 'c',
        'xlLeftBracket' => '[',
        'xlRightBracket' => ']',
        'xlLeftBrace' => '{',
        'xlRightBrace' => '}',
        'xlColumnSeparator' => '\\',
        'xlRowSeparator' => ';',
        'xlAlternateArraySeparator' => '@',
        'xlDateSeparator' => '/',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'a',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{20AC}",
        'xlGeneralFormatName' => 'Estándar',
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 1,
        'xlNoncurrencyDigits' => 2,
        'xlMonthNameChars' => 3,
        'xlWeekdayNameChars' => 3,
        'xlDateOrder' => 1,
        'xl24HourClock' => true,
        'xlNonEnglishFunctions' => true,
        'xlMetric' => true,
        'xlCurrencySpaceBefore' => true,
        'xlCurrencyBefore' => false,
        'xlCurrencyMinusSign' => true,
        'xlCurrencyTrailingZeros' => true,
        'xlCurrencyLeadingZeros' => true,
        'xlMonthLeadingZero' => false,
        'xlDayLeadingZero' => false,
        'xl4DigitYears' => true,
        'xlMDY' => false,
        'xlTimeLeadingZero' => false,
    ];

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ';';

    /**
     * @var array<string, string> TRUE/FALSE/NULL representation
     */
    protected $aBooleanRepresentation = [
        'TRUE' => 'CERT',
        'FALSE' => 'FALS',
        'NULL' => 'NULL',
    ];

    /**
     * @var array<string,string> Error codes - Current
     */
    protected $aErrorCodesCurrent = [
        'NULL' => '#NUL!',
        'DIV0' => '#DIV/0!',
        'VALUE' => '#VALOR!',
        'REF' => '#REF!',
        'NAME' => '#NOM?',
        'NUM' => '#NÚM!',
        'NA' => '#N/D',
        'GETTINGDATA' => '#OBTENINT_DADES!',
        'SPILL' => '#DESBORDAMENT!',
        'CONNECT' => '#CONNECTA!',
        'BLOCKED' => '#BLOQUEJAT!',
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#CAMP!',
        'CALC' => '#CALC!',
        'EXTERNAL' => '#EXTERN!',
    ];

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $aFunctionsLegacy = [
        // Funcions de data i hora (Date and time functions)
        'DATEDIF' => 'DIFDATA',

        // Funcions financeres (Financial functions)
        'STOCKHISTORY' => 'HISTORIALDECOTITZACIONS',

        // Funcions lògiques (Logical functions)
        'BYCOL' => 'PERCOL',
        'BYROW' => 'PERFILA',

        // Funcions de cerca i referència (Lookup and reference functions)
        '*RC' => 'FC',
        'CHOOSECOLS' => 'TRIACOL',
        'CHOOSEROWS' => 'TRIAFILES',
        'DROP' => 'EXCLOU',
        'EXPAND' => 'EXPANDEIX',
        'FILTER' => 'FILTRA',
        'HSTACK' => 'APILAH',
        'SORT' => 'ORDENA',
        'SORTBY' => 'ORDENAPER',
        'TAKE' => 'PREN',
        'TOCOL' => 'ACOL',
        'TOROW' => 'AFILA',
        'UNIQUE' => 'ÚNICS',
        'VSTACK' => 'APILAV',
        'WRAPCOLS' => 'AJUSTACOL',
        'WRAPROWS' => 'AJUSTAFILES',

        // Funcions matemàtiques i trigonomètriques (Math and trigonometry functions)
        'RANDARRAY' => 'MATRIUALEAT',
        'SEQUENCE' => 'SEQÜÈNCIA',

        // Funcions de text (Text functions)
        'ARRAYTOTEXT' => 'MATRIUATEXT',
        'FINDB' => 'BUSCAB',
        'LEFTB' => 'ESQUERRAB',
        'LENB' => 'LLARGB',
        'MIDB' => 'MIGB',
        'REPLACEB' => 'SUBSTITUEIXB',
        'RIGHTB' => 'DRETAB',
        'SEARCHB' => 'CERCAB',
        'TEXTAFTER' => 'TEXTDESPRES',
        'TEXTBEFORE' => 'TEXTABANS',
        'TEXTSPLIT' => 'DIVIDEIXTEXT',
        'VALUETOTEXT' => 'VALORATEXT',
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $aFunctionsCurrent = [
        // Funcions de cub (Cube functions)
        'CUBEKPIMEMBER' => 'MEMBREKPICUB',
        'CUBEMEMBER' => 'MEMBRECUB',
        'CUBEMEMBERPROPERTY' => 'PROPIETATMEMBRECUB',
        'CUBERANKEDMEMBER' => 'MEMBRERANGCUB',
        'CUBESET' => 'CONJUNTCUB',
        'CUBESETCOUNT' => 'COMPTECONJUNTCUB',
        'CUBEVALUE' => 'VALORCUB',

        // Funcions de base de dades (Database functions)
        'DAVERAGE' => 'BDMITJANA',
        'DCOUNT' => 'BDCOMPT',
        'DCOUNTA' => 'BDCOMPTAA',
        'DGET' => 'BEXTREU',
        'DMAX' => 'BDMAX',
        'DMIN' => 'BDMIN',
        'DPRODUCT' => 'BDPRODUCTE',
        'DSTDEV' => 'BDDESVEST',
        'DSTDEVP' => 'BDDESVESTP',
        'DSUM' => 'BDSUMA',
        'DVAR' => 'BDVAR',
        'DVARP' => 'BDVARP',

        // Funcions de data i hora (Date and time functions)
        'DATE' => 'DATA',
        'DATEDIF' => 'DIFDATA',
        'DATESTRING' => 'CADENA.DATA',
        'DATEVALUE' => 'VALDATA',
        'DAY' => 'DIA',
        'DAYS' => 'DIES',
        'DAYS360' => 'DIES360',
        'EDATE' => 'FECHA.MES',
        'EOMONTH' => 'FIN.MES',
        'HOUR' => 'HORA',
        'ISOWEEKNUM' => 'NUM.DE.SEMANA.ISO',
        'MINUTE' => 'MINUT',
        'MONTH' => 'MES',
        'NETWORKDAYS' => 'DIAS.LAB',
        'NETWORKDAYS.INTL' => 'DIES.LAB.INTL',
        'NOW' => 'ACTUAL',
        'SECOND' => 'SEGON',
        'THAIDAYOFWEEK' => 'DIASEMTAI',
        'THAIMONTHOFYEAR' => 'MESANYTAI',
        'THAIYEAR' => 'ANYTAI',
        'TIME' => 'TEMPS',
        'TIMEVALUE' => 'VALHORA',
        'TODAY' => 'AVUI',
        'WEEKDAY' => 'DIASETM',
        'WEEKNUM' => 'NUM.DE.SEMANA',
        'WORKDAY' => 'DIA.LAB',
        'WORKDAY.INTL' => 'DIA.LAB.INTL',
        'YEAR' => 'ANY',
        'YEARFRAC' => 'FRAC.AÑO',

        // Funcions d\'enginyeria (Engineering functions)
        'BIN2DEC' => 'BIN.A.DEC',
        'BIN2HEX' => 'BIN.A.HEX',
        'BIN2OCT' => 'BIN.A.OCT',
        'BITAND' => 'BIT.I',
        'BITLSHIFT' => 'DESPLESQBIT',
        'BITOR' => 'BIT.O',
        'BITRSHIFT' => 'DESPLDERBIT',
        'BITXOR' => 'BIT.OEXC',
        'DEC2BIN' => 'DEC.A.BIN',
        'DEC2HEX' => 'DEC.A.HEX',
        'DEC2OCT' => 'DEC.A.OCT',
        'ERF' => 'FUN.ERROR',
        'ERF.PRECISE' => 'FUNC.ERROR.EXACTE',
        'ERFC' => 'FUN.ERROR.COMPL',
        'ERFC.PRECISE' => 'FUNC.ERROR.COMPL.EXACTE',
        'GESTEP' => 'MAYOR.O.IGUAL',
        'HEX2BIN' => 'HEX.A.BIN',
        'HEX2DEC' => 'HEX.A.DEC',
        'HEX2OCT' => 'HEX.A.OCT',
        'IMABS' => 'IM.ABS',
        'IMAGINARY' => 'IMAGINARIO',
        'IMARGUMENT' => 'IM.ANGULO',
        'IMCONJUGATE' => 'IM.CONJUGADA',
        'IMCOS' => 'IM.COS',
        'IMCOSH' => 'IM.COSH',
        'IMCOT' => 'IM.COT',
        'IMCSC' => 'IM.CSC',
        'IMCSCH' => 'IM.CSCH',
        'IMDIV' => 'IM.DIV',
        'IMEXP' => 'IM.EXP',
        'IMLN' => 'IM.LN',
        'IMLOG10' => 'IM.LOG10',
        'IMLOG2' => 'IM.LOG2',
        'IMPOWER' => 'IM.POT',
        'IMPRODUCT' => 'IM.PRODUCT',
        'IMREAL' => 'IM.REAL',
        'IMSEC' => 'IM.SEC',
        'IMSECH' => 'IM.SECH',
        'IMSIN' => 'IM.SIN',
        'IMSINH' => 'IM.SINH',
        'IMSQRT' => 'IM.ARREL2',
        'IMSUB' => 'IM.SUSTR',
        'IMSUM' => 'IM.SUM',
        'IMTAN' => 'IM.TAN',
        'OCT2BIN' => 'OCT.A.BIN',
        'OCT2DEC' => 'OCT.A.DEC',
        'OCT2HEX' => 'OCT.A.HEX',

        // Funcions financeres (Financial functions)
        'ACCRINT' => 'INT.ACUM',
        'ACCRINTM' => 'INT.ACUM.V',
        'AMORDEGRC' => 'AMORTITZ.PROGRE',
        'AMORLINC' => 'AMORTITZ.LIN',
        'COUPDAYBS' => 'CUPON.DIAS.L1',
        'COUPDAYS' => 'CUPON.DIAS',
        'COUPDAYSNC' => 'CUPON.DIAS.L2',
        'COUPNCD' => 'CUPON.FECHA.L2',
        'COUPNUM' => 'CUPON.NUM',
        'COUPPCD' => 'CUPON.FECHA.L1',
        'CUMIPMT' => 'PAGO.INT.ENTRE',
        'CUMPRINC' => 'PAGO.PRINC.ENTRE',
        'DDB' => 'DDD',
        'DISC' => 'TASA.DESC',
        'DOLLARDE' => 'MONEDA.DEC',
        'DOLLARFR' => 'MONEDA.FRAC',
        'DURATION' => 'DURACION',
        'EFFECT' => 'INT.EFECTIVO',
        'FV' => 'VF',
        'FVSCHEDULE' => 'VF.PLAN',
        'INTRATE' => 'TASA.INT',
        'IPMT' => 'PAGI',
        'IRR' => 'TIR',
        'ISPMT' => 'INT.PAG.DIR',
        'MDURATION' => 'DURACION.MODIF',
        'MIRR' => 'TIRM',
        'NOMINAL' => 'TASA.NOMINAL',
        'NPV' => 'VAN',
        'ODDFPRICE' => 'PRECIO.PER.IRREGULAR.1',
        'ODDFYIELD' => 'RENDTO.PER.IRREGULAR.1',
        'ODDLPRICE' => 'PRECIO.PER.IRREGULAR.2',
        'ODDLYIELD' => 'RENDTO.PER.IRREGULAR.2',
        'PDURATION' => 'DURACION.P',
        'PMT' => 'PAGAMENT',
        'PPMT' => 'PAGPRIN',
        'PRICE' => 'PRECIO',
        'PRICEDISC' => 'PRECIO.DESCUENTO',
        'PRICEMAT' => 'PRECIO.VENCIMIENTO',
        'PV' => 'VP',
        'RATE' => 'TAXA',
        'RECEIVED' => 'CANTIDAD.RECIBIDA',
        'RRI' => 'RIR',
        'STOCKHISTORY' => 'HISTORIALDECOTITZACIONS',
        'SYD' => 'DMA',
        'TBILLEQ' => 'LETRA.DE.TES.EQV.A.BONO',
        'TBILLPRICE' => 'LETRA.DE.TES.PRECIO',
        'TBILLYIELD' => 'LETRA.DE.TES.RENDTO',
        'VDB' => 'DVS',
        'XIRR' => 'TIR.NO.PER',
        'XNPV' => 'VNA.NO.PER',
        'YIELD' => 'RENDTO',
        'YIELDDISC' => 'RENDTO.DESC',
        'YIELDMAT' => 'RENDTO.VENCTO',

        // Funcions d\'informació (Information functions)
        'CELL' => 'CEL',
        'ERROR.TYPE' => 'TIPUS.ERROR',
        'ISBLANK' => 'ESBLANC',
        'ISERR' => 'ESERR',
        'ISERROR' => 'ESERROR',
        'ISEVEN' => 'ES.PAR',
        'ISFORMULA' => 'ESFORMULA',
        'ISLOGICAL' => 'ESLOGIC',
        'ISNA' => 'ESND',
        'ISNONTEXT' => 'ESNOTEXT',
        'ISNUMBER' => 'ESNUM',
        'ISODD' => 'ES.IMPAR',
        'ISREF' => 'ESREF',
        'ISTEXT' => 'ESTEXT',
        'NA' => 'ND',
        'SHEET' => 'FULL',
        'SHEETS' => 'FULLS',
        'TYPE' => 'TIPUS',

        // Funcions lògiques (Logical functions)
        'AND' => 'I',
        'BYCOL' => 'PERCOL',
        'BYROW' => 'PERFILA',
        'IF' => 'SI',
        'IFERROR' => 'SIERROR',
        'IFNA' => 'SIND',
        'IFS' => 'SI.CONJUNT',
        'NOT' => 'NO',
        'OR' => 'O',
        'SWITCH' => 'CANVIA',
        'XOR' => 'OEXC',

        // Funcions de cerca i referència (Lookup and reference functions)
        '*RC' => 'FC',
        'ADDRESS' => 'ADREÇA',
        'AREAS' => 'AREES',
        'CHOOSE' => 'TRIA',
        'CHOOSECOLS' => 'TRIACOL',
        'CHOOSEROWS' => 'TRIAFILES',
        'COLUMN' => 'COLUMNA',
        'COLUMNS' => 'COLUMNES',
        'DROP' => 'EXCLOU',
        'EXPAND' => 'EXPANDEIX',
        'FILTER' => 'FILTRA',
        'FORMULATEXT' => 'TEXTFORMULA',
        'GETPIVOTDATA' => 'OBTEN.DADES.DINAMIQUES',
        'HLOOKUP' => 'CONSULH',
        'HSTACK' => 'APILAH',
        'HYPERLINK' => 'ENLLAÇ',
        'INDIRECT' => 'INDIRECTE',
        'LOOKUP' => 'CONSULTA',
        'MATCH' => 'COINCIDEIX',
        'OFFSET' => 'DESPLAÇAMENT',
        'ROW' => 'FILA',
        'ROWS' => 'FILES',
        'RTD' => 'RTDR',
        'SORT' => 'ORDENA',
        'SORTBY' => 'ORDENAPER',
        'TAKE' => 'PREN',
        'TOCOL' => 'ACOL',
        'TOROW' => 'AFILA',
        'TRANSPOSE' => 'TRANSPOSA',
        'UNIQUE' => 'ÚNICS',
        'VLOOKUP' => 'CONSULV',
        'VSTACK' => 'APILAV',
        'WRAPCOLS' => 'AJUSTACOL',
        'WRAPROWS' => 'AJUSTAFILES',

        // Funcions matemàtiques i trigonomètriques (Math and trigonometry functions)
        'AGGREGATE' => 'VALOR.AFEGIT',
        'ARABIC' => 'ARAB',
        'CEILING.MATH' => 'MULTIPLE.SUPERIOR.MAT',
        'CEILING.PRECISE' => 'MULTIPLE.SUPERIOR.EXACTE',
        'DECIMAL' => 'CONV.DECIMAL',
        'DEGREES' => 'GRAUS',
        'ECMA.CEILING' => 'MULTIPLE.SUPERIOR.ECMA',
        'EVEN' => 'PARELL',
        'FACTDOUBLE' => 'FACT.DOBLE',
        'FLOOR.MATH' => 'MULTIPLE.INFERIOR.MAT',
        'FLOOR.PRECISE' => 'MULTIPLE.INFERIOR.EXACTE',
        'GCD' => 'M.C.D',
        'INT' => 'ENTER',
        'ISO.CEILING' => 'MULTIPLE.SUPERIOR.ISO',
        'LCM' => 'M.C.M',
        'MINVERSE' => 'MINVERSA',
        'MOD' => 'RESIDU',
        'MROUND' => 'REDOND.MULT',
        'ODD' => 'SENAR',
        'POWER' => 'POTENCIA',
        'PRODUCT' => 'PRODUCTE',
        'QUOTIENT' => 'COCIENTE',
        'RAND' => 'ALEAT',
        'RANDARRAY' => 'MATRIUALEAT',
        'RANDBETWEEN' => 'ALEATORIO.ENTRE',
        'ROMAN' => 'NUMERO.ROMA',
        'ROUND' => 'ARRODONEIX',
        'ROUNDBAHTDOWN' => 'ARRODONEIX.BAHT.MENYS',
        'ROUNDBAHTUP' => 'ARRODONEIX.BAHT.MES',
        'ROUNDDOWN' => 'ARRODONEIX.MENYS',
        'ROUNDUP' => 'ARRODONEIX.MES',
        'SEQUENCE' => 'SEQÜÈNCIA',
        'SERIESSUM' => 'SUMA.SERIES',
        'SIGN' => 'SIGNE',
        'SQRT' => 'ARREL',
        'SQRTPI' => 'ARREL2PI',
        'SUM' => 'SUMA',
        'SUMIF' => 'SUMA.SI',
        'SUMIFS' => 'SUMA.SI.CONJUNT',
        'SUMPRODUCT' => 'SUMAPRODUCTE',
        'SUMSQ' => 'SUMA.QUADRATS',
        'SUMX2MY2' => 'SUMAX2MENYSY2',
        'SUMX2PY2' => 'SUMAX2MESY2',
        'SUMXMY2' => 'SUMAXMENYSY2',

        // Funcions estadístiques (Statistical functions)
        'AVEDEV' => 'DESVMITJ',
        'AVERAGE' => 'MITJANA',
        'AVERAGEA' => 'MITJANAA',
        'AVERAGEIF' => 'MITJANA.SI',
        'AVERAGEIFS' => 'MITJANA.SI.CONJUNT',
        'BETA.DIST' => 'DISTRIBUCIO.BETA',
        'BETA.INV' => 'INV.BETA',
        'BINOM.DIST' => 'DISTR.BINOM.N',
        'BINOM.DIST.RANGE' => 'INTERVAL.DISTR.BINOM',
        'BINOM.INV' => 'INV.BINOM',
        'CHISQ.DIST' => 'DISTR.CHIQUADR',
        'CHISQ.DIST.RT' => 'DISTR.CHIQUADR.CD',
        'CHISQ.INV' => 'INV.CHIQUADR',
        'CHISQ.INV.RT' => 'INV.CHIQUADR.CD',
        'CHISQ.TEST' => 'PROVA.CHIQUADR',
        'CONFIDENCE.NORM' => 'INTERVAL.CONFIANÇA.NORM',
        'CONFIDENCE.T' => 'INTERVAL.CONFIANÇA.T',
        'CORREL' => 'COEF.CORREL',
        'COUNT' => 'COMPT',
        'COUNTA' => 'COMPTAA',
        'COUNTBLANK' => 'COMPTA.BLANC',
        'COUNTIF' => 'COMPTA.SI',
        'COUNTIFS' => 'COMPTE.SI.CONJUNT',
        'COVARIANCE.P' => 'COVARIANÇA.P',
        'COVARIANCE.S' => 'COVARIANÇA.S',
        'DEVSQ' => 'DESVIA2',
        'EXPON.DIST' => 'DISTR.EXP.N',
        'F.DIST' => 'DISTR.F.N',
        'F.DIST.RT' => 'DISTR.F.CD',
        'F.INV' => 'INV.F',
        'F.INV.RT' => 'INV.F.CD',
        'F.TEST' => 'PROVA.F.N',
        'FISHERINV' => 'PROVA.FISHER.INV',
        'FORECAST.ETS' => 'EXTRAPOLACIO.ETS',
        'FORECAST.ETS.CONFINT' => 'EXTRAPOLACIO.ETS.CONFINT',
        'FORECAST.ETS.SEASONALITY' => 'EXTRAPOLACIO.ETS.ESTACIONALITAT',
        'FORECAST.LINEAR' => 'EXTRAPOLACIO.LINEAL',
        'FREQUENCY' => 'FREQUENCIA',
        'GAMMA.DIST' => 'DISTRIBUCIO.GAMMA',
        'GAMMA.INV' => 'INV.GAMMA',
        'GAMMALN' => 'GAMMA.LN',
        'GAMMALN.PRECISE' => 'GAMMA.LN.EXACTE',
        'GEOMEAN' => 'MITJANA.GEO',
        'GROWTH' => 'CREIXEMENT',
        'HARMEAN' => 'MITJANA.HARM',
        'HYPGEOM.DIST' => 'DISTR.HIPERGEOM.N',
        'INTERCEPT' => 'INTERSECCIO',
        'KURT' => 'CURTOSI',
        'LARGE' => 'MAJOR',
        'LINEST' => 'ESTIMACIO.LINEAL',
        'LOGEST' => 'ESTIMACIO.LOGARITMICA',
        'LOGNORM.DIST' => 'DISTR.LOGNORM',
        'LOGNORM.INV' => 'INV.LOGNORM',
        'MAXIFS' => 'MAX.SI.CONJUNT',
        'MEDIAN' => 'MEDIANA',
        'MINIFS' => 'MIN.SI.CONJUNT',
        'MODE.MULT' => 'MODA.DIVERSOS',
        'MODE.SNGL' => 'MODA.UN',
        'NEGBINOM.DIST' => 'DISTR.NEGBINOM',
        'NORM.DIST' => 'DISTR.NORM.N',
        'NORM.INV' => 'INV.NORM',
        'NORM.S.DIST' => 'DISTR.NORM.ESTAND.N',
        'NORM.S.INV' => 'INV.NORM.ESTAND',
        'PERCENTILE.EXC' => 'PERCENTIL.EXC',
        'PERCENTILE.INC' => 'PERCENTIL.INC',
        'PERCENTRANK.EXC' => 'RANG.PERCENTIL.EXC',
        'PERCENTRANK.INC' => 'RANG.PERCENTIL.INC',
        'PERMUT' => 'PERMUTACIO',
        'PERMUTATIONA' => 'PERMUTACIOA',
        'POISSON.DIST' => 'DISTR.POISSON',
        'PROB' => 'PROBABILITAT',
        'QUARTILE.EXC' => 'QUARTI.EXC',
        'QUARTILE.INC' => 'QUARTI.INC',
        'RANK.AVG' => 'JERARQUIA.MITJANA',
        'RANK.EQ' => 'JERARQUIA.EQV',
        'RSQ' => 'COEF.QUADRAT',
        'SKEW' => 'BIAIX',
        'SKEW.P' => 'BIAIX.P',
        'SLOPE' => 'PENDENT',
        'SMALL' => 'MENOR',
        'STANDARDIZE' => 'NORMALITZA',
        'STDEV.P' => 'DESVEST.P',
        'STDEV.S' => 'DESVEST.M',
        'STDEVA' => 'DESVESTA',
        'STDEVPA' => 'DESVESTPA',
        'STEYX' => 'ERROR.TIPIC.XY',
        'T.DIST' => 'DISTR.T.N',
        'T.DIST.2T' => 'DISTR.T.2C',
        'T.DIST.RT' => 'DISTR.T.CD',
        'T.INV' => 'INV.T',
        'T.INV.2T' => 'INV.T.2C',
        'T.TEST' => 'PROVAT',
        'TREND' => 'TENDENCIA',
        'TRIMMEAN' => 'MITJANA.ACOTADA',
        'VAR.S' => 'VAR.M',
        'WEIBULL.DIST' => 'DISTR.WEIBULL',
        'Z.TEST' => 'PROVAZ',

        // Funcions de text (Text functions)
        'ARRAYTOTEXT' => 'MATRIUATEXT',
        'BAHTTEXT' => 'TEXTBAHT',
        'CHAR' => 'CAR',
        'CLEAN' => 'NETEJA',
        'CODE' => 'CODI',
        'DOLLAR' => 'MONEDA',
        'EXACT' => 'IGUAL',
        'FIND' => 'BUSCA',
        'FINDB' => 'BUSCAB',
        'FIXED' => 'DECIMAL',
        'ISTHAIDIGIT' => 'ESDIGITTAI',
        'LEFT' => 'ESQUERRA',
        'LEFTB' => 'ESQUERRAB',
        'LEN' => 'LLARG',
        'LENB' => 'LLARGB',
        'LOWER' => 'MINUSC',
        'MID' => 'MIG',
        'MIDB' => 'MIGB',
        'NUMBERVALUE' => 'VALOR.NUMERO',
        'PHONETIC' => 'FONETIC',
        'PROPER' => 'NOMPROPI',
        'REPLACE' => 'REEMPLAÇA',
        'REPLACEB' => 'SUBSTITUEIXB',
        'REPT' => 'REPETEIX',
        'RIGHT' => 'DRETA',
        'RIGHTB' => 'DRETAB',
        'SEARCH' => 'CERCAR',
        'SEARCHB' => 'CERCAB',
        'SUBSTITUTE' => 'SUBSTITUEIX',
        'TEXTAFTER' => 'TEXTDESPRES',
        'TEXTBEFORE' => 'TEXTABANS',
        'TEXTJOIN' => 'UNEIXCADENES',
        'TEXTSPLIT' => 'DIVIDEIXTEXT',
        'THAIDIGIT' => 'DIGITTAI',
        'THAINUMSOUND' => 'SONUMTAI',
        'THAINUMSTRING' => 'CADENANUMTAI',
        'THAISTRINGLENGTH' => 'LLARGCADENATAI',
        'TRIM' => 'RETALLA',
        'UNICHAR' => 'UNICAR',
        'UPPER' => 'MAJUSC',
        'VALUE' => 'VALOR',
        'VALUETOTEXT' => 'VALORATEXT',

        // Funcions web (Web functions)
        'ENCODEURL' => 'URLCODIF',
        'FILTERXML' => 'FILTREXML',
        'WEBSERVICE' => 'SERVEIWEB',

        // Funcions de compatibilitat (Compatibility functions)
        'BETADIST' => 'DISTRIBUCIOBETA',
        'BETAINV' => 'INVBETA',
        'BINOMDIST' => 'DISTR.BINOM',
        'CEILING' => 'MULTIPLE.SUPERIOR',
        'CHIDIST' => 'DISTR.CHI',
        'CHIINV' => 'PROVA.CHI.INV',
        'CHITEST' => 'PROVA.CHI',
        'CONCATENATE' => 'CONCATENA',
        'CONFIDENCE' => 'CONFIANÇA',
        'CRITBINOM' => 'BINOM.CRIT',
        'EXPONDIST' => 'DISTR.EXP',
        'FDIST' => 'DISTR.F',
        'FINV' => 'DISTR.F.INV',
        'FLOOR' => 'MULTIPLE.INFERIOR',
        'FORECAST' => 'EXTRAPOLACIO',
        'FTEST' => 'PROVA.F',
        'GAMMADIST' => 'DISTRIBUCIOGAMMA',
        'GAMMAINV' => 'INVGAMMA',
        'HYPGEOMDIST' => 'DISTR.HIPERGEOM',
        'LOGINV' => 'DISTR.LOG.INV',
        'LOGNORMDIST' => 'DISTR.LOG.NORM',
        'MODE' => 'MODA',
        'NEGBINOMDIST' => 'DISTRNEGBINOM',
        'NORMDIST' => 'DISTR.NORM',
        'NORMINV' => 'DISTR.NORM.INV',
        'NORMSDIST' => 'DISTR.NORM.ESTAND',
        'NORMSINV' => 'DISTR.NORM.ESTAND.INV',
        'PERCENTILE' => 'PERCENTIL',
        'PERCENTRANK' => 'RANG.PERCENTIL',
        'QUARTILE' => 'QUARTI',
        'RANK' => 'JERARQUIA',
        'STDEV' => 'DESVEST',
        'STDEVP' => 'DESVESTP',
        'TDIST' => 'DISTR.T',
        'TINV' => 'DISTR.T.INV',
        'TTEST' => 'PROV.T',
        'ZTEST' => 'PROV.Z',
    ];
}
