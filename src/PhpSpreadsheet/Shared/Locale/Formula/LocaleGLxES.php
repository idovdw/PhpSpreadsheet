<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for Galego / Galician (Spain).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleGLxES extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'gl-es';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 34,
        'xlCountrySetting' => 34,
        'xlDecimalSeparator' => ',',
        'xlThousandsSeparator' => '.',
        'xlListSeparator' => ';',
        'xlUpperCaseRowLetter' => 'R',
        'xlUpperCaseColumnLetter' => 'C',
        'xlLowerCaseRowLetter' => 'r',
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
        'xlMonthLeadingZero' => true,
        'xlDayLeadingZero' => true,
        'xl4DigitYears' => true,
        'xlMDY' => false,
        'xlTimeLeadingZero' => true,
    ];

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ';';

    /**
     * @var array<string, string> TRUE/FALSE/NULL representation
     */
    protected $aBooleanRepresentation = [
        'TRUE' => 'VERDADEIRO',
        'FALSE' => 'FALSO',
        'NULL' => 'NULL',
    ];

    /**
     * @var array<string,string> Error codes - Current
     */
    protected $aErrorCodesCurrent = [
        'NULL' => '#NULO!',
        'DIV0' => '#DIV/0!',
        'VALUE' => '#VALOR!',
        'REF' => '#REF!',
        'NAME' => '#NOME?',
        'NUM' => '#NÚM!',
        'NA' => '#N/D',
        'GETTINGDATA' => '#OBTENDO_DATOS!',
        'SPILL' => '#DESBORDAMENTO!',
        'CONNECT' => '#CONECTAR!',
        'BLOCKED' => '#BLOQUEADO!',
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#CAMPO!',
        'CALC' => '#CÁLC!',
        'EXTERNAL' => '#EXTERNO!',
    ];

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $aFunctionsLegacy = [
        // Funcións de data e hora (Date and time functions)
        'DATEDIF' => 'DATADIF',

        // Funcións financeiras (Financial functions)
        'STOCKHISTORY' => 'HISTORIALDECOTIZACIÓNS',

        // Funcións de búsqueda e referencia (Lookup and reference functions)
        '*RC' => 'RC',
        'CHOOSECOLS' => 'ESCOLLERCOLS',
        'CHOOSEROWS' => 'ESCOLLERFILAS',
        'DROP' => 'EXCLUIR',
        'EXPAND' => 'EXPANDIR',
        'FILTER' => 'FILTRO',
        'HSTACK' => 'AMONTOARH',
        'SORT' => 'ORDENAR',
        'SORTBY' => 'ORDENARPOR',
        'TAKE' => 'COLLER',
        'TOCOL' => 'ACOL',
        'TOROW' => 'AFILA',
        'UNIQUE' => 'ÚNICO',
        'VSTACK' => 'AMONTOARV',
        'WRAPCOLS' => 'AXUSTARCOLS',
        'WRAPROWS' => 'AXUSTARFILAS',
        'XLOOKUP' => 'BUSCARX',
        'XMATCH' => 'COINCIDIRX',

        // Funcións matemáticas e trigonométricas (Math and trigonometry functions)
        'RANDARRAY' => 'MATRIZALEAT',
        'SEQUENCE' => 'SECUENCIA',

        // Funcións de texto (Text functions)
        'ARRAYTOTEXT' => 'MATRIZDETEXTO',
        'FINDB' => 'LOCALIZARB',
        'LEFTB' => 'ESQUERDAB',
        'LENB' => 'LONXITUDEB',
        'MIDB' => 'EXTRAEB',
        'REPLACEB' => 'SUBSTITUÍRB',
        'RIGHTB' => 'DEREITAB',
        'SEARCHB' => 'BUSCARB',
        'TEXTAFTER' => 'TEXTOPOSTERIOR',
        'TEXTBEFORE' => 'TEXTOANTERIOR',
        'TEXTSPLIT' => 'DIVIDIRTEXTO',
        'VALUETOTEXT' => 'VALORDETEXTO',
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $aFunctionsCurrent = [
        // Funcións de cubo (Cube functions)
        'CUBEKPIMEMBER' => 'MEMBROKPICUBO',
        'CUBEMEMBER' => 'MEMBROCUBO',
        'CUBEMEMBERPROPERTY' => 'PROPIEDADEMEMBROCUBO',
        'CUBERANKEDMEMBER' => 'MEMBRORANGOCUBO',
        'CUBESET' => 'CONXUNTOCUBO',
        'CUBESETCOUNT' => 'CONTAXECONXUNTOCUBO',
        'CUBEVALUE' => 'VALORCUBO',

        // Funcións de base de datos (Database functions)
        'DAVERAGE' => 'BDMEDIA',
        'DCOUNT' => 'BDCONTAR',
        'DCOUNTA' => 'BDCONTARA',
        'DGET' => 'BDOBTER',
        'DMAX' => 'BDMÁX',
        'DMIN' => 'BDMÍN',
        'DPRODUCT' => 'BDPRODUTO',
        'DSTDEV' => 'BDDESVEST',
        'DSTDEVP' => 'BDDESVESTP',
        'DSUM' => 'BDSUMA',
        'DVAR' => 'BDVAR',
        'DVARP' => 'BDVARP',

        // Funcións de data e hora (Date and time functions)
        'DATE' => 'DATA',
        'DATEDIF' => 'DATADIF',
        'DATESTRING' => 'CADEADATA',
        'DATEVALUE' => 'VALORDATA',
        'DAY' => 'DÍA',
        'DAYS' => 'DÍAS',
        'DAYS360' => 'DÍAS360',
        'EDATE' => 'DATAM',
        'EOMONTH' => 'FINMES',
        'HOUR' => 'HORA',
        'ISOWEEKNUM' => 'NÚMSEMANAISO',
        'MINUTE' => 'MINUTO',
        'MONTH' => 'MES',
        'NETWORKDAYS' => 'DÍASÚTILESTOTAIS',
        'NETWORKDAYS.INTL' => 'DÍASÚTILESTOTAIS.INTL',
        'NOW' => 'AGORA',
        'SECOND' => 'SEGUNDO',
        'THAIDAYOFWEEK' => 'DÍASEMTAI',
        'THAIMONTHOFYEAR' => 'MESANOTAI',
        'THAIYEAR' => 'ANOTAI',
        'TIME' => 'TEMPO',
        'TIMEVALUE' => 'VALORHORA',
        'TODAY' => 'HOXE',
        'WEEKDAY' => 'DÍASEMANA',
        'WEEKNUM' => 'SEMANACALENDARIO',
        'WORKDAY' => 'DÍAÚTIL',
        'WORKDAY.INTL' => 'DÍA.LAB.INTL',
        'YEAR' => 'ANO',
        'YEARFRAC' => 'FRACCIÓNANO',

        // Funcións de enxeñaría (Engineering functions)
        'BIN2DEC' => 'BINADEC',
        'BIN2HEX' => 'BINAHEX',
        'BIN2OCT' => 'BINAOCT',
        'BITAND' => 'BITE',
        'BITLSHIFT' => 'BIT.DESPRESQ',
        'BITOR' => 'BITOU',
        'BITRSHIFT' => 'BIT.DESPRDER',
        'BITXOR' => 'BITXOU',
        'COMPLEX' => 'COMPLEXO',
        'CONVERT' => 'CONVERTER',
        'DEC2BIN' => 'DECABIN',
        'DEC2HEX' => 'DECAHEX',
        'DEC2OCT' => 'DECAOCT',
        'ERF' => 'FUNERRO',
        'ERF.PRECISE' => 'FUNERRO.PRECISO',
        'ERFC' => 'FUNERROCOMPL',
        'ERFC.PRECISE' => 'FUNERROCOMPL.PRECISO',
        'GESTEP' => 'MAIOROUIGUAL',
        'HEX2BIN' => 'HEXABIN',
        'HEX2DEC' => 'HEXADEC',
        'HEX2OCT' => 'HEXAOCT',
        'IMAGINARY' => 'IMAXINARIO',
        'IMARGUMENT' => 'IMARGUMENTO',
        'IMCONJUGATE' => 'IMCONX',
        'IMPOWER' => 'IMPOT',
        'IMPRODUCT' => 'IMPRODUTO',
        'IMSIN' => 'IMSENO',
        'IMSQRT' => 'IMRAÍZ',
        'IMSUB' => 'IMSUBTR',
        'IMSUM' => 'IMSUMA',
        'OCT2BIN' => 'OCTABIN',
        'OCT2DEC' => 'OCTADEC',
        'OCT2HEX' => 'OCTAHEX',

        // Funcións financeiras (Financial functions)
        'ACCRINT' => 'XUROSACUM',
        'ACCRINTM' => 'XUROSACUMV',
        'COUPDAYBS' => 'CUPDÍASATÉLIQ',
        'COUPDAYS' => 'CUPDÍAS',
        'COUPDAYSNC' => 'CUPDÍASPRÓX',
        'COUPNCD' => 'CUPDATAPRÓX',
        'COUPNUM' => 'CUPNÚM',
        'COUPPCD' => 'CUPDATAANT',
        'CUMIPMT' => 'PGTOXUROSACUM',
        'CUMPRINC' => 'PGTOPRINCACUM',
        'DB' => 'BD',
        'DISC' => 'DESC',
        'DOLLARDE' => 'MOEDADEC',
        'DOLLARFR' => 'MOEDAFRA',
        'DURATION' => 'DURACIÓN',
        'EFFECT' => 'EFFECTO',
        'FV' => 'VF',
        'FVSCHEDULE' => 'VFPROGRAMA',
        'INTRATE' => 'TAXAXUROS',
        'IPMT' => 'PGTOXUROS',
        'IRR' => 'TID',
        'ISPMT' => 'XSPGTO',
        'MDURATION' => 'MDURACIÓN',
        'NPV' => 'VAL',
        'ODDFPRICE' => 'PREZOPRIMIRR',
        'ODDFYIELD' => 'BENEFPRIMIRR',
        'ODDLPRICE' => 'PREZOÚLTIRR',
        'ODDLYIELD' => 'BENEFÚLTIRR',
        'PDURATION' => 'PDURACIÓN',
        'PMT' => 'PGTO',
        'PPMT' => 'AMORTIZ',
        'PRICE' => 'PREZO',
        'PRICEDISC' => 'PREZODESC',
        'PRICEMAT' => 'PREZOVENC',
        'PV' => 'VA',
        'RATE' => 'TAXA',
        'RECEIVED' => 'RECIBIDO',
        'RRI' => 'RIR',
        'STOCKHISTORY' => 'HISTORIALDECOTIZACIÓNS',
        'TBILLEQ' => 'LETTESEQ',
        'TBILLPRICE' => 'LETTESPREZO',
        'TBILLYIELD' => 'LETTESBENEF',
        'VDB' => 'BDV',
        'XIRR' => 'XTIR',
        'XNPV' => 'XVPL',
        'YIELD' => 'BENEFICIOS',
        'YIELDDISC' => 'BENEFDESC',
        'YIELDMAT' => 'BENEFVENC',

        // Funcións de información (Information functions)
        'CELL' => 'CELA',
        'ERROR.TYPE' => 'TIPO.DE.ERRO',
        'INFO' => 'INFORMACIÓN',
        'ISBLANK' => 'ENBRANCO',
        'ISERR' => 'ÉERR',
        'ISERROR' => 'ÉERRO',
        'ISEVEN' => 'ÉPAR',
        'ISFORMULA' => 'ÉFÓRMULA',
        'ISLOGICAL' => 'ÉLÓXICO',
        'ISNA' => 'ÉNONDISP',
        'ISNONTEXT' => 'ÉNONTEXTO',
        'ISNUMBER' => 'ÉNÚMERO',
        'ISODD' => 'ÉIMPAR',
        'ISREF' => 'ÉREF',
        'ISTEXT' => 'ÉTEXTO',
        'NA' => 'NONDISP',
        'SHEET' => 'FOLLA',
        'SHEETS' => 'FOLLAS',
        'TYPE' => 'TIPO',

        // Funcións lóxicas (Logical functions)
        'AND' => 'E',
        'IF' => 'SE',
        'IFERROR' => 'SEERRO',
        'IFNA' => 'SENONDISP',
        'IFS' => 'SE.CONXUNTO',
        'NOT' => 'NON',
        'OR' => 'OU',
        'SWITCH' => 'CAMBIAR',
        'XOR' => 'XOU',

        // Funcións de búsqueda e referencia (Lookup and reference functions)
        '*RC' => 'RC',
        'ADDRESS' => 'ENDEREZO',
        'AREAS' => 'ÁREAS',
        'CHOOSE' => 'ESCOLLER',
        'CHOOSECOLS' => 'ESCOLLERCOLS',
        'CHOOSEROWS' => 'ESCOLLERFILAS',
        'COLUMN' => 'COLUMNA',
        'COLUMNS' => 'COLUMNAS',
        'DROP' => 'EXCLUIR',
        'EXPAND' => 'EXPANDIR',
        'FILTER' => 'FILTRO',
        'FORMULATEXT' => 'TEXTOFÓRMULA',
        'GETPIVOTDATA' => 'OBTERDATOSDINÁMICOS',
        'HLOOKUP' => 'BUSCARH',
        'HSTACK' => 'AMONTOARH',
        'HYPERLINK' => 'HIPERLIGAZÓN',
        'INDEX' => 'ÍNDICE',
        'INDIRECT' => 'INDIRECTO',
        'LOOKUP' => 'BUSCAR',
        'MATCH' => 'CORRESP',
        'OFFSET' => 'DESPRAZAMENTO',
        'ROW' => 'FILA',
        'ROWS' => 'FILAS',
        'RTD' => 'RDTR',
        'SORT' => 'ORDENAR',
        'SORTBY' => 'ORDENARPOR',
        'TAKE' => 'COLLER',
        'TOCOL' => 'ACOL',
        'TOROW' => 'AFILA',
        'TRANSPOSE' => 'TRASPOR',
        'UNIQUE' => 'ÚNICO',
        'VLOOKUP' => 'BUSCARV',
        'VSTACK' => 'AMONTOARV',
        'WRAPCOLS' => 'AXUSTARCOLS',
        'WRAPROWS' => 'AXUSTARFILAS',
        'XLOOKUP' => 'BUSCARX',
        'XMATCH' => 'COINCIDIRX',

        // Funcións matemáticas e trigonométricas (Math and trigonometry functions)
        'AGGREGATE' => 'AGREGAR',
        'ARABIC' => 'NÚMÁRABES',
        'ASIN' => 'ASENO',
        'ASINH' => 'ASENOH',
        'CEILING.MATH' => 'LÍMITESUPERIOR.MAT',
        'CEILING.PRECISE' => 'LÍMITESUPERIOR.PRECISO',
        'COMBIN' => 'COMBINAR',
        'DEGREES' => 'GRAOS',
        'ECMA.CEILING' => 'LÍMITESUPERIOR.ECMA',
        'EVEN' => 'PAR',
        'FACTDOUBLE' => 'FACTDUPLO',
        'FLOOR.MATH' => 'ARREDMÚLTINF.PRECISO',
        'FLOOR.PRECISE' => 'MULTIPLO.INFERIOR.EXACTO',
        'GCD' => 'MDC',
        'INT' => 'ENT',
        'ISO.CEILING' => 'LÍMITESUPERIOR.ISO',
        'LCM' => 'MMC',
        'MINVERSE' => 'MINVERSA',
        'MMULT' => 'MMÚLT',
        'MOD' => 'RESTO',
        'MROUND' => 'MARRED',
        'MUNIT' => 'MUNIDADE',
        'ODD' => 'IMPAR',
        'POWER' => 'POTENCIA',
        'PRODUCT' => 'PRODUTO',
        'QUOTIENT' => 'COCIENTE',
        'RADIANS' => 'RADIÁNS',
        'RAND' => 'ALEATORIO',
        'RANDARRAY' => 'MATRIZALEAT',
        'RANDBETWEEN' => 'ALEATORIOENTRE',
        'ROMAN' => 'NÚMROMANOS',
        'ROUND' => 'ARREDONDAR',
        'ROUNDBAHTDOWN' => 'ARREDONDARBAHTCARAAABAIXO',
        'ROUNDBAHTUP' => 'ARREDONDARBAHTCARAAARRIBA',
        'ROUNDDOWN' => 'ARREDONDARCARAAABAIXO',
        'ROUNDUP' => 'ARREDONDARCARAAARRIBA',
        'SEQUENCE' => 'SECUENCIA',
        'SERIESSUM' => 'SUMARSECUENCIA',
        'SIGN' => 'SINAL',
        'SIN' => 'SENO',
        'SINH' => 'SENOH',
        'SQRT' => 'RAÍZC',
        'SQRTPI' => 'RAÍZPI',
        'SUM' => 'SUMA',
        'SUMIF' => 'SUMARSE',
        'SUMIFS' => 'SUMARSECONXUNTO',
        'SUMPRODUCT' => 'SUMARPRODUTO',
        'SUMSQ' => 'SUMARCAD',
        'SUMX2MY2' => 'SUMARX2MY2',
        'SUMX2PY2' => 'SUMARX2PY2',
        'SUMXMY2' => 'SUMARXMY2',
        'TRUNC' => 'TRUNCAR',

        // Funcións estatísticas (Statistical functions)
        'AVEDEV' => 'DESVMEDIO',
        'AVERAGE' => 'MEDIA',
        'AVERAGEA' => 'MEDIAA',
        'AVERAGEIF' => 'MEDIASE',
        'AVERAGEIFS' => 'MEDIASECONXUNTO',
        'BETA.DIST' => 'DISTR.BETA',
        'BETA.INV' => 'INV.BETA',
        'BINOM.DIST' => 'DISTR.BINOM',
        'BINOM.DIST.RANGE' => 'DISTR.BINOM.INTERV',
        'BINOM.INV' => 'INV.BINOM',
        'CHISQ.DIST' => 'DISTR.CHICUAD',
        'CHISQ.DIST.RT' => 'DISTR.CHICUAD.CD',
        'CHISQ.INV' => 'INV.CHICUAD',
        'CHISQ.INV.RT' => 'INV.CHICUAD.CD',
        'CHISQ.TEST' => 'TEST.CHISQ',
        'CONFIDENCE.NORM' => 'INTERVALO.CONFIANZA',
        'CONFIDENCE.T' => 'INTERVALO.CONFIANZA.T',
        'COUNT' => 'CONTAR',
        'COUNTA' => 'CONTARA',
        'COUNTBLANK' => 'CONTARENBRANCO',
        'COUNTIF' => 'CONTARSE',
        'COUNTIFS' => 'CONTARSECONXUNTO',
        'COVARIANCE.P' => 'COVARIANZA.P',
        'COVARIANCE.S' => 'COVARIANZA.S',
        'DEVSQ' => 'DESVCAD',
        'EXPON.DIST' => 'DISTR.EXP',
        'F.DIST' => 'DISTR.F',
        'F.DIST.RT' => 'DISTR.F.CD',
        'F.INV' => 'INV.F',
        'F.INV.RT' => 'INV.F.CD',
        'F.TEST' => 'TEST.F',
        'FISHERINV' => 'INVFISHER',
        'FREQUENCY' => 'FRECUENCIA',
        'GAMMA.DIST' => 'DISTR.GAMMA',
        'GAMMA.INV' => 'INV.GAMMA',
        'GAMMALN' => 'LNGAMMA',
        'GAMMALN.PRECISE' => 'LNGAMMA.PRECISO',
        'GEOMEAN' => 'MEDIAXEO',
        'GROWTH' => 'CRECEMENTO',
        'HARMEAN' => 'MEDIAHARMO',
        'HYPGEOM.DIST' => 'DISTR.HIPERXEOM.N',
        'INTERCEPT' => 'INTERSECCIÓN',
        'KURT' => 'CURT',
        'LARGE' => 'MAIOR',
        'LINEST' => 'ESTLIN',
        'LOGEST' => 'ESTLOG',
        'LOGNORM.DIST' => 'DISTR.LOGNORM',
        'LOGNORM.INV' => 'INV.LOGNORM',
        'MAX' => 'MÁX',
        'MAXA' => 'MÁXIMOA',
        'MAXIFS' => 'MAX.SE.CONXUNTO',
        'MEDIAN' => 'MEDIANA',
        'MIN' => 'MÍN',
        'MINA' => 'MÍNIMOA',
        'MINIFS' => 'MIN.SE.CONXUNTO',
        'MODE.MULT' => 'MODA.VARIOS',
        'MODE.SNGL' => 'MODA.UN',
        'NORM.DIST' => 'DISTR.NORM',
        'NORM.INV' => 'INV.NORM',
        'NORM.S.DIST' => 'DISTR.NORM.ESTÁND',
        'NORM.S.INV' => 'INV.NORM.ESTÁND',
        'PERCENTILE.EXC' => 'PERCENTIL.EXC',
        'PERCENTILE.INC' => 'PERCENTIL.INC',
        'PERCENTRANK.EXC' => 'RANGOPERCENTIL.EXC',
        'PERCENTRANK.INC' => 'RANGOPERCENTIL.INC',
        'PERMUT' => 'PERMUTACIÓN',
        'PERMUTATIONA' => 'PERMUTACIÓNA',
        'QUARTILE.EXC' => 'CUARTIL.EXC',
        'QUARTILE.INC' => 'CUARTIL.INC',
        'RANK.AVG' => 'RANGO.MEDIA',
        'RANK.EQ' => 'RANGO.EQ',
        'RSQ' => 'RCAD',
        'SKEW' => 'DISTORSIÓN',
        'SKEW.P' => 'DISTORSIÓN.P',
        'SLOPE' => 'INCLINACIÓN',
        'SMALL' => 'MENOR',
        'STANDARDIZE' => 'ESTANDARIZAR',
        'STDEV.P' => 'DESVEST.P',
        'STDEV.S' => 'DESVEST.M',
        'STDEVA' => 'DESVESTA',
        'STDEVPA' => 'DESVESTPA',
        'STEYX' => 'ERROTIPOYX',
        'T.DIST' => 'DISTR.T',
        'T.DIST.2T' => 'DISTR.T.2C',
        'T.DIST.RT' => 'DISTR.T.CD',
        'T.INV' => 'INV.T',
        'T.INV.2T' => 'INV.T.2C',
        'T.TEST' => 'TEST.T',
        'TREND' => 'TENDENDIA',
        'TRIMMEAN' => 'MEDIARECORTADA',
        'WEIBULL.DIST' => 'DISTR.WEIBULL',
        'Z.TEST' => 'TEST.Z',

        // Funcións de texto (Text functions)
        'ARRAYTOTEXT' => 'MATRIZDETEXTO',
        'BAHTTEXT' => 'TEXTOBAHT',
        'CHAR' => 'CARACT',
        'CLEAN' => 'LIMPAR',
        'CODE' => 'CÓDIGO',
        'DOLLAR' => 'MOEDA',
        'EXACT' => 'EXACTO',
        'FIND' => 'LOCALIZAR',
        'FINDB' => 'LOCALIZARB',
        'FIXED' => 'FIXO',
        'ISTHAIDIGIT' => 'ÉDÍXITOTAI',
        'LEFT' => 'ESQUERDA',
        'LEFTB' => 'ESQUERDAB',
        'LEN' => 'LONX',
        'LENB' => 'LONXITUDEB',
        'LOWER' => 'MINÚSCULA',
        'MID' => 'MEDIO',
        'MIDB' => 'EXTRAEB',
        'NUMBERVALUE' => 'VALORNÚMERO',
        'PHONETIC' => 'FONÉTICO',
        'PROPER' => 'PRIMMAIÚSCULA',
        'REPLACE' => 'SUBSTITUÍR',
        'REPLACEB' => 'SUBSTITUÍRB',
        'REPT' => 'REPETIR',
        'RIGHT' => 'DEREITA',
        'RIGHTB' => 'DEREITAB',
        'SEARCH' => 'ACHAR',
        'SEARCHB' => 'BUSCARB',
        'SUBSTITUTE' => 'CAMBIARTEXTO',
        'TEXT' => 'TEXTO',
        'TEXTAFTER' => 'TEXTOPOSTERIOR',
        'TEXTBEFORE' => 'TEXTOANTERIOR',
        'TEXTJOIN' => 'UNIRTEXTO',
        'TEXTSPLIT' => 'DIVIDIRTEXTO',
        'THAIDIGIT' => 'DÍXITOTAI',
        'THAINUMSOUND' => 'SONNÚMTAI',
        'THAINUMSTRING' => 'CADEANÚMTAI',
        'THAISTRINGLENGTH' => 'LONXCADEATAI',
        'TRIM' => 'RECORTAR',
        'UNICHAR' => 'UNICARACT',
        'UPPER' => 'MAIÚSCULA',
        'VALUE' => 'VALOR',
        'VALUETOTEXT' => 'VALORDETEXTO',

        // Funcións web (Web functions)
        'ENCODEURL' => 'CODIFICACIÓNURL',
        'FILTERXML' => 'FILTRARXML',
        'WEBSERVICE' => 'SERVIZOWEB',

        // Funcións de compatibilidade (Compatibility functions)
        'BETADIST' => 'DISTBETA',
        'BETAINV' => 'INVBETA',
        'BINOMDIST' => 'DISTBINOM',
        'CEILING' => 'LÍMITESUPERIOR',
        'CHIDIST' => 'DISTKHI',
        'CHIINV' => 'INVKHI',
        'CHITEST' => 'TESTEKHI',
        'CONCATENATE' => 'CONCATENAR',
        'CONFIDENCE' => 'INTCONFIANZA',
        'EXPONDIST' => 'DISTEXP',
        'FDIST' => 'DISTF',
        'FINV' => 'INVF',
        'FLOOR' => 'PLANOINFERIOR',
        'FORECAST' => 'PROGNÓSTICO',
        'FTEST' => 'TESTF',
        'GAMMADIST' => 'DISTGAMMA',
        'GAMMAINV' => 'INVGAMMA',
        'HYPGEOMDIST' => 'DISTRHIPERXEOM',
        'LOGINV' => 'INVLOG',
        'LOGNORMDIST' => 'DISTNORMALLOG',
        'MODE' => 'MODO',
        'NEGBINOMDIST' => 'DISTBINOMNEG',
        'NORMDIST' => 'DISTNORM',
        'NORMINV' => 'INVNORM',
        'NORMSDIST' => 'DISTNORMESTÁND',
        'NORMSINV' => 'INVNORMESTÁND',
        'PERCENTILE' => 'PERCENTIL',
        'PERCENTRANK' => 'RANGOPORCENTUAL',
        'QUARTILE' => 'CUARTIL',
        'RANK' => 'RANGO',
        'STDEV' => 'DESVEST',
        'STDEVP' => 'DESVESTP',
        'TDIST' => 'DISTT',
        'TINV' => 'INVT',
        'TTEST' => 'TESTT',
        'ZTEST' => 'TESTZ',
    ];
}