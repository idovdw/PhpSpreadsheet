<?php

namespace PhpOffice\PhpSpreadsheet\Locale;


class FormulaLocaleFactory
{
    const DEFAULT_LOCALE_TAG = "en-us";

    /**
     * @var string[] The list of valid formula locales
     */
    public static $locales = array(
        "af-za",
        "am-et",
        "ar-sa",
        "as-in",
        "az-latn-az",
        "be-by",
        "bg-bg",
        "bn-bd",
        "bn-in",
        "bs-latn-ba",
        "ca-es",
        "ca-es-valencia",
        "cs-cz",
        "cy-gb",
        "da-dk",
        "de-de",
        "el-gr",
        "en-gb",
        "en-us",
        "es-es",
        "et-ee",
        "eu-es",
        "fa-ir",
        "fi-fi",
        "fil-ph",
        "fr-ca",
        "fr-fr",
        "ga-ie",
        "gd-gb",
        "gl-es",
        "gu-in",
        "he-il",
        "hi-in",
        "hr-hr",
        "hu-hu",
        "hy-am",
        "id-id",
        "is-is",
        "it-it",
        "ja-jp",
        "ka-ge",
        "kk-kz",
        "km-kh",
        "kn-in",
        "kok-in",
        "ko-kr",
        "ky-kg",
        "lb-lu",
        "lt-lt",
        "lv-lv",
        "mi-nz",
        "mk-mk",
        "ml-in",
        "mn-mn",
        "mr-in",
        "ms-my",
        "mt-mt",
        "nb-no",
        "ne-np",
        "nl-nl",
        "nn-no",
        "or-in",
        "pa-in",
        "pl-pl",
        "prs-af",
        "pt-br",
        "pt-pt",
        "quz-pe",
        "ro-ro",
        "ru-ru",
        "sd-arab-pk",
        "si-lk",
        "sk-sk",
        "sl-si",
        "sq-al",
        "sr-cyrl-rs",
        "sr-latn-rs",
        "sv-se",
        "sw-ke",
        "ta-in",
        "te-in",
        "th-th",
        "tk-tm",
        "tr-tr",
        "tt-ru",
        "ug-cn",
        "uk-ua",
        "ur-pk",
        "vi-vn",
        "zh-cn",
        "zh-tw",
    );

    /**
     * @var array The list of locale translations
     */
    protected static $locale_translations = array(
        "ar-ae" => "ar-sa",
        "ar-bh" => "ar-sa",
        "ar-dz" => "ar-sa",
        "ar-eg" => "ar-sa",
        "ar-iq" => "ar-sa",
        "ar-jo" => "ar-sa",
        "ar-kw" => "ar-sa",
        "ar-lb" => "ar-sa",
        "ar-ly" => "ar-sa",
        "ar-ma" => "ar-sa",
        "arn-cl" => "es-mx",
        "ar-om" => "ar-sa",
        "ar-qa" => "ar-sa",
        "ar-sy" => "ar-sa",
        "ar-tn" => "ar-sa",
        "ar-ye" => "ar-sa",
        "az-cyrl-az" => "az-latn-az",
        "ba-ru" => "en-us",
        "bo-cn" => "zh-cn",
        "br-fr" => "fr-fr",
        "bs-cyrl-ba" => "bs-latn-ba",
        "chr-cher-us" => "fr-fr",
        "co-fr" => "fr-fr",
        "de-at" => "de-de",
        "de-ch" => "de-de",
        "de-li" => "de-de",
        "de-lu" => "de-de",
        "dsb-de" => "de-de",
        "dv-mv" => "en-us",
        "dz-bt" => "en-us",
        "en-029" => "en-gb",
        "en-ae" => "en-gb",
        "en-au" => "en-gb",
        "en-bz" => "en-gb",
        "en-ca" => "en-gb",
        "en-hk" => "en-gb",
        "en-ie" => "en-gb",
        "en-in" => "en-gb",
        "en-jm" => "en-gb",
        "en-my" => "en-gb",
        "en-nz" => "en-gb",
        "en-ph" => "en-gb",
        "en-sg" => "en-gb",
        "en-tt" => "en-gb",
        "en-za" => "en-gb",
        "en-zw" => "en-gb",
        "es-ar" => "es-mx",
        "es-bo" => "es-mx",
        "es-cl" => "es-mx",
        "es-co" => "es-mx",
        "es-cr" => "es-mx",
        "es-cu" => "es-mx",
        "es-do" => "es-mx",
        "es-ec" => "es-mx",
        "es-gt" => "es-mx",
        "es-hn" => "es-mx",
        "es-ni" => "es-mx",
        "es-pa" => "es-mx",
        "es-pe" => "es-mx",
        "es-pr" => "es-mx",
        "es-py" => "es-mx",
        "es-sv" => "es-mx",
        "es-us" => "es-mx",
        "es-uy" => "es-mx",
        "es-ve" => "es-mx",
        "ff-latn-ng" => "en-us",
        "ff-latn-sn" => "en-us",
        "fo-fo" => "en-us",
        "fr-029" => "fr-fr",
        "fr-be" => "fr-fr",
        "fr-ca" => "fr-fr",
        "fr-cd" => "fr-fr",
        "fr-ch" => "fr-fr",
        "fr-ci" => "fr-fr",
        "fr-cm" => "fr-fr",
        "fr-ht" => "fr-fr",
        "fr-lu" => "fr-fr",
        "fr-ma" => "fr-fr",
        "fr-mc" => "fr-fr",
        "fr-ml" => "fr-fr",
        "fr-re" => "fr-fr",
        "fr-sn" => "fr-fr",
        "fy-nl" => "nl-nl",
        "gn-py" => "es-mx",
        "gsw-fr" => "fr-fr",
        "ha-latn-ng" => "en-us",
        "haw-us" => "en-us",
        "hr-ba" => "hr-hr",
        "hsb-de" => "de-de",
        "ig-ng" => "fr-fr",
        "ii-cn" => "zh-cn",
        "it-ch" => "it-it",
        "iu-cans-ca" => "en-us",
        "iu-latn-ca" => "en-us",
        "kl-gl" => "en-us",
        "kr-latn-ng" => "en-us",
        "ks-arab" => "en-us",
        "ks-deva-in" => "en-us",
        "ku-arab-iq" => "fr-fr",
        "la-va" => "en-us",
        "lo-la" => "fr-fr",
        "moh-ca" => "en-us",
        "ms-bn" => "ms-my",
        "my-mm" => "en-us",
        "ne-in" => "ne-np",
        "nl-be" => "nl-nl",
        "nso-za" => "en-us",
        "oc-fr" => "fr-fr",
        "om-et" => "en-us",
        "pa-arab-pk" => "pa-in",
        "ps-af" => "en-us",
        "quc-latn-gt" => "es-mx",
        "quz-bo" => "quz-pe",
        "quz-ec" => "quz-pe",
        "rm-ch" => "de-de",
        "ro-md" => "ro-ro",
        "ru-md" => "ru-ru",
        "rw-rw" => "fr-fr",
        "sah-ru" => "ru-ru",
        "sa-in" => "hi-in",
        "se-fi" => "fi-fi",
        "se-no" => "no-no",
        "sma-no" => "no-no",
        "sma-se" => "sv-se",
        "smj-no" => "no-no",
        "smj-se" => "sv-se",
        "smn-fi" => "fi-fi",
        "sms-fi" => "fi-fi",
        "so-so" => "en-us",
        "sr-cyrl-ba" => "sr-cyrl-rs",
        "sr-cyrl-cs" => "sr-cyrl-rs",
        "sr-cyrl-me" => "sr-cyrl-rs",
        "sr-latn-ba" => "sr-latn-rs",
        "sr-latn-cs" => "sr-latn-rs",
        "sr-latn-me" => "sr-latn-rs",
        "st-za" => "en-us",
        "sv-fi" => "sv-se",
        "syr-sy" => "en-us",
        "ta-lk" => "ta-in",
        "tg-cyrl-tj" => "en-us",
        "ti-er" => "en-us",
        "ti-et" => "en-us",
        "tn-bw" => "fr-fr",
        "tn-za" => "fr-fr",
        "ts-za" => "en-us",
        "tzm-arab-ma" => "en-us",
        "tzm-latn-dz" => "en-us",
        "ur-in" => "ur-pk",
        "uz-cyrl-uz" => "uz-latn-uz",
        "ve-za" => "en-us",
        "wo-sn" => "fr-fr",
        "xh-za" => "en-us",
        "yi-001" => "en-us",
        "yo-ng" => "fr-fr",
        "zh-hk" => "zh-tw",
        "zh-mo" => "zh-tw",
        "zh-sg" => "zh-tw",
        "zu-za" => "en-us",
    );

    /**
     * Retrieve locale object
     *
     * @param string $slug The locale slug
     * @return FormulaLocale The formula locale
     */
    protected static function _getLocale($slug)
    {
        $oFormulaLocale = false;
        $class_name = __NAMESPACE__.'\\Formula\\locale_'.$slug;
        if (class_exists($class_name))
        {
            $oFormulaLocale = new $class_name();
        }
        return $oFormulaLocale;
    }

    /**
     * Retrieve formula locale object from tag
     *
     * @param string $locale_tag The locale tag (e.g. "fr-fr" or "pt-br" or "en-us")
     * @return FormulaLocale|false The locale object, false if not found
     */
    public static function getLocaleObject($locale_tag)
    {
        $tag = self::parseLocaleTag($locale_tag);

        $slug = self::getSlug($tag);

        $oFormulaLocale = self::_getLocale($slug);
        if (!$oFormulaLocale)
        {
            // Try the language code
            while ((strpos($slug, '_') !== false) && !$oFormulaLocale)
            {
                $slug = substr($slug, 0, strrpos($slug, '_'));
                $oFormulaLocale = self::_getLocale($slug);
            }

            if (!$oFormulaLocale)
            {
                throw new \Exception('Locale for "'.$tag.'" is not implemented. ('.$class_name.')');
            }
        }

        return $oFormulaLocale;
    }

    /**
     * Retrieve the locale tag
     *
     * @param string $locale_tag The locale tag (e.g. "pt-br", "en-us")
     * @return string|null|true The locale tag based upon the LCID
     * (e.g. 'en_us'). True will return the current user locale.
     */
    public static function parseLocaleTag($locale_tag)
    {
        if (empty($locale_tag))
        {
            $locale_tag = CurrentLocale::getLocale();
        }

        $locale_tag = FormatLocaleFactory::parseLocaleTag($locale_tag);

        if (isset(self::$locale_translations[$locale_tag]))
        {
            $locale_tag = self::$locale_translations[$locale_tag];
        }

        if (in_array($locale_tag, self::$locales))
        {
            return $locale_tag;
        }

        // Locale not found
        return self::DEFAULT_LOCALE_TAG;
    }

    /**
     * Retrieve locale slug
     *
     * @param string $locale_tag - The locale tag (e.g. "pt-br", "en-us")
     * @return string - The sanitized tag e.g. "pt_br", "en_us"
     */
    protected static function getSlug($locale_tag)
    {
        $slug = str_replace('-', '_', $locale_tag);

        return $slug;
    }

    /**
     * Retrieve the locale translations array
     *
     * @return array - The tag translations
     */
    public static function getLocaleTranslations()
    {
        return self::$locale_translations;
    }

}
