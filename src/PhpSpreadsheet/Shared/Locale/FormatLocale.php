<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale;

use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

abstract class FormatLocale extends CalendarData
{
    /**
     * int Identifier for current locale.
     */
    public const LCID_CURRENT_LOCALE = 0x0100;

    /**
     * int Identifier for system time.
     */
    public const LCID_SYSTEM_TIME = 0xF400;

    /**
     * string Identifier for system date: 'F400'.
     */
    public const LCID_SYSTEM_TIME_DETECT = 'F400';

    /**
     * string Fixed format string for system time.
     */
    protected const SYSTEM_TIME_FORMAT = '[$-F400]h:mm:ss AM/PM';

    /**
     * int Identifier for system date.
     */
    public const LCID_SYSTEM_DATE = 0xF800;

    /**
     * string Identifier for system date: 'F800'.
     */
    public const LCID_SYSTEM_DATE_DETECT = 'F800';

    /**
     * string Fixed format string for system date.
     */
    protected const SYSTEM_DATE_FORMAT = '[$-F800]dddd, mmmm dd, yyyy';

    /**
     * string Default date separator.
     */
    public const DATESEPARATOR_DEFAULT = '/';

    /**
     * string Default time separator.
     */
    public const TIMESEPARATOR_DEFAULT = ':';

    /**
     * int No use of thousands separator '###############'.
     */
    public const THOUSANDS_FORMAT_NONE = 0;
    /**
     * int Regular thousands format '###,###,###,###,###'.
     */
    public const THOUSANDS_FORMAT_REGULAR = 1;
    /**
     * int Single thousands format '############,###'.
     */
    public const THOUSANDS_FORMAT_KILO = 2;
    /**
     * int Irregular thousands format '##,##,##,##,##,##,###'.
     */
    public const THOUSANDS_FORMAT_HECTO = 3;

    /**
     * Use regular weekday names and month names instead.
     */
    public const GREGORIAN_CALENDAR_USE_REGULAR = 'regular';

    /**
     * @var bool Overrule the cell format to use the current locale
     */
    protected static $overruleCellLocale = false;

    /**
     * @var int The LCID code (e.g. 0x416)
     */
    protected $lcid;

    /**
     * @var string The locale tag (e.g. "pt-br")
     */
    protected $tag;

    /**
     * @var string[] The digits representation (0 up to 9)
     */
    protected $aNumerals = [LocaleLayout::NUMERALS_ARABIC];

    /**
     * @var null|array<int, string> Locale specific list of built-in format codes
     */
    protected $aBuiltInFormatCodes;

    /**
     * Locale specific alterations on the built-in format codes.
     *
     * @var null|array<int, string>
     */
    protected $aBuiltInFormatCodesAlterations;

    /**
     * @var array Built-in format codes (extracted from Excel)
     *
     * The standard used is the Microsoft Office/365 implementation.
     * The ECMA standard deviates a little from this. The locale deviations for
     * are applied in the specific format locale classes.
     *
     * [MS-OI29500: Microsoft Office Implementation Information for
     * ISO/IEC-29500 Standard Compliance]
     *
     * @see Paragraph 18.8.30. numFmt (Number Format)
     * https://www.ecma-international.org/publications-and-standards/standards/ecma-376/
     *
     * The ECMA standard defines built-in format IDs
     *     14: "mm-dd-yy"
     *     22: "m/d/yy h:mm"
     *     37: "#,##0 ;(#,##0)"
     *     38: "#,##0 ;[Red](#,##0)"
     *     39: "#,##0.00;(#,##0.00)"
     *     40: "#,##0.00;[Red](#,##0.00)"
     *     47: "mmss.0"
     *     KOR fmt 55: "yyyy-mm-dd"
     * Excel defines built-in format IDs
     *     14: "m/d/yyyy"
     *     22: "m/d/yyyy h:mm"
     *     37: "#,##0_);(#,##0)"
     *     38: "#,##0_);[Red](#,##0)"
     *     39: "#,##0.00_);(#,##0.00)"
     *     40: "#,##0.00_);[Red](#,##0.00)"
     *     47: "mm:ss.0"
     *     KOR fmt 55: "yyyy/mm/dd"
     */
    protected static $aBuiltInFormatCodesList = [
        0 => NumberFormat::FORMAT_GENERAL,
        1 => '0',
        2 => '0.00',
        3 => '#,##0',
        4 => '#,##0.00',
        5 => '$#,##0_);($#,##0)',
        6 => '$#,##0_);[Red]($#,##0)',
        7 => '$#,##0.00_);($#,##0.00)',
        8 => '$#,##0.00_);[Red]($#,##0.00)',
        9 => '0%',
        10 => '0.00%',
        11 => '0.00E+00',
        12 => '# ?/?',
        13 => '# ??/??',
        14 => 'm/d/yyyy',
        15 => 'd-mmm-yy',
        16 => 'd-mmm',
        17 => 'mmm-yy',
        18 => 'h:mm AM/PM',
        19 => 'h:mm:ss AM/PM',
        20 => 'h:mm',
        21 => 'h:mm:ss',
        22 => 'm/d/yyyy h:mm',
        23 => NumberFormat::FORMAT_GENERAL,
        24 => NumberFormat::FORMAT_GENERAL,
        25 => NumberFormat::FORMAT_GENERAL,
        26 => NumberFormat::FORMAT_GENERAL,
        27 => 'm/d/yyyy',
        28 => 'm/d/yyyy',
        29 => 'm/d/yyyy',
        30 => 'm/d/yyyy',
        31 => 'm/d/yyyy',
        32 => 'h:mm:ss',
        33 => 'h:mm:ss',
        34 => 'h:mm:ss',
        35 => 'h:mm:ss',
        36 => 'm/d/yyyy',
        37 => '#,##0_);(#,##0)',
        38 => '#,##0_);[Red](#,##0)',
        39 => '#,##0.00_);(#,##0.00)',
        40 => '#,##0.00_);[Red](#,##0.00)',
        41 => '_(* #,##0_);_(* (#,##0);_(* "-"_);_(@_)',
        42 => '_($* #,##0_);_($* (#,##0);_($* "-"_);_(@_)',
        43 => '_(* #,##0.00_);_(* (#,##0.00);_(* "-"??_);_(@_)',
        44 => '_($* #,##0.00_);_($* (#,##0.00);_($* "-"??_);_(@_)',
        45 => 'mm:ss',
        46 => '[h]:mm:ss',
        47 => 'mm:ss.0',
        48 => '##0.0E+0',
        49 => '@',
        50 => 'm/d/yyyy',
        51 => 'm/d/yyyy',
        52 => 'm/d/yyyy',
        53 => 'm/d/yyyy',
        54 => 'm/d/yyyy',
        55 => 'm/d/yyyy',
        56 => 'm/d/yyyy',
        57 => 'm/d/yyyy',
        58 => 'm/d/yyyy',
        59 => '0',
        60 => '0.00',
        61 => '#,##0',
        62 => '#,##0.00',
        63 => '$#,##0_);($#,##0)',
        64 => '$#,##0_);[Red]($#,##0)',
        65 => '$#,##0.00_);($#,##0.00)',
        66 => '$#,##0.00_);[Red]($#,##0.00)',
        67 => '0%',
        68 => '0.00%',
        69 => '# ?/?',
        70 => '# ??/??',
        71 => 'm/d/yyyy',
        72 => 'm/d/yyyy',
        73 => 'd-mmm-yy',
        74 => 'd-mmm',
        75 => 'mmm-yy',
        76 => 'h:mm',
        77 => 'h:mm:ss',
        78 => 'm/d/yyyy h:mm',
        79 => 'mm:ss',
        80 => '[h]:mm:ss',
        81 => 'mm:ss.0',
        // All other are NumberFormat::FORMAT_GENERAL
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        // Full names
        'full' => [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday',
        ],
        // Short names
        'short' => [
            'mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full names
        'full' => [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ],
        // Short names
        'short' => [
            'Jan', 'Feb', 'Mar', 'Apr',
            'May', 'Jun', 'Jul', 'Aug',
            'Sep', 'Oct', 'Nov', 'Dec',
        ],
    ];

    /**
     * @var array[]|string Names of the days of the week, for the alternative
     * Gregorian calendar display
     */
    protected $aWeekdayNamesAL = [];

    /**
     * @var array[]|string Names of the months of the year, for the alternative
     * Gregorian calendar display
     */
    protected $aMonthNamesAL = [];

    /**
     * @var array[] Names of the days of the week, for the current locale
     */
    protected $aWeekdayNamesCL = [];

    /**
     * @var array[] Names of the months of the year, for the current locale
     */
    protected $aMonthNamesCL = [];

    /**
     * @var array<string, string> Replacement formats
     */
    protected $aFormatReplacements = [];

    /**
     * @var string The currency code
     */
    protected $strCurrencyCode;

    /**
     * @var ?string The decimal separator
     */
    protected $strDecimalSeparator;

    /**
     * @var ?string The thousands separator
     */
    protected $strThousandsSeparator;

    /**
     * @var int The thousands format pattern
     */
    protected $intThousandsFormatPattern = self::THOUSANDS_FORMAT_REGULAR;

    /**
     * @var ?string The date separator
     */
    protected $strDateSeparator;

    /**
     * @var ?string The time separator
     */
    protected $strTimeSeparator;

    /**
     * Set format to overrule the cell locale (always use the current locale).
     *
     * @param bool $overrule Overrule the locale specifications
     */
    public static function setOverruleCellLocale(bool $overrule = true): void
    {
        self::$overruleCellLocale = $overrule;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    /**
     * Retrieve the LCID.
     *
     * @return int The LCID
     */
    public function getLcid(): int
    {
        return $this->lcid;
    }

    /**
     * Set the locale tag.
     *
     * @param string $strLocaleTag The locale tag (e.g. "pt-br")
     */
    protected function setTag(string $strLocaleTag): void
    {
        $this->tag = str_replace('_', '-', strtolower($strLocaleTag));
    }

    /**
     * Retrieve the locale tag.
     *
     * @return string The locale tag (e.g. "pt-br")
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Retrieve the locale slug.
     *
     * @return string The locale slug (e.g. "en_us")
     */
    public function getSlug()
    {
        return str_replace('-', '_', $this->tag);
    }

    /**
     * Retrieve the language code of this locale.
     *
     * @return string The first characters of the locale tag
     */
    public function getLanguage(): string
    {
        $aLang = explode('-', $this->tag);

        return $aLang[0];
    }

    /**
     * Check if this locale is the current user locale.
     *
     * @return bool True if current locale
     */
    public function isCurrent(): bool
    {
        $currentTag = CurrentLocale::getTag();

        return ($this->getTag() == $currentTag) || ($this->getLcid() == self::LCID_CURRENT_LOCALE);
    }

    /**
     * Check to see if the current locale should be used.
     * LCIDs: [$-1000], [$-F400], [$-F800].
     *
     * @param int $lcid The language code ID
     *
     * @return bool True if the current locale should be used
     */
    protected function shouldUseCurrentLocale($lcid): bool
    {
        return ($lcid == self::LCID_CURRENT_LOCALE) ||
                ($lcid == self::LCID_SYSTEM_TIME) ||
                ($lcid == self::LCID_SYSTEM_DATE);
    }

    /**
     * Extract locale configuration (LCID code, DbNum#, NatNum# settings).
     *
     * @param string $format The full format string
     *
     * @return array The locale format configuration (lcid, lcids, dbnum,
     * natnum, sysdate, systime, calendar, format and locale)
     */
    public function getLocaleConfiguration($format)
    {
        $aLocaleConfig = [
            // LCID code (e.g. 0x409)
            'lcid' => 0,
            // List of detected LCIDs e.g. ['409','413']
            'lcids' => [],
            // LCID used to transliterate dates (use specific language for
            // days and months)
            'lcid_transliterate' => false,
            // DbNum format code value
            'dbnum' => 0,
            // NatNum format code value
            'natnum' => false,
            // NatNum specifications (e.g. used for NatNum12)
            'natnum_specs' => false,
            // System date detected
            'sysdate' => false,
            // System time detected
            'systime' => false,
            // Selected calendar code to be used (0x00-0x18)
            'calendar_code' => LocaleLayout::CALENDAR_CODE_GREGORIAN,
            // Selected calendar type to be used (e.g. 'gregorian')
            'calendar_type' => LocaleLayout::CALENDAR_TYPE_GREGORIAN,
            // Selected numerals to be used
            'numerals' => LocaleLayout::NUMERALS_DEFAULT,
            // Format string
            'format' => $format,
            // Locale object, based upon LCID codes detected;
            // current locale otherwise.
            'locale' => null,
        ];

        // Detect locale codes, e.g. Chinese part like [DBNum1][$-804]
        //
        if (preg_match('/^(?<codes>(?:\[(?:\$\-|DbNum|NatNum|~)[^\]]*\][\s]*)*)(?<format>.*)$/iu', $format, $aLocaleCodes)) {
            // Set format
            $format = $aLocaleCodes['format'];
        } else {
            $aLocaleCodes = ['codes' => null];
        }

        if (!empty($aLocaleCodes['codes'])) {
            // Process all codes
            preg_match_all('/\[([^\]]*)\]/', $aLocaleCodes['codes'], $matches);

            $strFormatPrefix = '';
            foreach ($matches[1] as $pos => $code) {
                if (preg_match('/\$\-[0-9A-F]+/', $code)) {
                    // LCID
                    $lcidCode = substr($code, 2);

                    if (strcasecmp($lcidCode, self::LCID_SYSTEM_TIME_DETECT) == 0) {
                        // Apply system time
                        $aLocaleConfig['systime'] = true;

                        continue;
                    }

                    if (strcasecmp($lcidCode, self::LCID_SYSTEM_DATE_DETECT) == 0) {
                        // Apply system date
                        $aLocaleConfig['sysdate'] = true;

                        continue;
                    }

                    // Set LCID
                    $aLocaleConfig['lcids'][] = $lcidCode;
                    $aLocaleConfig['lcid'] = (int) hexdec($lcidCode);

                    // Extended LCID consists of 8 hexadecimal digits:
                    // [$-NNCCLLLL], with 2 first digits NN for native
                    // numerals, CC for calendar and LLLL for LCID code.
                    // @see https://help.libreoffice.org/7.5/en-GB/text/shared/01/05020301.html#ExtendedLCID

                    // Set numerals
                    // @see https://help.libreoffice.org/7.5/en-GB/text/shared/01/05020301.html?&DbPAR=WRITER&System=WIN#ExtendedLCID
                    $lcidNN = 0xFF000000 & $aLocaleConfig['lcid'];
                    $lcidNN = $lcidNN >> 24;
                    $aLocaleConfig['numerals'] = LocaleLayout::$aLocaleNumerals[$lcidNN] ?? LocaleLayout::$aLocaleNumerals[0x01];

                    // Set calendar code
                    $lcidCC = 0x00FF0000 & $aLocaleConfig['lcid'];
                    $lcidCC = $lcidCC >> 16;
                    if (isset(LocaleLayout::$aCalendarTypes[$lcidCC])) {
                        $aLocaleConfig['calendar_code'] = $lcidCC;
                    }

                    continue;
                }
                // Detect system date/time
                if (strcasecmp($code, '$-x-systime') == 0) {
                    // Apply system time
                    $aLocaleConfig['sysdate'] = true;

                    continue;
                }
                if (strcasecmp($code, '$-x-sysdate') == 0) {
                    // Apply system date
                    $aLocaleConfig['systime'] = true;

                    continue;
                }

                // Detect DbNum#
                if (preg_match('/DbNum(?<no>\d)/iu', $code, $aSpecified)) {
                    $aLocaleConfig['dbnum'] = (int) $aSpecified['no'];

                    continue;
                }
                // Detect NatNum##
                if (preg_match('/NatNum(?<no>\d+)(?<specs> .*)?/iu', $code, $aSpecified)) {
                    $aLocaleConfig['natnum'] = $aSpecified['no'];
                    $aLocaleConfig['natnum_specs'] = $aSpecified['specs'] ?? false;

                    continue;
                }

                // Detect calendar
                if (preg_match('/~(?<calendar>[a-z_]+)/iu', $code, $aSpecified)) {
                    // @see https://help.libreoffice.org/6.1/he/text/shared/01/05020301.html
                        //
                    // Actual processing is performed by IntlDateFormatter
                    // @see https://www.php.net/manual/en/class.intldateformatter.php
                    // @see https://unicode-org.github.io/icu/userguide/datetime/calendar/#calendar-classes
                    switch (strtolower($aSpecified['calendar'])) {
                        case 'buddhist': // Thai Buddhist
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_BUDDHIST;

                            break;
                        case 'chinese': // Chinese
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_CHINESE;

                            break;
                        case 'roc': // Republic Of China
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_ROC;

                            break;
                        case 'coptic': // Coptic
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_COPTIC;

                            break;
                        case 'ethiopic': // Ethiopic
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_ETHIOPIC;

                            break;
                        case 'hebrew':
                        case 'jewish': // Jewish
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_HEBREW;

                            break;
                        case 'indian': // Indian
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_INDIAN;

                            break;
                        case 'islamic':
                        case 'hijri': // Hijri / Arabic Islamic
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_ISLAMIC_CIVIL;

                            break;
                        case 'japanese':
                        case 'gengou': // Japanese Gengou
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_JAPANESE;

                            break;
                        case 'hanja': // Korean
                        case 'hanja_yoil': // Korean
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_KOREAN;

                            break;
                        case 'persian': // Persian
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_PERSIAN;

                            break;
                        case 'gregorian':
                        default:
                            $aLocaleConfig['calendar_code'] = LocaleLayout::CALENDAR_CODE_GREGORIAN;

                            break;
                    }

                    continue;
                }

                // So far unrecognised code
                $strFormatPrefix .= $matches[0][$pos];
            }
            $format = $strFormatPrefix . $format;

            // Special treatment for system date/time
            if ($aLocaleConfig['systime']) {
                // Apply system time
                $aLocaleConfig['lcids'] = [self::LCID_SYSTEM_TIME_DETECT];
                $aLocaleConfig['lcid'] = self::LCID_SYSTEM_TIME;
                $format = self::SYSTEM_TIME_FORMAT;
            } elseif ($aLocaleConfig['sysdate']) {
                // Apply system date
                $aLocaleConfig['lcids'] = [self::LCID_SYSTEM_DATE_DETECT];
                $aLocaleConfig['lcid'] = self::LCID_SYSTEM_DATE;
                $format = self::SYSTEM_DATE_FORMAT;
            }
        }

        // Set calendar type
        if ($aLocaleConfig['calendar_code'] && isset(LocaleLayout::$aCalendarTypes[$aLocaleConfig['calendar_code']])) {
            $calendar = LocaleLayout::$aCalendarTypes[$aLocaleConfig['calendar_code']];
            $aLocaleConfig['calendar_type'] = $calendar['type'];
            if ($calendar['locale'] === true) {
                // Transliterate to specified locale
            } elseif ($calendar['locale'] === false) {
                // Transliterate to current locale
                $aLocaleConfig['lcid_transliterate'] = self::LCID_CURRENT_LOCALE;
            } else {
                if ($calendar['locale'] > 0) {
                    // Transliterate to specific locale
                    $aLocaleConfig['lcid_transliterate'] = $calendar['locale'];
                }
            }
        }

        // Determine the locale object that is applicable to the format
        $oLocale = $this;
        // Determine the locale object that is applicable to the month and
        // weekdays
        $oDateLocale = $this;
        if (self::$overruleCellLocale) {
            if (!$this->isCurrent()) {
                // Use current locale only
                $oLocale = CurrentLocale::getFormatInstance();
                $oDateLocale = $oLocale;
            }
        } else {
            if ($this->isCurrent()) {
                $lcid = $aLocaleConfig['lcid'];
                if ((!$this->shouldUseCurrentLocale($lcid)) && ($lcid !== $this->getLcid())) {
                    $oLocale = FormatLocaleFactory::getLocaleObjectByLCID($lcid);
                    if (!(($oLocale !== $this) && ($oLocale->getLcid() != $this->getLcid()))) {
                        $oLocale = $this;
                    }
                }
            }

            if ($aLocaleConfig['lcid_transliterate'] === false) {
                $oDateLocale = $oLocale;
            } else {
                $lcid = $aLocaleConfig['lcid_transliterate'];
                if ((!$this->shouldUseCurrentLocale($lcid)) && ($lcid !== $this->getLcid())) {
                    $oDateLocale = FormatLocaleFactory::getLocaleObjectByLCID($lcid);
                    if (!(($oDateLocale !== $this) && ($oDateLocale->getLcid() != $this->getLcid()))) {
                        $oDateLocale = $this;
                    }
                }
            }
        }
        $aLocaleConfig['locale'] = $oLocale;
        $aLocaleConfig['date_locale'] = $oDateLocale;

        // Translate format; apply locale
        $aLocaleConfig['format'] = $this->translateFormatString($format, $aLocaleConfig);

        if ($aLocaleConfig['natnum']) {
            // @see https://www.openoffice.org/api/docs/common/ref/com/sun/star/i18n/NativeNumberMode.html
            switch ($aLocaleConfig['natnum']) {
                case 1:
                    // Chinese: Chinese lower case characters; CAL: 1/7/7 [DBNum1]
                    // Japanese: short Kanji characters [DBNum1]; CAL: 1/4/4 [DBNum1]
                    // Korean: Korean lower case characters [DBNum1]; CAL: 1/7/7 [DBNum1]
                    if (in_array($this->tag, ['ko-kr', 'ja-jp', 'zh-cn', 'zh-tw'])) {
                        $aLocaleConfig['dbnum'] = 1;
                        $aLocaleConfig['natnum'] = false;
                    }

                    break;

                case 2:
                    // Chinese: Chinese upper case characters; CAL: 2/8/8 [DBNum2]
                    // Japanese: traditional Kanji characters; CAL: 2/5/5 [DBNum2]
                    // Korean: Korean upper case characters [DBNum2]; CAL: 2/8/8 [DBNum2]
                    if (in_array($this->tag, ['ko-kr', 'ja-jp', 'zh-cn', 'zh-tw'])) {
                        $aLocaleConfig['dbnum'] = 2;
                        $aLocaleConfig['natnum'] = false;
                    }

                    break;

                case 3:
                    // Chinese: fullwidth Arabic digits; CAL: 3/3/3 [DBNum3]
                    // Japanese: fullwidth Arabic digits; CAL: 3/3/3 [DBNum3]
                    // Korean: fullwidth Arabic digits [DBNum3]; CAL: 3/3/3 [DBNum3]
                    if (in_array($this->tag, ['ko-kr', 'ja-jp', 'zh-cn', 'zh-tw'])) {
                        $aLocaleConfig['dbnum'] = 3;
                        $aLocaleConfig['natnum'] = false;
                    }

                    break;

                case 4:
                    // Chinese: lower case text [DBNum1]
                    // Japanese: modern long Kanji text [DBNum2]
                    if (($this->tag == 'zh-cn') || ($this->tag == 'zh-tw')) {
                        $aLocaleConfig['dbnum'] = 1;
                        $aLocaleConfig['natnum'] = false;
                    } elseif ($this->tag == 'ja-jp') {
                        $aLocaleConfig['dbnum'] = 2;
                        $aLocaleConfig['natnum'] = false;
                    }

                    break;

                case 5:
                    // Chinese: Chinese upper case text [DBNum2]
                    // Japanese: traditional long Kanji text [DBNum3]
                    if (($this->tag == 'zh-cn') || ($this->tag == 'zh-tw')) {
                        $aLocaleConfig['dbnum'] = 2;
                        $aLocaleConfig['natnum'] = false;
                    } elseif ($this->tag == 'ja-jp') {
                        $aLocaleConfig['dbnum'] = 3;
                        $aLocaleConfig['natnum'] = false;
                    }

                    break;

                case 6:
                    // Chinese: fullwidth text [DBNum3]
                    if (($this->tag == 'zh-cn') || ($this->tag == 'zh-tw')) {
                        $aLocaleConfig['dbnum'] = 3;
                        $aLocaleConfig['natnum'] = false;
                    }

                    break;

                case 8:
                    // Japanese: traditional short Kanji text [DBNum4]
                    if ($this->tag == 'ja-jp') {
                        $aLocaleConfig['dbnum'] = 4;
                        $aLocaleConfig['natnum'] = false;
                    }

                    break;

                case 10:
                    // Korean: formal Hangul text [DBNum4]; CAL: 9/11/11 [DBNum4]
                    if ($this->tag == 'ko-kr') {
                        $aLocaleConfig['dbnum'] = 4;
                        $aLocaleConfig['natnum'] = false;
                    }

                    break;
            }
        }

        // Set numerals based upon dbnum config
        if ($aLocaleConfig['dbnum']) {
            $numerals = $oLocale->getNumerals();
            if (isset($numerals[$aLocaleConfig['dbnum'] - 1])) {
                $aLocaleConfig['numerals'] = $numerals[$aLocaleConfig['dbnum'] - 1];
            }
        }

        return $aLocaleConfig;
    }

    /**
     * Get the currency code. If it has not yet been set explicitly, try to
     * obtain the symbol information from locale.
     *
     * @return string The currency code
     */
    public function getCurrencyCode(): string
    {
        if (!empty($this->strCurrencyCode)) {
            return $this->strCurrencyCode;
        }

        return $this->detectCurrencyCode();
    }

    /**
     * Detect and set the currency code.
     *
     * @return string The currency code
     */
    public function detectCurrencyCode(): string
    {
        $this->strCurrencyCode = '$';
        $localeconv = localeconv();
        if (!empty($localeconv['currency_symbol'])) {
            $this->strCurrencyCode = $localeconv['currency_symbol'];

            return $this->strCurrencyCode;
        }
        if (!empty($localeconv['int_curr_symbol'])) {
            $this->strCurrencyCode = $localeconv['int_curr_symbol'];

            return $this->strCurrencyCode;
        }

        return $this->strCurrencyCode;
    }

    /**
     * Set the currency code. Only used by NumberFormat::toFormattedString()
     * to format output by \PhpOffice\PhpSpreadsheet\Writer\Html and
     * \PhpOffice\PhpSpreadsheet\Writer\Pdf.
     *
     * @param string $currencyCode Character for currency code
     */
    public function setCurrencyCode(string $currencyCode): void
    {
        $this->strCurrencyCode = $currencyCode;
    }

    /**
     * Get the numerals types (number representation of 0 up to 9).
     *
     * @return string[] The numbers representation (e.g. 'arabic')
     */
    public function getNumerals(): array
    {
        return $this->aNumerals;
    }

    /**
     * Get the decimal separator. If it has not yet been set explicitly, try
     * to obtain number formatting information from locale.
     *
     * @return string The decimal separator
     */
    public function getDecimalSeparator(): string
    {
        if (isset($this->strDecimalSeparator)) {
            return $this->strDecimalSeparator;
        }

        return $this->detectDecimalSeparator();
    }

    /**
     * Detect and set the decimal separator.
     *
     * @return string The decimal separator
     */
    public function detectDecimalSeparator(): string
    {
        $localeconv = localeconv();
        $this->strDecimalSeparator = ($localeconv['decimal_point'] != '')
            ? $localeconv['decimal_point'] : $localeconv['mon_decimal_point'];

        if ($this->strDecimalSeparator == '') {
            // Default to '.'
            $this->strDecimalSeparator = '.';
        }

        return $this->strDecimalSeparator;
    }

    /**
     * Set the decimal separator. Only used by NumberFormat::toFormattedString()
     * to format output by \PhpOffice\PhpSpreadsheet\Writer\Html and
     * \PhpOffice\PhpSpreadsheet\Writer\Pdf.
     *
     * @param string $separator Character for decimal separator
     */
    public function setDecimalSeparator(string $separator): void
    {
        $this->strDecimalSeparator = $separator;
    }

    /**
     * Get the thousands separator. If it has not yet been set explicitly, try
     * to obtain number formatting information from locale.
     *
     * @return string The thousands separator
     */
    public function getThousandsSeparator(): string
    {
        if (isset($this->strThousandsSeparator)) {
            return $this->strThousandsSeparator;
        }

        return $this->detectThousandsSeparator();
    }

    /**
     * Detect and set the thousands separator.
     *
     * @return string The thousands separator
     */
    public function detectThousandsSeparator(): string
    {
        $localeconv = localeconv();
        $this->strThousandsSeparator = ($localeconv['thousands_sep'] != '')
            ? $localeconv['thousands_sep'] : $localeconv['mon_thousands_sep'];

        if ($this->strThousandsSeparator == '') {
            // Default to ','
            $this->strThousandsSeparator = ',';
        }

        return $this->strThousandsSeparator;
    }

    /**
     * Set the thousands separator. Only used by NumberFormat::toFormattedString()
     * to format output by \PhpOffice\PhpSpreadsheet\Writer\Html and
     * \PhpOffice\PhpSpreadsheet\Writer\Pdf.
     *
     * @param string $separator Character for thousands separator
     */
    public function setThousandsSeparator(string $separator): void
    {
        $this->strThousandsSeparator = $separator;
    }

    /**
     * Retrieve the thousands format pattern.
     *
     * @return int Thousands format pattern
     */
    public function getThousandsFormatPattern(): int
    {
        return $this->intThousandsFormatPattern;
    }

    /**
     * Set the date separator.
     *
     * @param string $separator Character for date separator
     */
    public function setDateSeparator(string $separator): void
    {
        $this->strDateSeparator = $separator;
    }

    /**
     * Retrieve the date separator (e.g. '/','-','.').
     *
     * @return string The date separator
     */
    public function getDateSeparator(): string
    {
        return $this->strDateSeparator ?? self::DATESEPARATOR_DEFAULT;
    }

    /**
     * Set the time separator.
     *
     * @param string $separator Character for time separator
     */
    public function setTimeSeparator(string $separator): void
    {
        $this->strTimeSeparator = $separator;
    }

    /**
     * Retrieve the time separator (e.g. '/','-','.').
     *
     * @return string The time separator
     */
    public function getTimeSeparator(): string
    {
        return $this->strTimeSeparator ?? self::TIMESEPARATOR_DEFAULT;
    }

    /**
     * Translate format string to locale specific format.
     *
     * @param string $format The full format string (including locale code(s))
     * @param array $aLocaleConfig The locale configuration
     *
     * @return string The altered format, if applicable
     */
    public function translateFormatString($format, $aLocaleConfig): string
    {
        // Avoid mismatches in "\ " and " "
        $formatKey = preg_replace('/(\\\\ )/', ' ', $format);

        // Find potential replacement
        if (isset($this->aFormatReplacements[$formatKey])) {
            $format = $this->aFormatReplacements[$formatKey];

            // Detail: Thousand sign for e.g. Norwegian display suggests space
            // (only for built-in formats)
            $format = str_replace(',%', ' %', $format);
        }

        // Strip off locale codes
        $format = (string) preg_replace([
            '/^\[\$\-[^\]]*\]/',
            '/^\[DbNum\d[^\]]*\]/iu',
            '/^\[NatNum\d[^\]]*\]/iu',
        ], ['', '', ''], $format);

        return $format;
    }

    /**
     * Retrieve date translation specification.
     *
     * @param $intCalendarCode The calendar code
     *
     * @return array The date translations (weekdays, months, language)
     */
    public function getDateTranslations(int $intCalendarCode = 0): array
    {
        $translations = false;
        if ($this->isCurrent()) {
            if (!empty($this->aWeekdayNamesAL) && in_array($intCalendarCode, [0x03, 0x05, 0x0D, 0x15])) {
                if ($this->aWeekdayNamesAL !== self::GREGORIAN_CALENDAR_USE_REGULAR) {
                    $translations = [
                        'weekdays' => $this->aWeekdayNamesAL,
                        'months' => $this->aMonthNamesAL,
                    ];
                }
            } else {
                if (!empty($this->aWeekdayNamesCL)) {
                    $translations = [
                        'weekdays' => $this->aWeekdayNamesCL,
                        'months' => $this->aMonthNamesCL,
                    ];
                }
            }
        }

        if ($translations === false) {
            $translations = parent::getDateTranslations();
        }

        // Add language
        $translations['language'] = $this->getLanguage();

        return $translations;
    }

    /**
     * Retrieve the list of built-in format codes.
     *
     * @return array Built-in format codes
     */
    protected function getBuiltInFormatCodes(): array
    {
        if (!empty($this->aBuiltInFormatCodes)) {
            return $this->aBuiltInFormatCodes;
        }

        $this->aBuiltInFormatCodes = self::$aBuiltInFormatCodesList;
        if (isset($this->aBuiltInFormatCodesAlterations)) {
            $this->aBuiltInFormatCodes = array_merge($this->aBuiltInFormatCodes, $this->aBuiltInFormatCodesAlterations);
        }

        return $this->aBuiltInFormatCodes;
    }

    /**
     * Get built-in format code string.
     *
     * @param int $index The format ID (0 - 163)
     *
     * @return string The format code e.g. "General", "d-mmm-yy"
     */
    public function getBuiltInFormatCodeString($index): string
    {
        // Clean parameter
        $index = (int) $index;

        if (($index < 0) || ($index > 163)) {
            return '';
        }

        // Ensure built-in format codes are available
        if (!isset($this->aBuiltInFormatCodes)) {
            $this->getBuiltInFormatCodes();
        }

        // Lookup format code
        if (isset($this->aBuiltInFormatCodes[$index])) {
            return $this->aBuiltInFormatCodes[$index];
        }

        // All other format codes are "General"
        return NumberFormat::FORMAT_GENERAL;
    }

    /**
     * Get built-in format code ID (index).
     *
     * @param string $formatCode The format code e.g. "General", "d-mmm-yy"
     *
     * @return false|int the built-in format ID (0 - 163); false if not found
     */
    public function getBuiltInFormatCodeID($formatCode)
    {
        // Ensure built-in format codes are available
        if (empty($this->aBuiltInFormatCodes)) {
            // Set the built-in format codes list
            $this->getBuiltInFormatCodes();

            if (empty($this->aBuiltInFormatCodes)) {
                return false;
            }
        }

        // Lookup format code; false if not found.
        // Use of array_flip is not safe.
        return array_search($formatCode, $this->aBuiltInFormatCodes, true);
    }

    /**
     * Perform the transliteration based upon the locale format configuration.
     *
     * @param string $value The formatted value
     * @param array $aLocaleConfig The locale format configuration
     *
     * @return string The altered value, if applicable
     */
    public function performTransliteration($value, $aLocaleConfig): string
    {
        // @todo Apply natnum transliterations

        // $aLocaleConfig['natnum']

        // [NatNum0]...[NatNum11] [NatNum12]
        // https://www.openoffice.org/api/docs/common/ref/com/sun/star/i18n/NativeNumberMode.html

        return (string) $value;
    }
}