<?php

namespace PhpOffice\PhpSpreadsheet\Locale;


class LocaleLayout
{
    /**
     * Calendar codes
     */
    public const CALENDAR_CODE_GREGORIAN = 0x00;
    public const CALENDAR_CODE_GREGORIAN_BASE1 = 0x01;
    public const CALENDAR_CODE_GREGORIAN_BASE2 = 0x02;
    public const CALENDAR_CODE_JAPANESE = 0x03;
    public const CALENDAR_CODE_GREGORIAN_CHINESE = 0x04;
    public const CALENDAR_CODE_KOREAN = 0x05;
    public const CALENDAR_CODE_ISLAMIC_CIVIL = 0x06;
    public const CALENDAR_CODE_BUDDHIST = 0x07;
    public const CALENDAR_CODE_HEBREW = 0x08;
    public const CALENDAR_CODE_GREGORIAN_FRENCH = 0x09;
    public const CALENDAR_CODE_GREGORIAN_ARABIC1 = 0x0A;
    public const CALENDAR_CODE_GREGORIAN_ARABIC2 = 0x0B;
    public const CALENDAR_CODE_GREGORIAN_ARABIC3 = 0x0C;
    public const CALENDAR_CODE_GREGORIAN_LOCAL1 = 0x0D;
    public const CALENDAR_CODE_UNKNOWN_JAPANESE = 0x0E;
    public const CALENDAR_CODE_UNKNOWN_CHINESE1 = 0x0F;
    public const CALENDAR_CODE_INDIAN = 0x10;
    public const CALENDAR_CODE_UNKNOWN_CHINESE2 = 0x11;
    public const CALENDAR_CODE_UNKNOWN_BASE1 = 0x12;
    public const CALENDAR_CODE_UNKNOWN_BASE2 = 0x13;
    public const CALENDAR_CODE_GREGORIAN_KOREAN = 0x14;
    public const CALENDAR_CODE_GREGORIAN_LOCAL2 = 0x15;
    public const CALENDAR_CODE_PERSIAN = 0x16;
    public const CALENDAR_CODE_ISLAMIC_CIVIL2 = 0x17;
    public const CALENDAR_CODE_GREGORIAN_BASE3 = 0x18;
    /**
     * Not supported by Excel; use of stand-in codes
     */
    public const CALENDAR_CODE_CHINESE = 0xFF01;
    public const CALENDAR_CODE_COPTIC = 0xFF02;
    public const CALENDAR_CODE_DANGI = 0xFF03;
    public const CALENDAR_CODE_ETHIOPIC = 0xFF04;
    public const CALENDAR_CODE_ETHIOPIC_AMETE_ALEM = 0xFF05;
    public const CALENDAR_CODE_ISLAMIC = 0xFF06;
    public const CALENDAR_CODE_JULIAN = 0xFF07;
    public const CALENDAR_CODE_ROC = 0xFF08;

    /**
     * Calendar type specification
     */
    public const CALENDAR_TYPE_UNKNOWN = 'unknown'; // Unsupported
    public const CALENDAR_TYPE_GREGORIAN = 'gregorian';
    public const CALENDAR_TYPE_BUDDHIST = 'buddhist';
    public const CALENDAR_TYPE_CHINESE = 'chinese';
    public const CALENDAR_TYPE_COPTIC = 'coptic';
    public const CALENDAR_TYPE_DANGI = 'dangi';
    public const CALENDAR_TYPE_ETHIOPIC = 'ethiopic';
    public const CALENDAR_TYPE_ETHIOPIC_AMETE_ALEM = 'ethiopic-amete-alem';
    public const CALENDAR_TYPE_HEBREW = 'hebrew';
    public const CALENDAR_TYPE_INDIAN = 'indian';
    public const CALENDAR_TYPE_ISLAMIC = 'islamic';
    public const CALENDAR_TYPE_ISLAMIC_CIVIL = 'islamic-civil';
    public const CALENDAR_TYPE_JAPANESE = 'japanese';
    public const CALENDAR_TYPE_JULIAN = 'julian';
    public const CALENDAR_TYPE_KOREAN = 'korean';
    public const CALENDAR_TYPE_PERSIAN = 'persian';
    public const CALENDAR_TYPE_ROC = 'roc';

    
    /**
     * Calendar types / configuration collection
     * 
     * 'type': calendar type
     * 'locale': lcid for transliteration, 
     *              false = current locale, 
     *              true = specified locale, 
     *              0 = no transliteration
     * 'class': calendar that requires specific month/weekday texts; 
     *              uses its own object class
     * 
     * @var array
     */
    public static $aCalendarTypes = array(
        // Gregorian, specified locale
        self::CALENDAR_CODE_GREGORIAN => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => true),
        self::CALENDAR_CODE_GREGORIAN_BASE1 => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => true),
        self::CALENDAR_CODE_GREGORIAN_BASE2 => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => true),
        // Gengou / Japanese, current locale
        self::CALENDAR_CODE_JAPANESE => array('type' => self::CALENDAR_TYPE_JAPANESE, 'locale' => false),
        // Gregorian, Chinese simplified
        self::CALENDAR_CODE_GREGORIAN_CHINESE => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => 0x804), // 0x804 'zh-cn'
        // Dangun / Korean, current locale
        self::CALENDAR_CODE_KOREAN => array('type' => self::CALENDAR_TYPE_KOREAN, 'locale' => false),
        // Hijri / Islamic
        self::CALENDAR_CODE_ISLAMIC_CIVIL => array('type' => self::CALENDAR_TYPE_ISLAMIC_CIVIL, 'locale' => 0, 'class' => 'IslamicCivil'),
        // Buddhist, Thai
        self::CALENDAR_CODE_BUDDHIST => array('type' => self::CALENDAR_TYPE_BUDDHIST, 'locale' => 0, 'class' => 'Buddhist'),
        // Jewish / Hebrew
        self::CALENDAR_CODE_HEBREW => array('type' => self::CALENDAR_TYPE_HEBREW, 'locale' => 0, 'class' => 'Hebrew'),
        // Gregorian, French
        self::CALENDAR_CODE_GREGORIAN_FRENCH => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => 0x40C), // 0x40C 'fr-fr'
        // Gregorian, Arabic (1)
        self::CALENDAR_CODE_GREGORIAN_ARABIC1 => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => 0, 'class' => 'GregorianArabic1'),
        // Gregorian, Arabic (2)
        self::CALENDAR_CODE_GREGORIAN_ARABIC2 => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => 0, 'class' => 'GregorianArabic2'),
        // Gregorian, Arabic (3)
        self::CALENDAR_CODE_GREGORIAN_ARABIC3 => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => 0, 'class' => 'GregorianArabic2'),
        // Gregorian, current locale
        self::CALENDAR_CODE_GREGORIAN_LOCAL1 => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => false),
        // Unknown, Japanese
        self::CALENDAR_CODE_UNKNOWN_JAPANESE => array('type' => self::CALENDAR_TYPE_UNKNOWN, 'locale' => 0, 'class' => 'UnknownJapanese'),
        // Unknown, Chinese simplified
        self::CALENDAR_CODE_UNKNOWN_CHINESE1 => array('type' => self::CALENDAR_TYPE_UNKNOWN, 'locale' => 0x804), // 'zh-cn'
        // Indian / Hindu
        self::CALENDAR_CODE_INDIAN => array('type' => self::CALENDAR_TYPE_INDIAN, 'locale' => 0, 'class' => 'Indian'),
        // Unknown, Chinese simplified
        self::CALENDAR_CODE_UNKNOWN_CHINESE2 => array('type' => self::CALENDAR_TYPE_UNKNOWN, 'locale' => 0x804), // 0x804 'zh-cn'
        // Unknown, current locale
        self::CALENDAR_CODE_UNKNOWN_BASE1 => array('type' => self::CALENDAR_TYPE_UNKNOWN, 'locale' => false),
        // Unknown, current locale
        self::CALENDAR_CODE_UNKNOWN_BASE2 => array('type' => self::CALENDAR_TYPE_UNKNOWN, 'locale' => false),
        // Gregorian, Korean
        self::CALENDAR_CODE_GREGORIAN_KOREAN => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => 0, 'class' => 'GregorianKorean'),
        // Gregorian, current locale
        self::CALENDAR_CODE_GREGORIAN_LOCAL2 => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => false),
        // // Iranian / Persian
        self::CALENDAR_CODE_PERSIAN => array('type' => self::CALENDAR_TYPE_PERSIAN, 'locale' => 0, 'class' => 'Persian'),
        // Hijri / Islamic
        self::CALENDAR_CODE_ISLAMIC_CIVIL2 => array('type' => self::CALENDAR_TYPE_ISLAMIC_CIVIL, 'locale' => 0, 'class' => 'IslamicCivil'),
        // Gregorian, specified locale
        self::CALENDAR_CODE_GREGORIAN_BASE3 => array('type' => self::CALENDAR_TYPE_GREGORIAN, 'locale' => true),
        // 18 and more: Gregorian, specified locale

        // Stand-in calendar specifications
        self::CALENDAR_CODE_CHINESE => array('type' => self::CALENDAR_TYPE_CHINESE, 'locale' => 0),
        self::CALENDAR_CODE_COPTIC => array('type' => self::CALENDAR_TYPE_COPTIC, 'locale' => 0),
        self::CALENDAR_CODE_DANGI => array('type' => self::CALENDAR_TYPE_DANGI, 'locale' => 0),
        self::CALENDAR_CODE_ETHIOPIC => array('type' => self::CALENDAR_TYPE_ETHIOPIC, 'locale' => 0),
        self::CALENDAR_CODE_ETHIOPIC_AMETE_ALEM => array('type' => self::CALENDAR_TYPE_ETHIOPIC_AMETE_ALEM, 'locale' => 0),
        self::CALENDAR_CODE_ISLAMIC => array('type' => self::CALENDAR_TYPE_ISLAMIC, 'locale' => 0),
        self::CALENDAR_CODE_JULIAN => array('type' => self::CALENDAR_TYPE_JULIAN, 'locale' => 0),
        self::CALENDAR_CODE_ROC => array('type' => self::CALENDAR_TYPE_ROC, 'locale' => 0),
    );
    
    /**
     * Numerals output type (default=unchanged)
     */
    public const NUMERALS_ALL = '[ALL]';
    public const NUMERALS_DEFAULT = 'unchanged';
    public const NUMERALS_ARABIC = 'arabic';
    public const NUMERALS_ARABIC_EASTERN = 'arabic_eastern';
    public const NUMERALS_PERSIAN = 'persian';
    public const NUMERALS_DEVANAGARI = 'devanagari';
    public const NUMERALS_BENGALI = 'bengali';
    public const NUMERALS_PUNJABI = 'punjabi';
    public const NUMERALS_GUJARATI = 'gujarati';
    public const NUMERALS_ORIYA = 'oriya';
    public const NUMERALS_TAMIL = 'tamil';
    public const NUMERALS_TELUGU = 'telugu';
    public const NUMERALS_KANNADA = 'kannada';
    public const NUMERALS_MALAYALAM = 'malayalam';
    public const NUMERALS_THAI = 'thai';
    public const NUMERALS_LAO = 'lao';
    public const NUMERALS_TIBETAN = 'tibetan';
    public const NUMERALS_BURMESE = 'burmese';
    public const NUMERALS_TIGRINA = 'tigrina';
    public const NUMERALS_KHMER = 'khmer';
    public const NUMERALS_MONGOLIAN = 'mongolian';
    public const NUMERALS_JAPANESE = 'japanese';
    public const NUMERALS_JAPANESE_FINANCIAL = 'japanese_financial';
    public const NUMERALS_FULLWIDTH_ARABIC = 'fullwidth_arabic';
    public const NUMERALS_CHINESE_SIMPLIFIED = 'chinese_simplified';
    public const NUMERALS_CHINESE_FINANCIAL = 'chinese_financial';
    public const NUMERALS_CHINESE_TRADITIONAL = 'chinese_traditional';
    public const NUMERALS_CHINESE_TRADITIONAL_FINANCIAL = 'chinese_traditional_financial';
    public const NUMERALS_KOREAN = 'korean';
    public const NUMERALS_KOREAN_FINANCIAL = 'korean_financial';
    public const NUMERALS_KOREAN_HANGUL = 'korean_hangul';    

    
    public static $aLocaleNumerals = array(
        // Arabic
        0x01 => LocaleLayout::NUMERALS_ARABIC,
        // Eastern Arabic
        0x02 => LocaleLayout::NUMERALS_ARABIC_EASTERN,
        // Persian
        0x03 => LocaleLayout::NUMERALS_PERSIAN,
        // Devanagari
        0x04 => LocaleLayout::NUMERALS_DEVANAGARI,
        // Bengali
        0x05 => LocaleLayout::NUMERALS_BENGALI,
        // Punjabi
        0x06 => LocaleLayout::NUMERALS_PUNJABI,
        // Gujarati
        0x07 => LocaleLayout::NUMERALS_GUJARATI,
        // Oriya
        0x08 => LocaleLayout::NUMERALS_ORIYA,
        // Tamil
        0x09 => LocaleLayout::NUMERALS_TAMIL,
        // Telugu
        0x0A => LocaleLayout::NUMERALS_TELUGU,
        // Kannada
        0x0B => LocaleLayout::NUMERALS_KANNADA,
        // Malayalam
        0x0C => LocaleLayout::NUMERALS_MALAYALAM,
        // Thai
        0x0D => LocaleLayout::NUMERALS_THAI,
        // Lao
        0x0E => LocaleLayout::NUMERALS_LAO,
        // Tibetan
        0x0F => LocaleLayout::NUMERALS_TIBETAN,
        // Burmese
        0x10 => LocaleLayout::NUMERALS_BURMESE,
        // Tigrina
        0x11 => LocaleLayout::NUMERALS_TIGRINA,
        // Khmer
        0x12 => LocaleLayout::NUMERALS_KHMER,
        // Mongolian
        0x13 => LocaleLayout::NUMERALS_MONGOLIAN,
        // Japanese
        0x1B => LocaleLayout::NUMERALS_JAPANESE,
        // Japanese (financial)
        0x1C => LocaleLayout::NUMERALS_JAPANESE_FINANCIAL,
        // (fullwidth Arabic)
        0x1D => LocaleLayout::NUMERALS_FULLWIDTH_ARABIC,
        // Chinese - simplified
        0x1E => LocaleLayout::NUMERALS_CHINESE_SIMPLIFIED,
        // Chinese (financial)
        0x1F => LocaleLayout::NUMERALS_CHINESE_FINANCIAL,
        // (fullwidth Arabic)
        0x20 => LocaleLayout::NUMERALS_FULLWIDTH_ARABIC,
        // Chinese - traditional
        0x21 => LocaleLayout::NUMERALS_CHINESE_TRADITIONAL,
        // Chinese - traditional (financial)
        0x22 => LocaleLayout::NUMERALS_CHINESE_TRADITIONAL_FINANCIAL,
        // (fullwidth Arabic)
        0x23 => LocaleLayout::NUMERALS_FULLWIDTH_ARABIC,
        // Korean
        0x24 => LocaleLayout::NUMERALS_KOREAN,
        // Korean (financial)
        0x25 => LocaleLayout::NUMERALS_KOREAN_FINANCIAL,
        // (fullwidth Arabic)
        0x26 => LocaleLayout::NUMERALS_FULLWIDTH_ARABIC,
        // Korean - Hangul
        0x27 => LocaleLayout::NUMERALS_KOREAN_HANGUL,
    );
   
    
    /**
     * Retrieve the digits representation for a specific numerals type
     * 
     * @staticvar array $aDigitTypes
     * @param string $numerals_type The digits type (e.g. 'arabic'); '[ALL]' will return all digits.
     * @return array The list of digits 0-9
     */
    public static function getDigits($numerals_type)
    {
        static $aDigitTypes;
        if (!isset($aDigitTypes))
        {
            $aDigitTypes = array(
                LocaleLayout::NUMERALS_ARABIC => array(
                    "0","1","2","3","4","5","6","7","8","9"
                ),
                LocaleLayout::NUMERALS_ARABIC_EASTERN => array(
                    "\u{660}","\u{661}","\u{662}","\u{663}","\u{664}","\u{665}","\u{666}","\u{667}","\u{668}","\u{669}"
                ),
                LocaleLayout::NUMERALS_PERSIAN => array(
                    "\u{6F0}","\u{6F1}","\u{6F2}","\u{6F3}","\u{6F4}","\u{6F5}","\u{6F6}","\u{6F7}","\u{6F8}","\u{6F9}"
                ),
                LocaleLayout::NUMERALS_DEVANAGARI => array(
                    "\u{966}","\u{967}","\u{968}","\u{969}","\u{96A}","\u{96B}","\u{96C}","\u{96D}","\u{96E}","\u{96F}"
                ),
                LocaleLayout::NUMERALS_BENGALI => array(
                    "\u{9E6}","\u{9E7}","\u{9E8}","\u{9E9}","\u{9EA}","\u{9EB}","\u{9EC}","\u{9ED}","\u{9EE}","\u{9EF}"
                ),
                LocaleLayout::NUMERALS_PUNJABI => array(
                    "\u{A66}","\u{A67}","\u{A68}","\u{A69}","\u{A6A}","\u{A6B}","\u{A6C}","\u{A6D}","\u{A6E}","\u{A6F}"
                ),
                LocaleLayout::NUMERALS_GUJARATI => array(
                    "\u{AE6}","\u{AE7}","\u{AE8}","\u{AE9}","\u{AEA}","\u{AEB}","\u{AEC}","\u{AED}","\u{AEE}","\u{AEF}"
                ),
                LocaleLayout::NUMERALS_ORIYA => array(
                    "\u{B66}","\u{B67}","\u{B68}","\u{B69}","\u{B6A}","\u{B6B}","\u{B6C}","\u{B6D}","\u{B6E}","\u{B6F}"
                ),
                LocaleLayout::NUMERALS_TAMIL => array(
                    "0","\u{BE7}","\u{BE8}","\u{BE9}","\u{BEA}","\u{BEB}","\u{BEC}","\u{BED}","\u{BEE}","\u{BEF}"
                ),
                LocaleLayout::NUMERALS_TELUGU => array(
                    "\u{C66}","\u{C67}","\u{C68}","\u{C69}","\u{C6A}","\u{C6B}","\u{C6C}","\u{C6D}","\u{C6E}","\u{C6F}"
                ),
                LocaleLayout::NUMERALS_KANNADA => array(
                    "\u{CE6}","\u{CE7}","\u{CE8}","\u{CE9}","\u{CEA}","\u{CEB}","\u{CEC}","\u{CED}","\u{CEE}","\u{CEF}"
                ),
                LocaleLayout::NUMERALS_MALAYALAM => array(
                    "\u{D66}","\u{D67}","\u{D68}","\u{D69}","\u{D6A}","\u{D6B}","\u{D6C}","\u{D6D}","\u{D6E}","\u{D6F}"
                ),
                LocaleLayout::NUMERALS_THAI => array(
                    "\u{E50}","\u{E51}","\u{E52}","\u{E53}","\u{E54}","\u{E55}","\u{E56}","\u{E57}","\u{E58}","\u{E59}"
                ),
                LocaleLayout::NUMERALS_LAO => array(
                    "\u{ED0}","\u{ED1}","\u{ED2}","\u{ED3}","\u{ED4}","\u{ED5}","\u{ED6}","\u{ED7}","\u{ED8}","\u{ED9}"
                ),
                LocaleLayout::NUMERALS_TIBETAN => array(
                    "\u{F20}","\u{F21}","\u{F22}","\u{F23}","\u{F24}","\u{F25}","\u{F26}","\u{F27}","\u{F28}","\u{F29}"
                ),
                LocaleLayout::NUMERALS_BURMESE => array(
                    "\u{1040}","\u{1041}","\u{1042}","\u{1043}","\u{1044}","\u{1045}","\u{1046}","\u{1047}","\u{1048}","\u{1049}"
                ),
                LocaleLayout::NUMERALS_TIGRINA => array(
                    "0","\u{1369}","\u{136A}","\u{136B}","\u{136C}","\u{136D}","\u{136E}","\u{136F}","\u{1370}","\u{1371}"
                ),
                LocaleLayout::NUMERALS_KHMER => array(
                    "\u{17E0}","\u{17E1}","\u{17E2}","\u{17E3}","\u{17E4}","\u{17E5}","\u{17E6}","\u{17E7}","\u{17E8}","\u{17E9}"
                ),
                LocaleLayout::NUMERALS_MONGOLIAN => array(
                    "\u{1810}","\u{1811}","\u{1812}","\u{1813}","\u{1814}","\u{1815}","\u{1816}","\u{1817}","\u{1818}","\u{1819}"
                ),
                LocaleLayout::NUMERALS_JAPANESE => array(
                    "\u{3007}","\u{4E00}","\u{4E8C}","\u{4E09}","\u{56DB}","\u{4E94}","\u{516D}","\u{4E03}","\u{516B}","\u{4E5D}"
                ),
                LocaleLayout::NUMERALS_JAPANESE_FINANCIAL => array(
                    "\u{3007}","\u{58F1}","\u{5F10}","\u{53C2}","\u{56DB}","\u{4F0D}","\u{516D}","\u{4E03}","\u{516B}","\u{4E5D}"
                ),
                LocaleLayout::NUMERALS_FULLWIDTH_ARABIC => array(
                    "\u{FF10}","\u{FF11}","\u{FF12}","\u{FF13}","\u{FF14}","\u{FF15}","\u{FF16}","\u{FF17}","\u{FF18}","\u{FF19}"
                ),
                LocaleLayout::NUMERALS_CHINESE_SIMPLIFIED => array(
                    "\u{25CB}","\u{4E00}","\u{4E8C}","\u{4E09}","\u{56DB}","\u{4E94}","\u{516D}","\u{4E03}","\u{516B}","\u{4E5D}"
                ),
                LocaleLayout::NUMERALS_CHINESE_FINANCIAL => array(
                    "\u{96F6}","\u{58F9}","\u{8D30}","\u{53C1}","\u{8086}","\u{4F0D}","\u{9646}","\u{67D2}","\u{634C}","\u{7396}"
                ),
                LocaleLayout::NUMERALS_FULLWIDTH_ARABIC => array(
                    "\u{FF10}","\u{FF11}","\u{FF12}","\u{FF13}","\u{FF14}","\u{FF15}","\u{FF16}","\u{FF17}","\u{FF18}","\u{FF19}"
                ),
                LocaleLayout::NUMERALS_CHINESE_TRADITIONAL => array(
                    "\u{25CB}","\u{4E00}","\u{4E8C}","\u{4E09}","\u{56DB}","\u{4E94}","\u{516D}","\u{4E03}","\u{516B}","\u{4E5D}"
                ),
                LocaleLayout::NUMERALS_CHINESE_TRADITIONAL_FINANCIAL => array(
                    "\u{96F6}","\u{58F9}","\u{8CB3}","\u{53C3}","\u{8086}","\u{4F0D}","\u{9678}","\u{67D2}","\u{634C}","\u{7396}"
                ),
                LocaleLayout::NUMERALS_FULLWIDTH_ARABIC => array(
                    "\u{FF10}","\u{FF11}","\u{FF12}","\u{FF13}","\u{FF14}","\u{FF15}","\u{FF16}","\u{FF17}","\u{FF18}","\u{FF19}"
                ),
                LocaleLayout::NUMERALS_KOREAN => array(
                    "\u{FF10}","\u{4E00}","\u{4E8C}","\u{4E09}","\u{56DB}","\u{4E94}","\u{F9D1}","\u{4E03}","\u{516B}","\u{4E5D}"
                ),
                LocaleLayout::NUMERALS_KOREAN_FINANCIAL => array(
                    "\u{F9B2}","\u{58F9}","\u{8CB3}","\u{F96B}","\u{56DB}","\u{4F0D}","\u{F9D1}","\u{4E03}","\u{516B}","\u{4E5D}"
                ),
                LocaleLayout::NUMERALS_FULLWIDTH_ARABIC => array(
                    "\u{FF10}","\u{FF11}","\u{FF12}","\u{FF13}","\u{FF14}","\u{FF15}","\u{FF16}","\u{FF17}","\u{FF18}","\u{FF19}"
                ),
                LocaleLayout::NUMERALS_KOREAN_HANGUL => array(
                    "\u{C601}","\u{C77C}","\u{C774}","\u{C0BC}","\u{C0AC}","\u{C624}","\u{C721}","\u{CE60}","\u{D314}","\u{AD6C}"
                ),
            );
        }
        
        if ($numerals_type == self::NUMERALS_ALL)
        {
            return $aDigitTypes;
        }
       
        return isset($aDigitTypes[$numerals_type]) ? $aDigitTypes[$numerals_type] : $aDigitTypes[LocaleLayout::NUMERALS_ARABIC];
    }
}