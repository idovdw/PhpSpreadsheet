<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocale;

/**
 * Formula locale class for български / Bulgarian (Bulgaria).
 *
 * Do not alter this file; it is generated content.
 */
class LocaleBGxBG extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'bg-bg';

    /**
     * @var array International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 359,
        'xlCountrySetting' => 359,
        'xlDecimalSeparator' => ',',
        'xlThousandsSeparator' => ' ',
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
        'xlDateSeparator' => '.',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'y',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{43B}\u{432}.",
        'xlGeneralFormatName' => 'General',
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 1,
        'xlNoncurrencyDigits' => 2,
        'xlMonthNameChars' => 3,
        'xlWeekdayNameChars' => 3,
        'xlDateOrder' => 1,
        'xl24HourClock' => true,
        'xlNonEnglishFunctions' => false,
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
        'TRUE' => "\u{418}\u{421}\u{422}\u{418}\u{41D}\u{410}",
        'FALSE' => "\u{41B}\u{41E}\u{416}\u{42C}",
        'NULL' => "\u{41F}\u{420}\u{410}\u{417}\u{41D}\u{41E}",
    ];

    /**
     * @var array<string,string> Error codes - Legacy
     */
    protected $aErrorCodesLegacy = [
        'NULL' => "#\u{41F}\u{420}\u{410}\u{417}\u{41D}\u{41E}!",
        'DIV0' => "#\u{414}\u{415}\u{41B}/0!",
        'VALUE' => "#\u{421}\u{422}\u{41E}\u{419}\u{41D}\u{41E}\u{421}\u{422}!",
        'REF' => "#\u{420}\u{415}\u{424}!",
        'NAME' => "#\u{418}\u{41C}\u{415}?",
        'NUM' => "#\u{427}\u{418}\u{421}\u{41B}\u{41E}!",
        'NA' => "#\u{41D}/\u{414}",
        'GETTINGDATA' => '#GETTING_DATA',
        'SPILL' => '#SPILL!',
        'CONNECT' => '#CONNECT!',
        'BLOCKED' => '#BLOCKED!',
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#FIELD!',
        'CALC' => '#CALC!',
        'EXTERNAL' => '#EXTERNAL!',
    ];

    /**
     * @var array<string,string> Error codes - Current
     */
    protected $aErrorCodesCurrent = [
        'NULL' => '#NULL!',
        'DIV0' => '#DIV/0!',
        'VALUE' => '#VALUE!',
        'REF' => '#REF!',
        'NAME' => '#NAME?',
        'NUM' => '#NUM!',
        'NA' => '#N/A',
        'GETTINGDATA' => '#GETTING_DATA!',
        'SPILL' => '#SPILL!',
        'CONNECT' => '#CONNECT!',
        'BLOCKED' => "#\u{411}\u{41B}\u{41E}\u{41A}\u{418}\u{420}\u{410}\u{41D}\u{41E}!",
        'UNKNOWN' => '#UNKNOWN!',
        'FIELD' => '#FIELD!',
        'CALC' => '#CALC!',
        'EXTERNAL' => '#EXTERNAL!',
    ];

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $aFunctionsLegacy = [
        // Кубични функции (Cube functions)
        'CUBEKPIMEMBER' => "\u{41A}\u{423}\u{411}\u{42D}\u{41B}\u{415}\u{41C}\u{415}\u{41D}\u{422}\u{41A}\u{418}\u{41F}",
        'CUBEMEMBER' => "\u{41A}\u{423}\u{411}\u{42D}\u{41B}\u{415}\u{41C}\u{415}\u{41D}\u{422}",
        'CUBEMEMBERPROPERTY' => "\u{41A}\u{423}\u{411}\u{421}\u{412}\u{41E}\u{419}\u{421}\u{422}\u{412}\u{41E}\u{42D}\u{41B}\u{415}\u{41C}\u{415}\u{41D}\u{422}\u{410}",
        'CUBERANKEDMEMBER' => "\u{41A}\u{423}\u{411}\u{41F}\u{41E}\u{420}\u{42D}\u{41B}\u{415}\u{41C}\u{415}\u{41D}\u{422}",
        'CUBESET' => "\u{41A}\u{423}\u{411}\u{41C}\u{41D}\u{41E}\u{416}",
        'CUBESETCOUNT' => "\u{41A}\u{423}\u{411}\u{427}\u{418}\u{421}\u{41B}\u{41E}\u{42D}\u{41B}\u{41C}\u{41D}\u{41E}\u{416}",
        'CUBEVALUE' => "\u{41A}\u{423}\u{411}\u{417}\u{41D}\u{410}\u{427}\u{415}\u{41D}\u{418}\u{415}",

        // Функции на базата данни (Database functions)
        'DAVERAGE' => "\u{414}\u{421}\u{420}\u{417}\u{41D}\u{410}\u{427}",
        'DCOUNT' => "\u{411}\u{421}\u{427}\u{401}\u{422}",
        'DCOUNTA' => "\u{411}\u{421}\u{427}\u{401}\u{422}\u{410}",
        'DGET' => "\u{411}\u{418}\u{417}\u{412}\u{41B}\u{415}\u{427}\u{42C}",
        'DMAX' => "\u{414}\u{41C}\u{410}\u{41A}\u{421}",
        'DMIN' => "\u{414}\u{41C}\u{418}\u{41D}",
        'DPRODUCT' => "\u{411}\u{414}\u{41F}\u{420}\u{41E}\u{418}\u{417}\u{412}\u{415}\u{414}",
        'DSTDEV' => "\u{414}\u{421}\u{422}\u{410}\u{41D}\u{414}\u{41E}\u{422}\u{41A}\u{41B}",
        'DSTDEVP' => "\u{414}\u{421}\u{422}\u{410}\u{41D}\u{414}\u{41E}\u{422}\u{41A}\u{41B}\u{41F}",
        'DSUM' => "\u{411}\u{414}\u{421}\u{423}\u{41C}\u{41C}",
        'DVAR' => "\u{411}\u{414}\u{414}\u{418}\u{421}\u{41F}",
        'DVARP' => "\u{411}\u{414}\u{414}\u{418}\u{421}\u{41F}\u{41F}",

        // Функции за дата и време (Date and time functions)
        'DATE' => "\u{414}\u{410}\u{422}\u{410}",
        'DATEVALUE' => "\u{414}\u{410}\u{422}\u{410}\u{417}\u{41D}\u{410}\u{427}",
        'DAY' => "\u{414}\u{415}\u{41D}\u{42C}",
        'DAYS360' => "\u{414}\u{41D}\u{415}\u{419}360",
        'EDATE' => "\u{414}\u{410}\u{422}\u{410}\u{41C}\u{415}\u{421}",
        'EOMONTH' => "\u{41A}\u{41E}\u{41D}\u{41C}\u{415}\u{421}\u{42F}\u{426}\u{410}",
        'HOUR' => "\u{427}\u{410}\u{421}",
        'MINUTE' => "\u{41C}\u{418}\u{41D}\u{423}\u{422}\u{42B}",
        'MONTH' => "\u{41C}\u{415}\u{421}\u{42F}\u{426}",
        'NETWORKDAYS' => "\u{427}\u{418}\u{421}\u{422}\u{420}\u{410}\u{411}\u{414}\u{41D}\u{418}",
        'NOW' => "\u{422}\u{414}\u{410}\u{422}\u{410}",
        'SECOND' => "\u{421}\u{415}\u{41A}\u{423}\u{41D}\u{414}\u{42B}",
        'TIME' => "\u{412}\u{420}\u{415}\u{41C}\u{42F}",
        'TIMEVALUE' => "\u{412}\u{420}\u{415}\u{41C}\u{417}\u{41D}\u{410}\u{427}",
        'TODAY' => "\u{421}\u{415}\u{413}\u{41E}\u{414}\u{41D}\u{42F}",
        'WEEKDAY' => "\u{414}\u{415}\u{41D}\u{42C}\u{41D}\u{415}\u{414}",
        'WEEKNUM' => "\u{41D}\u{41E}\u{41C}\u{41D}\u{415}\u{414}\u{415}\u{41B}\u{418}",
        'WORKDAY' => "\u{420}\u{410}\u{411}\u{414}\u{415}\u{41D}\u{42C}",
        'YEAR' => "\u{413}\u{41E}\u{414}",
        'YEARFRAC' => "\u{414}\u{41E}\u{41B}\u{42F}\u{413}\u{41E}\u{414}\u{410}",

        // Технически функции (Engineering functions)
        'BESSELI' => "\u{411}\u{415}\u{421}\u{421}\u{415}\u{41B}\u{42C}.I",
        'BESSELJ' => "\u{411}\u{415}\u{421}\u{421}\u{415}\u{41B}\u{42C}.J",
        'BESSELK' => "\u{411}\u{415}\u{421}\u{421}\u{415}\u{41B}\u{42C}.K",
        'BESSELY' => "\u{411}\u{415}\u{421}\u{421}\u{415}\u{41B}\u{42C}.Y",
        'BIN2DEC' => "\u{414}\u{412}.\u{412}.\u{414}\u{415}\u{421}",
        'BIN2HEX' => "\u{414}\u{412}.\u{412}.\u{428}\u{415}\u{421}\u{422}\u{41D}",
        'BIN2OCT' => "\u{414}\u{412}.\u{412}.\u{412}\u{41E}\u{421}\u{42C}\u{41C}",
        'COMPLEX' => "\u{41A}\u{41E}\u{41C}\u{41F}\u{41B}\u{415}\u{41A}\u{421}\u{41D}",
        'CONVERT' => "\u{41F}\u{420}\u{415}\u{41E}\u{411}\u{420}",
        'DEC2BIN' => "\u{414}\u{415}\u{421}.\u{412}.\u{414}\u{412}",
        'DEC2HEX' => "\u{414}\u{415}\u{421}.\u{412}.\u{428}\u{415}\u{421}\u{422}\u{41D}",
        'DEC2OCT' => "\u{414}\u{415}\u{421}.\u{412}.\u{412}\u{41E}\u{421}\u{42C}\u{41C}",
        'DELTA' => "\u{414}\u{415}\u{41B}\u{42C}\u{422}\u{410}",
        'ERF' => "\u{424}\u{41E}\u{428}",
        'ERFC' => "\u{414}\u{424}\u{41E}\u{428}",
        'GESTEP' => "\u{41F}\u{41E}\u{420}\u{41E}\u{413}",
        'HEX2BIN' => "\u{428}\u{415}\u{421}\u{422}\u{41D}.\u{412}.\u{414}\u{412}",
        'HEX2DEC' => "\u{428}\u{415}\u{421}\u{422}\u{41D}.\u{412}.\u{414}\u{415}\u{421}",
        'HEX2OCT' => "\u{428}\u{415}\u{421}\u{422}\u{41D}.\u{412}.\u{412}\u{41E}\u{421}\u{42C}\u{41C}",
        'IMABS' => "\u{41C}\u{41D}\u{418}\u{41C}.ABS",
        'IMAGINARY' => "\u{41C}\u{41D}\u{418}\u{41C}.\u{427}\u{410}\u{421}\u{422}\u{42C}",
        'IMARGUMENT' => "\u{41C}\u{41D}\u{418}\u{41C}.\u{410}\u{420}\u{413}\u{423}\u{41C}\u{415}\u{41D}\u{422}",
        'IMCONJUGATE' => "\u{41C}\u{41D}\u{418}\u{41C}.\u{421}\u{41E}\u{41F}\u{420}\u{42F}\u{416}",
        'IMCOS' => "\u{41C}\u{41D}\u{418}\u{41C}.COS",
        'IMDIV' => "\u{41C}\u{41D}\u{418}\u{41C}.\u{414}\u{415}\u{41B}",
        'IMEXP' => "\u{41C}\u{41D}\u{418}\u{41C}.EXP",
        'IMLN' => "\u{41C}\u{41D}\u{418}\u{41C}.LN",
        'IMLOG10' => "\u{41C}\u{41D}\u{418}\u{41C}.LOG10",
        'IMLOG2' => "\u{41C}\u{41D}\u{418}\u{41C}.LOG2",
        'IMPOWER' => "\u{41C}\u{41D}\u{418}\u{41C}.\u{421}\u{422}\u{415}\u{41F}\u{415}\u{41D}\u{42C}",
        'IMPRODUCT' => "\u{41C}\u{41D}\u{418}\u{41C}.\u{41F}\u{420}\u{41E}\u{418}\u{417}\u{412}\u{415}\u{414}",
        'IMREAL' => "\u{41C}\u{41D}\u{418}\u{41C}.\u{412}\u{415}\u{429}",
        'IMSIN' => "\u{41C}\u{41D}\u{418}\u{41C}.SIN",
        'IMSQRT' => "\u{41C}\u{41D}\u{418}\u{41C}.\u{41A}\u{41E}\u{420}\u{415}\u{41D}\u{42C}",
        'IMSUB' => "\u{41C}\u{41D}\u{418}\u{41C}.\u{420}\u{410}\u{417}\u{41D}",
        'IMSUM' => "\u{41C}\u{41D}\u{418}\u{41C}.\u{421}\u{423}\u{41C}\u{41C}",
        'OCT2BIN' => "\u{412}\u{41E}\u{421}\u{42C}\u{41C}.\u{412}.\u{414}\u{412}",
        'OCT2DEC' => "\u{412}\u{41E}\u{421}\u{42C}\u{41C}.\u{412}.\u{414}\u{415}\u{421}",
        'OCT2HEX' => "\u{412}\u{41E}\u{421}\u{42C}\u{41C}.\u{412}.\u{428}\u{415}\u{421}\u{422}\u{41D}",

        // Финансови функции (Financial functions)
        'ACCRINT' => "\u{41D}\u{410}\u{41A}\u{41E}\u{41F}\u{414}\u{41E}\u{425}\u{41E}\u{414}",
        'ACCRINTM' => "\u{41D}\u{410}\u{41A}\u{41E}\u{41F}\u{414}\u{41E}\u{425}\u{41E}\u{414}\u{41F}\u{41E}\u{413}\u{410}\u{428}",
        'AMORDEGRC' => "\u{410}\u{41C}\u{41E}\u{420}\u{423}\u{41C}",
        'AMORLINC' => "\u{410}\u{41C}\u{41E}\u{420}\u{423}\u{412}",
        'COUPDAYBS' => "\u{414}\u{41D}\u{415}\u{419}\u{41A}\u{423}\u{41F}\u{41E}\u{41D}\u{414}\u{41E}",
        'COUPDAYS' => "\u{414}\u{41D}\u{415}\u{419}\u{41A}\u{423}\u{41F}\u{41E}\u{41D}",
        'COUPDAYSNC' => "\u{414}\u{41D}\u{415}\u{419}\u{41A}\u{423}\u{41F}\u{41E}\u{41D}\u{41F}\u{41E}\u{421}\u{41B}\u{415}",
        'COUPNCD' => "\u{414}\u{410}\u{422}\u{410}\u{41A}\u{423}\u{41F}\u{41E}\u{41D}\u{41F}\u{41E}\u{421}\u{41B}\u{415}",
        'COUPNUM' => "\u{427}\u{418}\u{421}\u{41B}\u{41A}\u{423}\u{41F}\u{41E}\u{41D}",
        'COUPPCD' => "\u{414}\u{410}\u{422}\u{410}\u{41A}\u{423}\u{41F}\u{41E}\u{41D}\u{414}\u{41E}",
        'CUMIPMT' => "\u{41E}\u{411}\u{429}\u{41F}\u{41B}\u{410}\u{422}",
        'CUMPRINC' => "\u{41E}\u{411}\u{429}\u{414}\u{41E}\u{425}\u{41E}\u{414}",
        'DB' => "\u{424}\u{423}\u{41E}",
        'DDB' => "\u{414}\u{414}\u{41E}\u{411}",
        'DISC' => "\u{421}\u{41A}\u{418}\u{414}\u{41A}\u{410}",
        'DOLLARDE' => "\u{420}\u{423}\u{411}\u{41B}\u{42C}.\u{414}\u{415}\u{421}",
        'DOLLARFR' => "\u{420}\u{423}\u{411}\u{41B}\u{42C}.\u{414}\u{420}\u{41E}\u{411}\u{42C}",
        'DURATION' => "\u{414}\u{41B}\u{418}\u{422}",
        'EFFECT' => "\u{42D}\u{424}\u{424}\u{415}\u{41A}\u{422}",
        'FV' => "\u{411}\u{421}",
        'FVSCHEDULE' => "\u{411}\u{417}\u{420}\u{410}\u{421}\u{41F}\u{418}\u{421}",
        'INTRATE' => "\u{418}\u{41D}\u{41E}\u{420}\u{41C}\u{410}",
        'IPMT' => "\u{41F}\u{420}\u{41F}\u{41B}\u{422}",
        'IRR' => "\u{412}\u{421}\u{414}",
        'ISPMT' => "\u{41F}\u{420}\u{41E}\u{426}\u{41F}\u{41B}\u{410}\u{422}",
        'MDURATION' => "\u{41C}\u{414}\u{41B}\u{418}\u{422}",
        'MIRR' => "\u{41C}\u{412}\u{421}\u{414}",
        'NOMINAL' => "\u{41D}\u{41E}\u{41C}\u{418}\u{41D}\u{410}\u{41B}",
        'NPER' => "\u{41A}\u{41F}\u{415}\u{420}",
        'NPV' => "\u{427}\u{41F}\u{421}",
        'ODDFPRICE' => "\u{426}\u{415}\u{41D}\u{410}\u{41F}\u{415}\u{420}\u{412}\u{41D}\u{415}\u{420}\u{415}\u{413}",
        'ODDFYIELD' => "\u{414}\u{41E}\u{425}\u{41E}\u{414}\u{41F}\u{415}\u{420}\u{412}\u{41D}\u{415}\u{420}\u{415}\u{413}",
        'ODDLPRICE' => "\u{426}\u{415}\u{41D}\u{410}\u{41F}\u{41E}\u{421}\u{41B}\u{41D}\u{415}\u{420}\u{415}\u{413}",
        'ODDLYIELD' => "\u{414}\u{41E}\u{425}\u{41E}\u{414}\u{41F}\u{41E}\u{421}\u{41B}\u{41D}\u{415}\u{420}\u{415}\u{413}",
        'PMT' => "\u{41F}\u{41B}\u{422}",
        'PPMT' => "\u{41E}\u{421}\u{41F}\u{41B}\u{422}",
        'PRICE' => "\u{426}\u{415}\u{41D}\u{410}",
        'PRICEDISC' => "\u{426}\u{415}\u{41D}\u{410}\u{421}\u{41A}\u{418}\u{414}\u{41A}\u{410}",
        'PRICEMAT' => "\u{426}\u{415}\u{41D}\u{410}\u{41F}\u{41E}\u{413}\u{410}\u{428}",
        'PV' => "\u{41F}\u{421}",
        'RATE' => "\u{421}\u{422}\u{410}\u{412}\u{41A}\u{410}",
        'RECEIVED' => "\u{41F}\u{41E}\u{41B}\u{423}\u{427}\u{415}\u{41D}\u{41E}",
        'SLN' => "\u{410}\u{41F}\u{41B}",
        'SYD' => "\u{410}\u{421}\u{427}",
        'TBILLEQ' => "\u{420}\u{410}\u{412}\u{41D}\u{41E}\u{41A}\u{427}\u{415}\u{41A}",
        'TBILLPRICE' => "\u{426}\u{415}\u{41D}\u{410}\u{41A}\u{427}\u{415}\u{41A}",
        'TBILLYIELD' => "\u{414}\u{41E}\u{425}\u{41E}\u{414}\u{41A}\u{427}\u{415}\u{41A}",
        'VDB' => "\u{41F}\u{423}\u{41E}",
        'XIRR' => "\u{427}\u{418}\u{421}\u{422}\u{412}\u{41D}\u{414}\u{41E}\u{425}",
        'XNPV' => "\u{427}\u{418}\u{421}\u{422}\u{41D}\u{417}",
        'YIELD' => "\u{414}\u{41E}\u{425}\u{41E}\u{414}",
        'YIELDDISC' => "\u{414}\u{41E}\u{425}\u{41E}\u{414}\u{421}\u{41A}\u{418}\u{414}\u{41A}\u{410}",
        'YIELDMAT' => "\u{414}\u{41E}\u{425}\u{41E}\u{414}\u{41F}\u{41E}\u{413}\u{410}\u{428}",

        // Информационни функции (Information functions)
        'CELL' => "\u{42F}\u{427}\u{415}\u{419}\u{41A}\u{410}",
        'ERROR.TYPE' => "\u{422}\u{418}\u{41F}.\u{41E}\u{428}\u{418}\u{411}\u{41A}\u{418}",
        'INFO' => "\u{418}\u{41D}\u{424}\u{41E}\u{420}\u{41C}",
        'ISBLANK' => "\u{415}\u{41F}\u{423}\u{421}\u{422}\u{41E}",
        'ISERR' => "\u{415}\u{41E}\u{428}",
        'ISERROR' => "\u{415}\u{41E}\u{428}\u{418}\u{411}\u{41A}\u{410}",
        'ISEVEN' => "\u{415}\u{427}\u{401}\u{422}\u{41D}",
        'ISLOGICAL' => "\u{415}\u{41B}\u{41E}\u{413}\u{418}\u{427}",
        'ISNA' => "\u{415}\u{41D}\u{414}",
        'ISNONTEXT' => "\u{415}\u{41D}\u{415}\u{422}\u{415}\u{41A}\u{421}\u{422}",
        'ISNUMBER' => "\u{415}\u{427}\u{418}\u{421}\u{41B}\u{41E}",
        'ISODD' => "\u{415}\u{41D}\u{415}\u{427}\u{401}\u{422}",
        'ISREF' => "\u{415}\u{421}\u{421}\u{42B}\u{41B}\u{41A}\u{410}",
        'ISTEXT' => "\u{415}\u{422}\u{415}\u{41A}\u{421}\u{422}",
        'N' => "\u{427}",
        'NA' => "\u{41D}\u{414}",
        'TYPE' => "\u{422}\u{418}\u{41F}",

        // Логически функции (Logical functions)
        'AND' => "\u{418}",
        'FALSE' => "\u{41B}\u{41E}\u{416}\u{42C}",
        'IF' => "\u{415}\u{421}\u{41B}\u{418}",
        'IFERROR' => "\u{415}\u{421}\u{41B}\u{418}\u{41E}\u{428}\u{418}\u{411}\u{41A}\u{410}",
        'NOT' => "\u{41D}\u{415}",
        'OR' => "\u{418}\u{41B}\u{418}",
        'TRUE' => "\u{418}\u{421}\u{422}\u{418}\u{41D}\u{410}",

        // Функции за търсене и препращане (Lookup and reference functions)
        '*RC' => 'RC',
        'ADDRESS' => "\u{410}\u{414}\u{420}\u{415}\u{421}",
        'AREAS' => "\u{41E}\u{411}\u{41B}\u{410}\u{421}\u{422}\u{418}",
        'CHOOSE' => "\u{412}\u{42B}\u{411}\u{41E}\u{420}",
        'COLUMN' => "\u{421}\u{422}\u{41E}\u{41B}\u{411}\u{415}\u{426}",
        'COLUMNS' => "\u{427}\u{418}\u{421}\u{41B}\u{421}\u{422}\u{41E}\u{41B}\u{411}",
        'GETPIVOTDATA' => "\u{41F}\u{41E}\u{41B}\u{423}\u{427}\u{418}\u{422}\u{42C}.\u{414}\u{410}\u{41D}\u{41D}\u{42B}\u{415}.\u{421}\u{412}\u{41E}\u{414}\u{41D}\u{41E}\u{419}.\u{422}\u{410}\u{411}\u{41B}\u{418}\u{426}\u{42B}",
        'HLOOKUP' => "\u{413}\u{41F}\u{420}",
        'HYPERLINK' => "\u{413}\u{418}\u{41F}\u{415}\u{420}\u{421}\u{421}\u{42B}\u{41B}\u{41A}\u{410}",
        'INDEX' => "\u{418}\u{41D}\u{414}\u{415}\u{41A}\u{421}",
        'INDIRECT' => "\u{414}\u{412}\u{421}\u{421}\u{42B}\u{41B}",
        'LOOKUP' => "\u{41F}\u{420}\u{41E}\u{421}\u{41C}\u{41E}\u{422}\u{420}",
        'MATCH' => "\u{41F}\u{41E}\u{418}\u{421}\u{41A}\u{41F}\u{41E}\u{417}",
        'OFFSET' => "\u{421}\u{41C}\u{415}\u{429}",
        'ROW' => "\u{421}\u{422}\u{420}\u{41E}\u{41A}\u{410}",
        'ROWS' => "\u{427}\u{421}\u{422}\u{420}\u{41E}\u{41A}",
        'RTD' => "\u{414}\u{420}\u{412}",
        'TRANSPOSE' => "\u{422}\u{420}\u{410}\u{41D}\u{421}\u{41F}",
        'VLOOKUP' => "\u{412}\u{41F}\u{420}",

        // Математически и тригонометрични функции (Math and trigonometry functions)
        'COMBIN' => "\u{427}\u{418}\u{421}\u{41B}\u{41A}\u{41E}\u{41C}\u{411}",
        'DEGREES' => "\u{413}\u{420}\u{410}\u{414}\u{423}\u{421}\u{42B}",
        'EVEN' => "\u{427}\u{401}\u{422}\u{41D}",
        'FACT' => "\u{424}\u{410}\u{41A}\u{422}\u{420}",
        'FACTDOUBLE' => "\u{414}\u{412}\u{424}\u{410}\u{41A}\u{422}\u{420}",
        'GCD' => "\u{41D}\u{41E}\u{414}",
        'INT' => "\u{426}\u{415}\u{41B}\u{41E}\u{415}",
        'LCM' => "\u{41D}\u{41E}\u{41A}",
        'MDETERM' => "\u{41C}\u{41E}\u{41F}\u{420}\u{415}\u{414}",
        'MINVERSE' => "\u{41C}\u{41E}\u{411}\u{420}",
        'MMULT' => "\u{41C}\u{423}\u{41C}\u{41D}\u{41E}\u{416}",
        'MOD' => "\u{41E}\u{421}\u{422}\u{410}\u{422}",
        'MROUND' => "\u{41E}\u{41A}\u{420}\u{423}\u{413}\u{41B}\u{422}",
        'MULTINOMIAL' => "\u{41C}\u{423}\u{41B}\u{42C}\u{422}\u{418}\u{41D}\u{41E}\u{41C}",
        'ODD' => "\u{41D}\u{415}\u{427}\u{401}\u{422}",
        'PI' => "\u{41F}\u{418}",
        'POWER' => "\u{421}\u{422}\u{415}\u{41F}\u{415}\u{41D}\u{42C}",
        'PRODUCT' => "\u{41F}\u{420}\u{41E}\u{418}\u{417}\u{412}\u{415}\u{414}",
        'QUOTIENT' => "\u{427}\u{410}\u{421}\u{422}\u{41D}\u{41E}\u{415}",
        'RADIANS' => "\u{420}\u{410}\u{414}\u{418}\u{410}\u{41D}\u{42B}",
        'RAND' => "\u{421}\u{41B}\u{427}\u{418}\u{421}",
        'RANDBETWEEN' => "\u{421}\u{41B}\u{423}\u{427}\u{41C}\u{415}\u{416}\u{414}\u{423}",
        'ROMAN' => "\u{420}\u{418}\u{41C}\u{421}\u{41A}\u{41E}\u{415}",
        'ROUND' => "\u{41E}\u{41A}\u{420}\u{423}\u{413}\u{41B}",
        'ROUNDDOWN' => "\u{41E}\u{41A}\u{420}\u{423}\u{413}\u{41B}\u{412}\u{41D}\u{418}\u{417}",
        'ROUNDUP' => "\u{41E}\u{41A}\u{420}\u{423}\u{413}\u{41B}\u{412}\u{412}\u{415}\u{420}\u{425}",
        'SERIESSUM' => "\u{420}\u{42F}\u{414}.\u{421}\u{423}\u{41C}\u{41C}",
        'SIGN' => "\u{417}\u{41D}\u{410}\u{41A}",
        'SQRT' => "\u{41A}\u{41E}\u{420}\u{415}\u{41D}\u{42C}",
        'SQRTPI' => "\u{41A}\u{41E}\u{420}\u{415}\u{41D}\u{42C}\u{41F}\u{418}",
        'SUBTOTAL' => "\u{41F}\u{420}\u{41E}\u{41C}\u{415}\u{416}\u{423}\u{422}\u{41E}\u{427}\u{41D}\u{42B}\u{415}.\u{418}\u{422}\u{41E}\u{413}\u{418}",
        'SUM' => "\u{421}\u{423}\u{41C}\u{41C}",
        'SUMIF' => "\u{421}\u{423}\u{41C}\u{41C}\u{415}\u{421}\u{41B}\u{418}",
        'SUMIFS' => "\u{421}\u{423}\u{41C}\u{41C}\u{415}\u{421}\u{41B}\u{418}\u{41C}\u{41D}",
        'SUMPRODUCT' => "\u{421}\u{423}\u{41C}\u{41C}\u{41F}\u{420}\u{41E}\u{418}\u{417}\u{412}",
        'SUMSQ' => "\u{421}\u{423}\u{41C}\u{41C}\u{41A}\u{412}",
        'SUMX2MY2' => "\u{421}\u{423}\u{41C}\u{41C}\u{420}\u{410}\u{417}\u{41D}\u{41A}\u{412}",
        'SUMX2PY2' => "\u{421}\u{423}\u{41C}\u{41C}\u{421}\u{423}\u{41C}\u{41C}\u{41A}\u{412}",
        'SUMXMY2' => "\u{421}\u{423}\u{41C}\u{41C}\u{41A}\u{412}\u{420}\u{410}\u{417}\u{41D}",
        'TRUNC' => "\u{41E}\u{422}\u{411}\u{420}",

        // Статистически функции (Statistical functions)
        'AVEDEV' => "\u{421}\u{420}\u{41E}\u{422}\u{41A}\u{41B}",
        'AVERAGE' => "\u{421}\u{420}\u{417}\u{41D}\u{410}\u{427}",
        'AVERAGEA' => "\u{421}\u{420}\u{417}\u{41D}\u{410}\u{427}\u{410}",
        'AVERAGEIF' => "\u{421}\u{420}\u{417}\u{41D}\u{410}\u{427}\u{415}\u{421}\u{41B}\u{418}",
        'AVERAGEIFS' => "\u{421}\u{420}\u{417}\u{41D}\u{410}\u{427}\u{415}\u{421}\u{41B}\u{418}\u{41C}\u{41D}",
        'CORREL' => "\u{41A}\u{41E}\u{420}\u{420}\u{415}\u{41B}",
        'COUNT' => "\u{421}\u{427}\u{401}\u{422}",
        'COUNTA' => "\u{421}\u{427}\u{401}\u{422}\u{417}",
        'COUNTBLANK' => "\u{421}\u{427}\u{418}\u{422}\u{410}\u{422}\u{42C}\u{41F}\u{423}\u{421}\u{422}\u{41E}\u{422}\u{42B}",
        'COUNTIF' => "\u{421}\u{427}\u{401}\u{422}\u{415}\u{421}\u{41B}\u{418}",
        'COUNTIFS' => "\u{421}\u{427}\u{401}\u{422}\u{415}\u{421}\u{41B}\u{418}\u{41C}\u{41D}",
        'DEVSQ' => "\u{41A}\u{412}\u{410}\u{414}\u{420}\u{41E}\u{422}\u{41A}\u{41B}",
        'FISHER' => "\u{424}\u{418}\u{428}\u{415}\u{420}",
        'FISHERINV' => "\u{424}\u{418}\u{428}\u{415}\u{420}\u{41E}\u{411}\u{420}",
        'FREQUENCY' => "\u{427}\u{410}\u{421}\u{422}\u{41E}\u{422}\u{410}",
        'GAMMALN' => "\u{413}\u{410}\u{41C}\u{41C}\u{410}\u{41D}\u{41B}\u{41E}\u{413}",
        'GEOMEAN' => "\u{421}\u{420}\u{413}\u{415}\u{41E}\u{41C}",
        'GROWTH' => "\u{420}\u{41E}\u{421}\u{422}",
        'HARMEAN' => "\u{421}\u{420}\u{413}\u{410}\u{420}\u{41C}",
        'INTERCEPT' => "\u{41E}\u{422}\u{420}\u{415}\u{417}\u{41E}\u{41A}",
        'KURT' => "\u{42D}\u{41A}\u{421}\u{426}\u{415}\u{421}\u{421}",
        'LARGE' => "\u{41D}\u{410}\u{418}\u{411}\u{41E}\u{41B}\u{42C}\u{428}\u{418}\u{419}",
        'LINEST' => "\u{41B}\u{418}\u{41D}\u{415}\u{419}\u{41D}",
        'LOGEST' => "\u{41B}\u{413}\u{420}\u{424}\u{41F}\u{420}\u{418}\u{411}\u{41B}",
        'MAX' => "\u{41C}\u{410}\u{41A}\u{421}",
        'MAXA' => "\u{41C}\u{410}\u{41A}\u{421}\u{410}",
        'MEDIAN' => "\u{41C}\u{415}\u{414}\u{418}\u{410}\u{41D}\u{410}",
        'MIN' => "\u{41C}\u{418}\u{41D}",
        'MINA' => "\u{41C}\u{418}\u{41D}\u{410}",
        'PEARSON' => "\u{41F}\u{418}\u{420}\u{421}\u{41E}\u{41D}",
        'PERMUT' => "\u{41F}\u{415}\u{420}\u{415}\u{421}\u{422}",
        'PROB' => "\u{412}\u{415}\u{420}\u{41E}\u{42F}\u{422}\u{41D}\u{41E}\u{421}\u{422}\u{42C}",
        'RSQ' => "\u{41A}\u{412}\u{41F}\u{418}\u{420}\u{421}\u{41E}\u{41D}",
        'SKEW' => "\u{421}\u{41A}\u{41E}\u{421}",
        'SLOPE' => "\u{41D}\u{410}\u{41A}\u{41B}\u{41E}\u{41D}",
        'SMALL' => "\u{41D}\u{410}\u{418}\u{41C}\u{415}\u{41D}\u{42C}\u{428}\u{418}\u{419}",
        'STANDARDIZE' => "\u{41D}\u{41E}\u{420}\u{41C}\u{410}\u{41B}\u{418}\u{417}\u{410}\u{426}\u{418}\u{42F}",
        'STDEVA' => "\u{421}\u{422}\u{410}\u{41D}\u{414}\u{41E}\u{422}\u{41A}\u{41B}\u{41E}\u{41D}\u{410}",
        'STDEVPA' => "\u{421}\u{422}\u{410}\u{41D}\u{414}\u{41E}\u{422}\u{41A}\u{41B}\u{41E}\u{41D}\u{41F}\u{410}",
        'STEYX' => "\u{421}\u{422}\u{41E}\u{428}YX",
        'TREND' => "\u{422}\u{415}\u{41D}\u{414}\u{415}\u{41D}\u{426}\u{418}\u{42F}",
        'TRIMMEAN' => "\u{423}\u{420}\u{415}\u{417}\u{421}\u{420}\u{415}\u{414}\u{41D}\u{415}\u{415}",
        'VARA' => "\u{414}\u{418}\u{421}\u{41F}\u{410}",
        'VARPA' => "\u{414}\u{418}\u{421}\u{41F}\u{420}\u{410}",

        // Текстови функции (Text functions)
        'BAHTTEXT' => "\u{411}\u{410}\u{422}\u{422}\u{415}\u{41A}\u{421}\u{422}",
        'CHAR' => "\u{421}\u{418}\u{41C}\u{412}\u{41E}\u{41B}",
        'CLEAN' => "\u{41F}\u{415}\u{427}\u{421}\u{418}\u{41C}\u{412}",
        'CODE' => "\u{41A}\u{41E}\u{414}\u{421}\u{418}\u{41C}\u{412}",
        'DOLLAR' => "\u{420}\u{423}\u{411}\u{41B}\u{42C}",
        'EXACT' => "\u{421}\u{41E}\u{412}\u{41F}\u{410}\u{414}",
        'FIND' => "\u{41D}\u{410}\u{419}\u{422}\u{418}",
        'FINDB' => "\u{41D}\u{410}\u{419}\u{422}\u{418}\u{411}",
        'FIXED' => "\u{424}\u{418}\u{41A}\u{421}\u{418}\u{420}\u{41E}\u{412}\u{410}\u{41D}\u{41D}\u{42B}\u{419}",
        'LEFT' => "\u{41B}\u{415}\u{412}\u{421}\u{418}\u{41C}\u{412}",
        'LEFTB' => "\u{41B}\u{415}\u{412}\u{411}",
        'LEN' => "\u{414}\u{41B}\u{421}\u{422}\u{420}",
        'LENB' => "\u{414}\u{41B}\u{418}\u{41D}\u{411}",
        'LOWER' => "\u{421}\u{422}\u{420}\u{41E}\u{427}\u{41D}",
        'MID' => "\u{41F}\u{421}\u{422}\u{420}",
        'MIDB' => "\u{41F}\u{421}\u{422}\u{420}\u{411}",
        'PROPER' => "\u{41F}\u{420}\u{41E}\u{41F}\u{41D}\u{410}\u{427}",
        'REPLACE' => "\u{417}\u{410}\u{41C}\u{415}\u{41D}\u{418}\u{422}\u{42C}",
        'REPLACEB' => "\u{417}\u{410}\u{41C}\u{415}\u{41D}\u{418}\u{422}\u{42C}\u{411}",
        'REPT' => "\u{41F}\u{41E}\u{412}\u{422}\u{41E}\u{420}",
        'RIGHT' => "\u{41F}\u{420}\u{410}\u{412}\u{421}\u{418}\u{41C}\u{412}",
        'RIGHTB' => "\u{41F}\u{420}\u{410}\u{412}\u{411}",
        'SEARCH' => "\u{41F}\u{41E}\u{418}\u{421}\u{41A}",
        'SEARCHB' => "\u{41F}\u{41E}\u{418}\u{421}\u{41A}\u{411}",
        'SUBSTITUTE' => "\u{41F}\u{41E}\u{414}\u{421}\u{422}\u{410}\u{412}\u{418}\u{422}\u{42C}",
        'T' => "\u{422}",
        'TEXT' => "\u{422}\u{415}\u{41A}\u{421}\u{422}",
        'TRIM' => "\u{421}\u{416}\u{41F}\u{420}\u{41E}\u{411}\u{415}\u{41B}\u{42B}",
        'UPPER' => "\u{41F}\u{420}\u{41E}\u{41F}\u{418}\u{421}\u{41D}",
        'VALUE' => "\u{417}\u{41D}\u{410}\u{427}\u{415}\u{41D}",

        // Функции за съвместимост (Compatibility functions)
        'BETADIST' => "\u{411}\u{415}\u{422}\u{410}\u{420}\u{410}\u{421}\u{41F}",
        'BETAINV' => "\u{411}\u{415}\u{422}\u{410}\u{41E}\u{411}\u{420}",
        'BINOMDIST' => "\u{411}\u{418}\u{41D}\u{41E}\u{41C}\u{420}\u{410}\u{421}\u{41F}",
        'CEILING' => "\u{41E}\u{41A}\u{420}\u{412}\u{412}\u{415}\u{420}\u{425}",
        'CHIDIST' => "\u{425}\u{418}2\u{420}\u{410}\u{421}\u{41F}",
        'CHIINV' => "\u{425}\u{418}2\u{41E}\u{411}\u{420}",
        'CHITEST' => "\u{425}\u{418}2\u{422}\u{415}\u{421}\u{422}",
        'CONCATENATE' => "\u{421}\u{426}\u{415}\u{41F}\u{418}\u{422}\u{42C}",
        'CONFIDENCE' => "\u{414}\u{41E}\u{412}\u{415}\u{420}\u{418}\u{422}",
        'COVAR' => "\u{41A}\u{41E}\u{412}\u{410}\u{420}",
        'CRITBINOM' => "\u{41A}\u{420}\u{418}\u{422}\u{411}\u{418}\u{41D}\u{41E}\u{41C}",
        'EXPONDIST' => "\u{42D}\u{41A}\u{421}\u{41F}\u{420}\u{410}\u{421}\u{41F}",
        'FDIST' => "F\u{420}\u{410}\u{421}\u{41F}",
        'FINV' => "F\u{420}\u{410}\u{421}\u{41F}\u{41E}\u{411}\u{420}",
        'FLOOR' => "\u{41E}\u{41A}\u{420}\u{412}\u{41D}\u{418}\u{417}",
        'FORECAST' => "\u{41F}\u{420}\u{415}\u{414}\u{421}\u{41A}\u{410}\u{417}",
        'FTEST' => "\u{424}\u{422}\u{415}\u{421}\u{422}",
        'GAMMADIST' => "\u{413}\u{410}\u{41C}\u{41C}\u{410}\u{420}\u{410}\u{421}\u{41F}",
        'GAMMAINV' => "\u{413}\u{410}\u{41C}\u{41C}\u{410}\u{41E}\u{411}\u{420}",
        'HYPGEOMDIST' => "\u{413}\u{418}\u{41F}\u{415}\u{420}\u{413}\u{415}\u{41E}\u{41C}\u{415}\u{422}",
        'LOGINV' => "\u{41B}\u{41E}\u{413}\u{41D}\u{41E}\u{420}\u{41C}\u{41E}\u{411}\u{420}",
        'LOGNORMDIST' => "\u{41B}\u{41E}\u{413}\u{41D}\u{41E}\u{420}\u{41C}\u{420}\u{410}\u{421}\u{41F}",
        'MODE' => "\u{41C}\u{41E}\u{414}\u{410}",
        'NEGBINOMDIST' => "\u{41E}\u{422}\u{420}\u{411}\u{418}\u{41D}\u{41E}\u{41C}\u{420}\u{410}\u{421}\u{41F}",
        'NORMDIST' => "\u{41D}\u{41E}\u{420}\u{41C}\u{420}\u{410}\u{421}\u{41F}",
        'NORMINV' => "\u{41D}\u{41E}\u{420}\u{41C}\u{41E}\u{411}\u{420}",
        'NORMSDIST' => "\u{41D}\u{41E}\u{420}\u{41C}\u{421}\u{422}\u{420}\u{410}\u{421}\u{41F}",
        'NORMSINV' => "\u{41D}\u{41E}\u{420}\u{41C}\u{421}\u{422}\u{41E}\u{411}\u{420}",
        'PERCENTILE' => "\u{41F}\u{415}\u{420}\u{421}\u{415}\u{41D}\u{422}\u{418}\u{41B}\u{42C}",
        'PERCENTRANK' => "\u{41F}\u{420}\u{41E}\u{426}\u{415}\u{41D}\u{422}\u{420}\u{410}\u{41D}\u{413}",
        'POISSON' => "\u{41F}\u{423}\u{410}\u{421}\u{421}\u{41E}\u{41D}",
        'QUARTILE' => "\u{41A}\u{412}\u{410}\u{420}\u{422}\u{418}\u{41B}\u{42C}",
        'RANK' => "\u{420}\u{410}\u{41D}\u{413}",
        'STDEV' => "\u{421}\u{422}\u{410}\u{41D}\u{414}\u{41E}\u{422}\u{41A}\u{41B}\u{41E}\u{41D}",
        'STDEVP' => "\u{421}\u{422}\u{410}\u{41D}\u{414}\u{41E}\u{422}\u{41A}\u{41B}\u{41E}\u{41D}\u{41F}",
        'TDIST' => "\u{421}\u{422}\u{42C}\u{42E}\u{414}\u{420}\u{410}\u{421}\u{41F}",
        'TINV' => "\u{421}\u{422}\u{42C}\u{42E}\u{414}\u{420}\u{410}\u{421}\u{41F}\u{41E}\u{411}\u{420}",
        'TTEST' => "\u{422}\u{422}\u{415}\u{421}\u{422}",
        'VAR' => "\u{414}\u{418}\u{421}\u{41F}",
        'VARP' => "\u{414}\u{418}\u{421}\u{41F}\u{420}",
        'WEIBULL' => "\u{412}\u{415}\u{419}\u{411}\u{423}\u{41B}\u{41B}",
        'ZTEST' => "Z\u{422}\u{415}\u{421}\u{422}",
    ];
}