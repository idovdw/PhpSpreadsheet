<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale;

use Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Calculation;

/**
 * Current locale (proxy class to format and formula locale).
 */
class CurrentLocale
{
    /**
     * @var null|FormatLocale Format locale object
     */
    protected static $oFormatLocale;

    /**
     * @var null|FormatLocale Format locale object, preserved state
     */
    protected static $oFormatLocalePreserved;

    /**
     * Set the current locale (both format and calculation).
     *
     * @param string $strLocaleTag The locale tag (e.g. 'id', 'pt-br', 'en_us')
     *
     * @throws Exception Unable to load locale
     *
     * @return bool Calculation locale is set
     */
    public static function setLocale(string $strLocaleTag)
    {
        // Set format locale
        $strLocaleTag = self::setFormatLocale($strLocaleTag);

        // Set calculation locale
        return self::setCalculationLocale($strLocaleTag);
    }

    /**
     * Set the current Format locale.
     *
     * @param string $strLocaleTag The locale tag (e.g. 'id', 'pt-br', 'en_us')
     *
     * @throws Exception Unable to load locale
     *
     * @return string The locale tag
     */
    public static function setFormatLocale(string $strLocaleTag)
    {
        self::$oFormatLocale = null;
        $oFormatLocale = FormatLocaleFactory::getLocaleObjectFromTag($strLocaleTag, true);
        if (empty($oFormatLocale)) {
            throw new Exception('Unable to load locale "' . $strLocaleTag . '" (for format). Reverting to "' . FormatLocaleFactory::DEFAULT_LOCALE_TAG . '".');
        }
        self::$oFormatLocale = $oFormatLocale;

        return $oFormatLocale->getTag();
    }

    /**
     * Set the current Calculation locale.
     *
     * @param string $strLocaleTag The locale tag (e.g. 'id', 'pt-br', 'en_us')
     *
     * @throws Exception Unable to load locale
     *
     * @return bool Calculation locale is set
     */
    public static function setCalculationLocale(string $strLocaleTag)
    {
        $result = Calculation::getInstance()->setLocale($strLocaleTag);
        if (!$result) {
            self::$oFormatLocale = null;

            throw new Exception('Unable to load locale "' . $strLocaleTag . '" (for calculation). Reverting to "' . FormatLocaleFactory::DEFAULT_LOCALE_TAG . '".');
        }

        return $result;
    }

    /**
     * Retrieve the current locale tag.
     *
     * @return string The locale tag (e.g. "fr-fr" or "pt-br" or "en-us")
     */
    public static function getLocale()
    {
        if (empty(self::$oFormatLocale)) {
            // Set default locale
            self::setDefaultLocale();

            if (empty(self::$oFormatLocale)) {
                return '';
            }
        }

        return self::$oFormatLocale->getTag();
    }

    /**
     * Set the default locale "en-us".
     */
    public static function setDefaultLocale(): void
    {
        self::setLocale(FormatLocaleFactory::DEFAULT_LOCALE_TAG);
    }

    /**
     * Retrieve the current FormatLocale instance.
     *
     * @throws Exception if unable to load default locale
     *
     * @return FormatLocale The current locale
     */
    public static function getFormatInstance(): FormatLocale
    {
        if (empty(self::$oFormatLocale)) {
            // Set default locale
            self::setDefaultLocale();

            if (empty(self::$oFormatLocale)) {
                throw new Exception('Unable to load default locale.');
            }
        }

        return self::$oFormatLocale;
    }

    /**
     * Retrieve the current FormulaLocale instance.
     *
     * @return FormulaLocale The current locale
     */
    public static function getFormulaInstance(): FormulaLocale
    {
        $strLocale = Calculation::getInstance()->getLocale();
        $oLocaleObject = FormulaLocaleFactory::getLocaleObject($strLocale);

        return $oLocaleObject;
    }

    /**
     * Store the current locale state, to be restored later.
     */
    public static function preserveState(): void
    {
        $oLocaleObject = self::getFormatInstance();
        self::$oFormatLocalePreserved = clone $oLocaleObject;
    }

    /**
     * Restore the earlier preserved locale state.
     *
     * Settings like strDecimalSeparator/strDateSeparator may have been altered
     * inbetween.
     *
     * @return bool True on success
     */
    public static function restoreState()
    {
        if (empty(self::$oFormatLocalePreserved)) {
            return false;
        }

        // Restore format and formula locales
        self::$oFormatLocale = self::$oFormatLocalePreserved;
        self::$oFormatLocale::restoreInstance(self::$oFormatLocale);
        $strLocaleTag = self::$oFormatLocale->getTag();
        Calculation::getInstance()->setLocale($strLocaleTag);

        return true;
    }

    /**
     * Set format to overrule the cell locale (always use the current locale).
     *
     * @param bool $overrule Overrule the locale specifications
     */
    public static function setOverruleCellLocale(bool $overrule = true): void
    {
        FormatLocale::setOverruleCellLocale($overrule);
    }

    /**
     * Extract locale configuration (LCID code, DbNum#, NatNum# settings).
     *
     * @param string $format The full format string
     *
     * @return array The locale format configuration (lcid, lcids, dbnum,
     * natnum, sysdate, systime and format)
     */
    public static function getLocaleConfiguration($format)
    {
        return self::getFormatInstance()->getLocaleConfiguration($format);
    }

    /**
     * Retrieve the LCID.
     *
     * @return int The LCID
     */
    public static function getLcid(): int
    {
        return self::getFormatInstance()->getLcid();
    }

    /**
     * Retrieve the locale tag.
     *
     * @return string The locale tag (e.g. "pt-br")
     */
    public static function getTag(): string
    {
        return self::getFormatInstance()->getTag();
    }

    /**
     * Retrieve the locale slug.
     *
     * @return string The locale slug (e.g. "en_us")
     */
    public static function getSlug()
    {
        return self::getFormatInstance()->getSlug();
    }

    /**
     * Retrieve the language code of this locale.
     *
     * @return string The first characters of the locale tag
     */
    public static function getLanguage(): string
    {
        return self::getFormatInstance()->getLanguage();
    }

    /**
     * Set the currency code. Only used by NumberFormat::toFormattedString()
     * to format output by \PhpOffice\PhpSpreadsheet\Writer\Html and
     * \PhpOffice\PhpSpreadsheet\Writer\Pdf.
     *
     * @param string $strCurrencyCode Character for currency code
     */
    public static function setCurrencyCode(string $strCurrencyCode): void
    {
        self::getFormatInstance()->setCurrencyCode($strCurrencyCode);
    }

    /**
     * Get the currency code. If it has not yet been set explicitly, try to
     * obtain the symbol information from locale.
     *
     * @return string The currency code
     */
    public static function getCurrencyCode(): string
    {
        return self::getFormatInstance()->getCurrencyCode();
    }

    /**
     * Get the numerals types (number representation of 0 up to 9).
     *
     * @return string[] The numbers representation (e.g. 'arabic')
     */
    public static function getNumerals(): array
    {
        return self::getFormatInstance()->getNumerals();
    }

    /**
     * Set the decimal separator. Only used by NumberFormat::toFormattedString()
     * to format output by \PhpOffice\PhpSpreadsheet\Writer\Html and
     * \PhpOffice\PhpSpreadsheet\Writer\Pdf.
     *
     * @param string $separator Character for decimal separator
     */
    public static function setDecimalSeparator(string $separator): void
    {
        self::getFormatInstance()->setDecimalSeparator($separator);
    }

    /**
     * Get the decimal separator. If it has not yet been set explicitly, try to
     * obtain number formatting information from locale.
     *
     * @return string The decimal separator
     */
    public static function getDecimalSeparator(): string
    {
        return self::getFormatInstance()->getDecimalSeparator();
    }

    /**
     * Set the thousands separator. Only used by NumberFormat::toFormattedString()
     * to format output by \PhpOffice\PhpSpreadsheet\Writer\Html and
     * \PhpOffice\PhpSpreadsheet\Writer\Pdf.
     *
     * @param string $separator Character for thousands separator
     */
    public static function setThousandsSeparator(string $separator): void
    {
        self::getFormatInstance()->setThousandsSeparator($separator);
    }

    /**
     * Get the thousands separator. If it has not yet been set explicitly, try
     * to obtain number formatting information from locale.
     *
     * @return string The thousands separator
     */
    public static function getThousandsSeparator(): string
    {
        return self::getFormatInstance()->getThousandsSeparator();
    }

    /**
     * Retrieve the thousands format pattern.
     *
     * @return int Thousands format pattern
     */
    public static function getThousandsFormatPattern()
    {
        return self::getFormatInstance()->getThousandsFormatPattern();
    }

    /**
     * Set the date separator.
     *
     * @param string $separator Character for date separator
     */
    public static function setDateSeparator(string $separator): void
    {
        self::getFormatInstance()->setDateSeparator($separator);
    }

    /**
     * Retrieve the date separator (e.g. '/','-','.').
     *
     * @return string The date separator
     */
    public static function getDateSeparator(): string
    {
        return self::getFormatInstance()->getDateSeparator();
    }

    /**
     * Retrieve the time separator (e.g. ':','.').
     *
     * @return string The time separator
     */
    public static function getTimeSeparator(): string
    {
        return self::getFormatInstance()->getTimeSeparator();
    }

    /**
     * Retrieve date translation specification.
     *
     * @param array|false|true $aLocaleConfig Locale format configuration; true uses
     * current locale. False uses the default locale ('en-us')
     *
     * @throws Exception if unable to load default locale
     *
     * @return array The date translations (days, months, language)
     */
    public static function getDateTranslations($aLocaleConfig): array
    {
        if ($aLocaleConfig === true) {
            return self::getFormatInstance()->getDateTranslations(LocaleLayout::CALENDAR_CODE_GREGORIAN);
        }

        if ($aLocaleConfig === false) {
            $oFormatLocale = FormatLocaleFactory::getLocaleObjectFromTag(FormatLocaleFactory::DEFAULT_LOCALE_TAG, false);
            if (empty($oFormatLocale)) {
                throw new Exception('Unable to load default locale.');
            }

            return $oFormatLocale->getDateTranslations(LocaleLayout::CALENDAR_CODE_GREGORIAN);
        }

        return $aLocaleConfig['date_locale']->getDateTranslations($aLocaleConfig['calendar_code']);
    }

    /**
     * Translate format string to locale specific format.
     *
     * @param string $format The full format string (including locale code(s))
     * @param array $aLocaleConfig The locale format configuration
     *
     * @return string The altered format, if applicable
     */
    public static function translateFormatString($format, $aLocaleConfig): string
    {
        return $aLocaleConfig['locale']->translateFormatString($format, $aLocaleConfig);
    }

    /**
     * Perform the transliteration based upon the locale format configuration.
     *
     * @param string $value The formatted value
     * @param array $aLocaleConfig The locale format configuration
     *
     * @return string The altered value, if applicable
     */
    public static function performTransliteration($value, $aLocaleConfig): string
    {
        return $aLocaleConfig['locale']->performTransliteration($value, $aLocaleConfig);
    }

    /**
     * Get built-in format code string.
     *
     * @param int $index The format ID (0 - 163)
     *
     * @return string The format code e.g. "General", "d-mmm-yy"
     */
    public static function getBuiltInFormatCodeString($index): string
    {
        return self::getFormatInstance()->getBuiltInFormatCodeString($index);
    }

    /**
     * Get built-in format code ID (index).
     *
     * @param string $formatCode The format code e.g. "General", "d-mmm-yy"
     *
     * @return false|int the built-in format code ID; false if not found
     */
    public static function getBuiltInFormatCodeID($formatCode)
    {
        return self::getFormatInstance()->getBuiltInFormatCodeID($formatCode);
    }

    /**
     * Retrieve international configuration value.
     *
     * @param int|string $key The settings key
     *
     * @return mixed The international setting; null if not found
     */
    public static function getInternational($key)
    {
        return self::getFormulaInstance()->getInternational($key);
    }
}
