<?php

namespace PhpOffice\PhpSpreadsheet\Locale;


abstract class FormulaLocale
{
    // Former versions of Excel (e.g. Excel 2003,2007,2010,2013)
    const VERSION_LEGACY = 'legacy';
    // Office 365
    const VERSION_CURRENT = 'current';

    /**
     * @var array<int,string> The international configuration keys
     */
    protected static $aInternationalKeys = array(
        1 => 'xlCountryCode',
        2 => 'xlCountrySetting',
        3 => 'xlDecimalSeparator',
        4 => 'xlThousandsSeparator',
        5 => 'xlListSeparator',
        6 => 'xlUpperCaseRowLetter',
        7 => 'xlUpperCaseColumnLetter',
        8 => 'xlLowerCaseRowLetter',
        9 => 'xlLowerCaseColumnLetter',
        10 => 'xlLeftBracket',
        11 => 'xlRightBracket',
        12 => 'xlLeftBrace',
        13 => 'xlRightBrace',
        14 => 'xlColumnSeparator',
        15 => 'xlRowSeparator',
        16 => 'xlAlternateArraySeparator',
        17 => 'xlDateSeparator',
        18 => 'xlTimeSeparator',
        19 => 'xlYearCode',
        20 => 'xlMonthCode',
        21 => 'xlDayCode',
        22 => 'xlHourCode',
        23 => 'xlMinuteCode',
        24 => 'xlSecondCode',
        25 => 'xlCurrencyCode',
        26 => 'xlGeneralFormatName',
        27 => 'xlCurrencyDigits',
        28 => 'xlCurrencyNegative',
        29 => 'xlNoncurrencyDigits',
        30 => 'xlMonthNameChars',
        31 => 'xlWeekdayNameChars',
        32 => 'xlDateOrder',
        33 => 'xl24HourClock',
        34 => 'xlNonEnglishFunctions',
        35 => 'xlMetric',
        36 => 'xlCurrencySpaceBefore',
        37 => 'xlCurrencyBefore',
        38 => 'xlCurrencyMinusSign',
        39 => 'xlCurrencyTrailingZeros',
        40 => 'xlCurrencyLeadingZeros',
        41 => 'xlMonthLeadingZero',
        42 => 'xlDayLeadingZero',
        43 => 'xl4DigitYears',
        44 => 'xlMDY',
        45 => 'xlTimeLeadingZero',
    );

    /**
     * @var string Version mode (default = legacy)
     */
    protected static $VERSION_MODE = self::VERSION_LEGACY;

    /**
     * @var string The locale tag
     */
    protected $tag;

    /**
     * @var string International configuration
     */
    protected $aInternational = array();

    /**
     * @var string Argument separator
     */
    protected $strArgumentSeparator = ',';

    /**
     * @var array<string, string> TRUE/FALSE/NULL representation
     */
    protected $aBooleanRepresentation = array(
        "TRUE" => "TRUE", 
        "FALSE" => "FALSE", 
        "NULL" => "NULL"
    );
    
    /**
     * @var array<string, string> Error codes - legacy
     */
    protected $error_codes_legacy = array(
        "NULL" => "#NULL!",
        "DIV0" => "#DIV/0!",
        "VALUE" => "#VALUE!",
        "REF" => "#REF!",
        "NAME" => "#NAME?",
        "NUM" => "#NUM!",
        "NA" => "#N/A",
        "GETTINGDATA" => "#GETTING_DATA",
        "SPILL" => "#SPILL!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

    /**
     * @var array<string, string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NULL!",
        "DIV0" => "#DIV/0!",
        "VALUE" => "#VALUE!",
        "REF" => "#REF!",
        "NAME" => "#NAME?",
        "NUM" => "#NUM!",
        "NA" => "#N/A",
        "GETTINGDATA" => "#GETTING_DATA!",
        "SPILL" => "#SPILL!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

    /**
     * @var array Formula functions - legacy
     */
    protected $functions_legacy = array(
        "*RC" => "RC",
    );

    /**
     * @var array Formula functions - current
     */
    protected $functions_current = array(
        "*RC" => "RC",
    );

    /**
     * Set formula version mode
     *
     * @param string $version The version specification (legacy/current)
     */
    public static function setVersionMode(string $version)
    {
        if ($version == self::VERSION_CURRENT)
        {
            self::$VERSION_MODE = $version;
        } else {
            self::$VERSION_MODE = self::VERSION_LEGACY;
        }
    }

    /**
     * Retrieve the locale tag
     *
     * @return string The locale tag
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Get argument separator
     *
     * @return string Argument separator (e.g. "," or ";")
     */
    public function getArgumentSeparator()
    {
        return $this->strArgumentSeparator;
    }

    /**
     * Retrieve the functions list
     *
     * @return array<string, string> The list of function names indexed by the 
     * international function name
     */
    public function getFunctions()
    {
        if (self::$VERSION_MODE == self::VERSION_CURRENT)
        {
            return $this->functions_current;
        }

        return $this->functions_legacy;
    }

    /**
     * Retrieve the boolean representation array
     *
     * @return array<string, string> TRUE, FALSE, NULL strings
     */
    public function getBooleanRepresentation()
    {
        return $this->aBooleanRepresentation;
    }

    /**
     * Retrieve the locale slug
     *
     * @return string The locale slug (e.g. "en_us")
     */
    public function getSlug()
    {
        return str_replace('-','_', $this->tag);
    }
    
    /**
     * Retrieve international configuration value
     * 
     * @param string|int $key The settings key
     * @return The international setting; null if not found
     */
    public function getInternational($key)
    {
        if (is_int($key))
        {
            // Translate the settings key
            $key = isset(self::$aInternationalKeys[$key]) ? self::$aInternationalKeys[$key] : $key;
        }
        if (isset($this->aInternational[$key]))
        {
            return $this->aInternational[$key];
        }
        
        return null;
    }
}