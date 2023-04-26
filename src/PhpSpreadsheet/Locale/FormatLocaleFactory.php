<?php

namespace PhpOffice\PhpSpreadsheet\Locale;

use PhpOffice\PhpSpreadsheet\Settings;


class FormatLocaleFactory
{
    /**
     * string The default locale tag
     */
    public const DEFAULT_LOCALE_TAG = "en-us";

    /**
     * @var array List of LCID (hex) codes with the full locale tag
     * @source https://learn.microsoft.com/en-us/openspecs/office_standards/ms-oe376/6c085406-a698-4e12-9d4d-c3b0ee3dbc4a
     */
    protected static $lcid_locales = array(
        0x0001 => "ar",
        0x0002 => "bg",
        0x0003 => "ca",
        0x0004 => "zh-hans",
        0x0005 => "cs",
        0x0006 => "da",
        0x0007 => "de",
        0x0008 => "el",
        0x0009 => "en",
        0x000A => "es",
        0x000B => "fi",
        0x000C => "fr",
        0x000D => "he",
        0x000E => "hu",
        0x000F => "is",
        0x0010 => "it",
        0x0011 => "ja",
        0x0012 => "ko",
        0x0013 => "nl",
        0x0014 => "no",
        0x0015 => "pl",
        0x0016 => "pt",
        0x0017 => "rm",
        0x0018 => "ro",
        0x0019 => "ru",
        0x001A => "hr",
        0x001B => "sk",
        0x001C => "sq",
        0x001D => "sv",
        0x001E => "th",
        0x001F => "tr",
        0x0020 => "ur",
        0x0021 => "id",
        0x0022 => "uk",
        0x0023 => "be",
        0x0024 => "sl",
        0x0025 => "et",
        0x0026 => "lv",
        0x0027 => "lt",
        0x0028 => "tg",
        0x0029 => "fa",
        0x002A => "vi",
        0x002B => "hy",
        0x002C => "az",
        0x002D => "eu",
        0x002E => "hsb",
        0x002F => "mk",
        0x0030 => "st",
        0x0031 => "ts",
        0x0032 => "tn",
        0x0033 => "ve",
        0x0034 => "xh",
        0x0035 => "zu",
        0x0036 => "af",
        0x0037 => "ka",
        0x0038 => "fo",
        0x0039 => "hi",
        0x003A => "mt",
        0x003B => "se",
        0x003C => "ga",
        0x003E => "ms",
        0x003F => "kk",
        0x0040 => "ky",
        0x0041 => "sw",
        0x0042 => "tk",
        0x0043 => "uz",
        0x0044 => "tt",
        0x0045 => "bn",
        0x0046 => "pa",
        0x0047 => "gu",
        0x0048 => "or",
        0x0049 => "ta",
        0x004A => "te",
        0x004B => "kn",
        0x004C => "ml",
        0x004D => "as",
        0x004E => "mr",
        0x004F => "sa",
        0x0050 => "mn",
        0x0051 => "bo",
        0x0052 => "cy",
        0x0053 => "km",
        0x0054 => "lo",
        0x0055 => "my",
        0x0056 => "gl",
        0x0057 => "kok",
        0x0059 => "sd",
        0x005A => "syr",
        0x005B => "si",
        0x005C => "chr",
        0x005D => "iu",
        0x005E => "am",
        0x005F => "tzm",
        0x0060 => "ks",
        0x0061 => "ne",
        0x0062 => "fy",
        0x0063 => "ps",
        0x0064 => "fil",
        0x0065 => "dv",
        0x0067 => "ff",
        0x0068 => "ha",
        0x006A => "yo",
        0x006B => "quz",
        0x006C => "nso",
        0x006D => "ba",
        0x006E => "lb",
        0x006F => "kl",
        0x0070 => "ig",
        0x0072 => "om",
        0x0073 => "ti",
        0x0074 => "gn",
        0x0075 => "haw",
        0x0077 => "so",
        0x0078 => "ii",
        0x007A => "arn",
        0x007C => "moh",
        0x007E => "br",
        0x0080 => "ug",
        0x0081 => "mi",
        0x0082 => "oc",
        0x0083 => "co",
        0x0084 => "gsw",
        0x0085 => "sah",
        0x0086 => "quc",
        0x0087 => "rw",
        0x0088 => "wo",
        0x008C => "prs",
        0x0091 => "gd",
        0x0092 => "ku",
        0x0401 => "ar-sa",
        0x0402 => "bg-bg",
        0x0403 => "ca-es",
        0x0404 => "zh-tw",
        0x0405 => "cs-cz",
        0x0406 => "da-dk",
        0x0407 => "de-de",
        0x0408 => "el-gr",
        0x0409 => "en-us",
        0x040A => "es-es-tradnl",
        0x040B => "fi-fi",
        0x040C => "fr-fr",
        0x040D => "he-il",
        0x040E => "hu-hu",
        0x040F => "is-is",
        0x0410 => "it-it",
        0x0411 => "ja-jp",
        0x0412 => "ko-kr",
        0x0413 => "nl-nl",
        0x0414 => "nb-no",
        0x0415 => "pl-pl",
        0x0416 => "pt-br",
        0x0417 => "rm-ch",
        0x0418 => "ro-ro",
        0x0419 => "ru-ru",
        0x041A => "hr-hr",
        0x041B => "sk-sk",
        0x041C => "sq-al",
        0x041D => "sv-se",
        0x041E => "th-th",
        0x041F => "tr-tr",
        0x0420 => "ur-pk",
        0x0421 => "id-id",
        0x0422 => "uk-ua",
        0x0423 => "be-by",
        0x0424 => "sl-si",
        0x0425 => "et-ee",
        0x0426 => "lv-lv",
        0x0427 => "lt-lt",
        0x0428 => "tg-cyrl-tj",
        0x0429 => "fa-ir",
        0x042A => "vi-vn",
        0x042B => "hy-am",
        0x042C => "az-latn-az",
        0x042D => "eu-es",
        0x042E => "hsb-de",
        0x042F => "mk-mk",
        0x0430 => "st-za",
        0x0431 => "ts-za",
        0x0432 => "tn-za",
        0x0433 => "ve-za",
        0x0434 => "xh-za",
        0x0435 => "zu-za",
        0x0436 => "af-za",
        0x0437 => "ka-ge",
        0x0438 => "fo-fo",
        0x0439 => "hi-in",
        0x043A => "mt-mt",
        0x043B => "se-no",
        0x043D => "yi-001",
        0x043E => "ms-my",
        0x043F => "kk-kz",
        0x0440 => "ky-kg",
        0x0441 => "sw-ke",
        0x0442 => "tk-tm",
        0x0443 => "uz-latn-uz",
        0x0444 => "tt-ru",
        0x0445 => "bn-in",
        0x0446 => "pa-in",
        0x0447 => "gu-in",
        0x0448 => "or-in",
        0x0449 => "ta-in",
        0x044A => "te-in",
        0x044B => "kn-in",
        0x044C => "ml-in",
        0x044D => "as-in",
        0x044E => "mr-in",
        0x044F => "sa-in",
        0x0450 => "mn-mn",
        0x0451 => "bo-cn",
        0x0452 => "cy-gb",
        0x0453 => "km-kh",
        0x0454 => "lo-la",
        0x0455 => "my-mm",
        0x0456 => "gl-es",
        0x0457 => "kok-in",
        0x045A => "syr-sy",
        0x045B => "si-lk",
        0x045C => "chr-cher-us",
        0x045D => "iu-cans-ca",
        0x045E => "am-et",
        0x045F => "tzm-arab-ma",
        0x0460 => "ks-arab",
        0x0461 => "ne-np",
        0x0462 => "fy-nl",
        0x0463 => "ps-af",
        0x0464 => "fil-ph",
        0x0465 => "dv-mv",
        0x0467 => "ff-latn-ng",
        0x0468 => "ha-latn-ng",
        0x046A => "yo-ng",
        0x046B => "quz-bo",
        0x046C => "nso-za",
        0x046D => "ba-ru",
        0x046E => "lb-lu",
        0x046F => "kl-gl",
        0x0470 => "ig-ng",
        0x0471 => "kr-latn-ng",
        0x0472 => "om-et",
        0x0473 => "ti-et",
        0x0474 => "gn-py",
        0x0475 => "haw-us",
        0x0476 => "la-va",
        0x0477 => "so-so",
        0x0478 => "ii-cn",
        0x047A => "arn-cl",
        0x047C => "moh-ca",
        0x047E => "br-fr",
        0x0480 => "ug-cn",
        0x0481 => "mi-nz",
        0x0482 => "oc-fr",
        0x0483 => "co-fr",
        0x0484 => "gsw-fr",
        0x0485 => "sah-ru",
        0x0486 => "quc-latn-gt",
        0x0487 => "rw-rw",
        0x0488 => "wo-sn",
        0x048C => "prs-af",
        0x0491 => "gd-gb",
        0x0492 => "ku-arab-iq",
        0x0801 => "ar-iq",
        0x0803 => "ca-es-valencia",
        0x0804 => "zh-cn",
        0x0807 => "de-ch",
        0x0809 => "en-gb",
        0x080A => "es-mx",
        0x080C => "fr-be",
        0x0810 => "it-ch",
        0x0813 => "nl-be",
        0x0814 => "nn-no",
        0x0816 => "pt-pt",
        0x0818 => "ro-md",
        0x0819 => "ru-md",
        0x081A => "sr-latn-cs",
        0x081D => "sv-fi",
        0x0820 => "ur-in",
        0x082C => "az-cyrl-az",
        0x082E => "dsb-de",
        0x0832 => "tn-bw",
        0x083B => "se-se",
        0x083C => "ga-ie",
        0x083E => "ms-bn",
        0x0843 => "uz-cyrl-uz",
        0x0845 => "bn-bd",
        0x0846 => "pa-arab-pk",
        0x0849 => "ta-lk",
        0x0850 => "mn-mong-cn",
        0x0859 => "sd-arab-pk",
        0x085D => "iu-latn-ca",
        0x085F => "tzm-latn-dz",
        0x0860 => "ks-deva-in",
        0x0861 => "ne-in",
        0x0867 => "ff-latn-sn",
        0x086B => "quz-ec",
        0x0873 => "ti-er",
        0x0C01 => "ar-eg",
        0x0C04 => "zh-hk",
        0x0C07 => "de-at",
        0x0C09 => "en-au",
        0x0C0A => "es-es",
        0x0C0C => "fr-ca",
        0x0C1A => "sr-cyrl-cs",
        0x0C3B => "se-fi",
        0x0C50 => "mn-mong-mn",
        0x0C51 => "dz-bt",
        0x0C6B => "quz-pe",
        0x1001 => "ar-ly",
        0x1004 => "zh-sg",
        0x1007 => "de-lu",
        0x1009 => "en-ca",
        0x100A => "es-gt",
        0x100C => "fr-ch",
        0x101A => "hr-ba",
        0x103B => "smj-no",
        0x1401 => "ar-dz",
        0x1404 => "zh-mo",
        0x1407 => "de-li",
        0x1409 => "en-nz",
        0x140A => "es-cr",
        0x140C => "fr-lu",
        0x141A => "bs-latn-ba",
        0x143B => "smj-se",
        0x1801 => "ar-ma",
        0x1809 => "en-ie",
        0x180A => "es-pa",
        0x180C => "fr-mc",
        0x181A => "sr-latn-ba",
        0x183B => "sma-no",
        0x1C01 => "ar-tn",
        0x1C09 => "en-za",
        0x1C0A => "es-do",
        0x1C0C => "fr-029",
        0x1C1A => "sr-cyrl-ba",
        0x1C3B => "sma-se",
        0x2001 => "ar-om",
        0x2009 => "en-jm",
        0x200A => "es-ve",
        0x200C => "fr-re",
        0x201A => "bs-cyrl-ba",
        0x203B => "sms-fi",
        0x2401 => "ar-ye",
        0x2409 => "en-029",
        0x240A => "es-co",
        0x240C => "fr-cd",
        0x241A => "sr-latn-rs",
        0x243B => "smn-fi",
        0x2801 => "ar-sy",
        0x2809 => "en-bz",
        0x280A => "es-pe",
        0x280C => "fr-sn",
        0x281A => "sr-cyrl-rs",
        0x2C01 => "ar-jo",
        0x2C09 => "en-tt",
        0x2C0A => "es-ar",
        0x2C0C => "fr-cm",
        0x2C1A => "sr-latn-me",
        0x3001 => "ar-lb",
        0x3009 => "en-zw",
        0x300A => "es-ec",
        0x300C => "fr-ci",
        0x301A => "sr-cyrl-me",
        0x3401 => "ar-kw",
        0x3409 => "en-ph",
        0x340A => "es-cl",
        0x340C => "fr-ml",
        0x3801 => "ar-ae",
        0x380A => "es-uy",
        0x380C => "fr-ma",
        0x3C01 => "ar-bh",
        0x3C09 => "en-hk",
        0x3C0A => "es-py",
        0x3C0C => "fr-ht",
        0x4001 => "ar-qa",
        0x4009 => "en-in",
        0x400A => "es-bo",
        0x4409 => "en-my",
        0x440A => "es-sv",
        0x4809 => "en-sg",
        0x480A => "es-hn",
        0x4C09 => "en-ae",
        0x4C0A => "es-ni",
        0x500A => "es-pr",
        0x540A => "es-us",
        0x580A => "es-419",
        0x5C0A => "es-cu",
        0x641A => "bs-cyrl",
        0x681A => "bs-latn",
        0x6C1A => "sr-cyrl",
        0x701A => "sr-latn",
        0x703B => "smn",
        0x742C => "az-cyrl",
        0x743B => "sms",
        0x7804 => "zh",
        0x7814 => "nn",
        0x781A => "bs",
        0x782C => "az-latn",
        0x783B => "sma",
        0x7843 => "uz-cyrl",
        0x7850 => "mn-cyrl",
        0x785D => "iu-cans",
        0x7C04 => "zh-hant",
        0x7C14 => "nb",
        0x7C1A => "sr",
        0x7C28 => "tg-cyrl",
        0x7C2E => "dsb",
        0x7C3B => "smj",
        0x7C43 => "uz-latn",
        0x7C46 => "pa-arab",
        0x7C50 => "mn-mong",
        0x7C59 => "sd-arab",
        0x7C5C => "chr-cher",
        0x7C5D => "iu-latn",
        0x7C5F => "tzm-latn",
        0x7C67 => "ff-latn",
        0x7C68 => "ha-latn",
        0x7C92 => "ku-arab",
    );

    /**
     * @var array List of short locales with the full locale tag
     */
    protected static $locales_translations = array(
        "af" => "af-za",
        "am" => "am-et",
        "ar" => "ar-sa",
        "arn" => "arn-cl",
        "as" => "as-in",
        "az" => "az-latn-az",
        "az-cyrl" => "az-cyrl-az",
        "az-latn" => "az-latn-az",
        "ba" => "ba-ru",
        "be" => "be-by",
        "bg" => "bg-bg",
        "bn" => "bn-bd",
        "bo" => "bo-cn",
        "br" => "br-fr",
        "bs" => "bs-latn-ba",
        "bs-cyrl" => "bs-cyrl-ba",
        "bs-latn" => "bs-latn-ba",
        "ca" => "ca-es",
        "chr" => "chr-cher-us",
        "chr-cher" => "chr-cher-us",
        "co" => "co-fr",
        "cs" => "cs-cz",
        "cy" => "cy-gb",
        "da" => "da-dk",
        "de" => "de-de",
        "dsb" => "dsb-de",
        "dv" => "dv-mv",
        "el" => "el-gr",
        "en" => "en-us",
        "es" => "es-es",
        "es-419" => "es-mx",
        "es-es-tradnl" => "es-es",
        "et" => "et-ee",
        "eu" => "eu-es",
        "fa" => "fa-ir",
        "ff" => "ff-latn-ng",
        "ff-latn" => "ff-latn-ng",
        "ff-ng" => "ff-latn-ng",
        "fi" => "fi-fi",
        "fil" => "fil-ph",
        "fo" => "fo-fo",
        "fr" => "fr-fr",
        "fy" => "fy-nl",
        "ga" => "ga-ie",
        "gd" => "gd-gb",
        "gl" => "gl-es",
        "gn" => "gn-py",
        "gsw" => "gsw-fr",
        "gu" => "gu-in",
        "ha" => "ha-latn-ng",
        "ha-latn" => "ha-latn-ng",
        "haw" => "haw-us",
        "he" => "he-il",
        "hi" => "hi-in",
        "hr" => "hr-hr",
        "hsb" => "hsb-de",
        "hu" => "hu-hu",
        "hy" => "hy-am",
        "id" => "id-id",
        "ig" => "ig-ng",
        "ii" => "ii-cn",
        "is" => "is-is",
        "it" => "it-it",
        "iu" => "iu-latn-ca",
        "iu-cans" => "iu-cans-ca",
        "iu-latn" => "iu-latn-ca",
        "ja" => "ja-jp",
        "ka" => "ka-ge",
        "kk" => "kk-kz",
        "kl" => "kl-gl",
        "km" => "km-kh",
        "kn" => "kn-in",
        "ko" => "ko-kr",
        "kok" => "kok-in",
        "ks" => "ks-deva-in",
        "ku" => "ku-arab-iq",
        "ku-arab" => "ku-arab-iq",
        "ky" => "ky-kg",
        "lb" => "lb-lu",
        "lo" => "lo-la",
        "lt" => "lt-lt",
        "lv" => "lv-lv",
        "mi" => "mi-nz",
        "mk" => "mk-mk",
        "ml" => "ml-in",
        "mn" => "mn-mn",
        "mn-cyrl" => "mn-mn",
        "mn-mong" => "mn-mn",
        "mn-mong-cn" => "mn-mn",
        "mn-mong-mn" => "mn-mn",
        "moh" => "moh-ca",
        "mr" => "mr-in",
        "ms" => "ms-my",
        "mt" => "mt-mt",
        "my" => "my-mm",
        "nb" => "nb-no",
        "ne" => "ne-np",
        "nl" => "nl-nl",
        "nn" => "nn-no",
        "no" => "nb-no",
        "nso" => "nso-za",
        "oc" => "oc-fr",
        "om" => "om-et",
        "or" => "or-in",
        "pa" => "pa-in",
        "pa-arab" => "pa-arab-pk",
        "pl" => "pl-pl",
        "prs" => "prs-af",
        "ps" => "ps-af",
        "pt" => "pt-pt",
        "quc" => "quc-latn-gt",
        "quz" => "quz-pe",
        "rm" => "rm-ch",
        "ro" => "ro-ro",
        "ru" => "ru-ru",
        "rw" => "rw-rw",
        "sa" => "sa-in",
        "sah" => "sah-ru",
        "sd" => "sd-arab-pk",
        "sd-arab" => "sd-arab-pk",
        "se" => "se-no",
        "se-se" => "se-no",
        "si" => "si-lk",
        "sk" => "sk-sk",
        "sl" => "sl-si",
        "sma" => "sma-se",
        "smj" => "smj-se",
        "smn" => "smn-fi",
        "sms" => "sms-fi",
        "so" => "so-so",
        "sq" => "sq-al",
        "sr" => "sr-latn-rs",
        "sr-cyrl" => "sr-cyrl-rs",
        "sr-latn" => "sr-latn-rs",
        "st" => "st-za",
        "sv" => "sv-se",
        "sw" => "sw-ke",
        "syr" => "syr-sy",
        "ta" => "ta-in",
        "te" => "te-in",
        "tg" => "tg-cyrl-tj",
        "tg-cyrl" => "tg-cyrl-tj",
        "th" => "th-th",
        "ti" => "ti-et",
        "tk" => "tk-tm",
        "tn" => "tn-bw",
        "tr" => "tr-tr",
        "ts" => "ts-za",
        "tt" => "tt-ru",
        "tzm" => "tzm-latn-dz",
        "tzm-latn" => "tzm-latn-dz",
        "ug" => "ug-cn",
        "uk" => "uk-ua",
        "ur" => "ur-pk",
        "uz" => "uz-latn-uz",
        "uz-cyrl" => "uz-cyrl-uz",
        "uz-latn" => "uz-latn-uz",
        "ve" => "ve-za",
        "vi" => "vi-vn",
        "wo" => "wo-sn",
        "xh" => "xh-za",
        "yo" => "yo-ng",
        "zh" => "zh-cn",
        "zh-hans" => "zh-cn",
        "zh-hant" => "zh-tw",
        "zu" => "zu-za",
    );

    /**
     * Retrieve locale object from tag
     * Basic input can be:
     * - The locale tag, e.g. "fr-fr" or "pt-br"
     * - The language tag, e.g. "fr" or "en"
     * - LCID hexadecimal code, e.g. "406" (= "da-dk") or "409" (= "en-us")
     *
     * @param string $locale_tag The locale tag
     * @return FormatLocale|false The locale object, false if not found
     */
    public static function getLocaleObjectFromTag($locale_tag)
    {
        $locale_tag = self::parseLocaleTag($locale_tag);
        if (empty($locale_tag))
        {
            return false;
        }
        $lcid = self::getLCIDFromTag($locale_tag, null);
        if ($lcid === false)
        {
            trigger_error('Invalid locale tag used "'.$locale_tag.'"');
            return false;
        }

        return self::getLocaleObjectByLCID($lcid, false);
    }

    /**
     * Retrieve the LCID locale tags
     *
     * @return array<int, string> The lcid codes => language tag
     */
    public static function getLCID_LocaleTags()
    {
        return self::$lcid_locales;
    }

    /**
     * Retrieve the locale-tags translation list
     *
     * @return array<string, string> The language code => language tag list
     */
    public static function getLocaleSwapList()
    {
        return self::$locales_translations;
    }

    /**
     * Retrieve LCID code from locale tag
     *
     * @param string $tag The locale tag
     * @return int|false The LCID; false if not found
     */
    public static function getLCIDFromTag($tag)
    {
        $lcid = array_search($tag, self::$lcid_locales, true);
        if (empty($lcid))
        {
            return false;
        }
        return $lcid;
    }

    /**
     * Retrieve the locale tag
     *
     * Basic input for $locale_tag_raw can be:
     * - The locale tag, e.g. "fr-fr" or "pt-br"
     * - The language tag, e.g. "fr" or "en"
     * - LCID hexadecimal code, e.g. "406" (= "da-dk") or "409" (= "en-us")
     *
     * @param string|int $locale_tag_raw The (short) locale tag
     * @param int|true $default_locale The locale to be used when the LCID was not found. True will return the current user locale.
     * @return string|null The locale tag based upon the LCID list (e.g. 'en_us').
     */
    public static function parseLocaleTag($locale_tag_raw, $default_locale = null)
    {
        if (empty($locale_tag_raw))
        {
            if ($default_locale === true)
            {
                return CurrentLocale::getLocale();
            }
            return $default_locale;
        }

        $lcid = 0;
        if (is_integer($locale_tag_raw))
        {
            $lcid = $locale_tag_raw & 0xFFFF;
        }
        else if (is_string($locale_tag_raw))
        {
            // Remove all undesired characters
            $locale_tag_raw = preg_replace('/[^0-9a-z\-]+$/i', '', strtolower($locale_tag_raw));

            if (isset(self::$locales_translations[$locale_tag_raw]))
            {
                // Use fullwidth locale tags only
                return self::$locales_translations[$locale_tag_raw];
            } elseif (in_array($locale_tag_raw, self::$lcid_locales))
            {
                return $locale_tag_raw;
            }

            // From here a hexadecimal LCID is expected
            if (!preg_match('/^[0-9a-f]+$/', $locale_tag_raw))
            {
                if ($default_locale === true)
                {
                    return CurrentLocale::getLocale();
                }

                // Invalid code!
                trigger_error('Invalid locale tag detected "'.$locale_tag_raw.'"');
                return $default_locale;
            }

            // Convert hexadecimal string
            $lcid = hexdec($locale_tag_raw);
            $lcid = $lcid & 0xFFFF;
        }

        if ($lcid == FormatLocale::LCID_CURRENT_LOCALE)
        {
            // Current user locale
            return CurrentLocale::getLocale();
        }

        if (isset(self::$lcid_locales[$lcid]))
        {
            $locale_tag = self::$lcid_locales[$lcid];
            if (isset(self::$locales_translations[$locale_tag]))
            {
                // Use fullwidth locale tags only
                return self::$locales_translations[$locale_tag];
            }
            return $locale_tag;
        }

        if ($default_locale === true)
        {
            return CurrentLocale::getLocale();
        }

        return $default_locale;
    }

    /**
     * Retrieve the locale object that handles a specific LCID
     *
     * @param int $lcid The LCID
     * @param boolean $try_current If the object is not found, the current locale object will be used
     * @return FormatLocale The locale object
     * @throws \Exception When the locale is not implemented
     */
    public static function getLocaleObjectByLCID($lcid = FormatLocale::LCID_CURRENT_LOCALE, $try_current = true)
    {
        $lcid = is_string($lcid) ? hexdec($lcid) : $lcid;

        $tag = false;
        if ($lcid === 0)
        {
            // General
        } elseif ($lcid === FormatLocale::LCID_CURRENT_LOCALE)
        {
            $tag = CurrentLocale::getLocale();
        } else {
            $lcid = $lcid & 0xFFFF;
        }

        if ($tag === false)
        {
            // Set locale tag from list
            $tag = isset(self::$lcid_locales[$lcid]) ? self::$lcid_locales[$lcid] : CurrentLocale::getLocale();
        }

        // Load the locale class
        $class_name = __NAMESPACE__.'\\Format\\lang_'.self::getSlug($tag);
        if (class_exists($class_name))
        {
            $oFormatLocale = call_user_func(array($class_name, 'getInstance'));
        } else {
            if ($try_current)
            {
                return self::getLocaleObjectByLCID(FormatLocale::LCID_CURRENT_LOCALE, false);
            } else {
                throw new \Exception('Locale for "'.$tag.'" is not implemented. ('.$class_name.')');
            }
        }

        return $oFormatLocale;
    }

    /**
     * Retrieve locale slug
     *
     * @param string $locale_tag - The locale tag (e.g. "pt-br", "en-us")
     * @return string - The sanitized tag (e.g. "pt_br", "en_us")
     */
    protected static function getSlug($locale_tag)
    {
        $slug = str_replace('-', '_', $locale_tag);

        return $slug;
    }

}
