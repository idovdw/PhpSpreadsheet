<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale;

class LocaleClass
{
    /**
     * Convert string into PascalCase-safe classname, for Format locale tags.
     *
     * @param string $string The raw string
     *
     * @return string The FormatLocale classname
     */
    public static function getClassNameFormatLocale($string)
    {
        return 'Format' . self::getClassNameLocale($string);
    }

    /**
     * Convert string into PascalCase-safe classname, for Formula locale tags.
     *
     * @param string $string The raw string
     *
     * @return string The FormulaLocale classname
     */
    public static function getClassNameFormulaLocale($string)
    {
        return 'Locale' . self::getClassNameLocale($string);
    }

    /**
     * Convert string into PascalCase-safe classname, for locale tags.
     *
     * @param string $string The raw string
     *
     * @return string Converted string
     */
    protected static function getClassNameLocale($string)
    {
        $strClassName = '';
        $aSegments = preg_split('/[-_]/', $string);
        if (!$aSegments) {
            $aSegments = [$string];
        }

        foreach ($aSegments as $strPart) {
            $strClassName .= 'x' . strtoupper($strPart);
        }

        return substr($strClassName, 1);
    }

    /**
     * Convert string into PascalCase-safe classname.
     *
     * @param string $string The raw string
     *
     * @return string Converted string
     */
    public static function getClassNameCalendar($string)
    {
        $strPascalCase = '';
        $aSegments = preg_split('/[-_]/', $string);
        if (!$aSegments) {
            $aSegments = [$string];
        }

        foreach ($aSegments as $part) {
            $strPascalCase .= ucfirst($part);
        }

        return 'Calendar' . $strPascalCase;
    }
}
