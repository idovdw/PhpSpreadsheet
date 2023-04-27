<?php

namespace PhpOffice\PhpSpreadsheet\Style;

use PhpOffice\PhpSpreadsheet\Locale\CurrentLocale;

class NumberFormat extends Supervisor
{
    // Pre-defined formats
    const FORMAT_GENERAL = 'General';

    const FORMAT_TEXT = '@';

    const FORMAT_NUMBER = '0';
    const FORMAT_NUMBER_0 = '0.0';
    const FORMAT_NUMBER_00 = '0.00';
    const FORMAT_NUMBER_COMMA_SEPARATED1 = '#,##0.00';
    const FORMAT_NUMBER_COMMA_SEPARATED2 = '#,##0.00_-';

    const FORMAT_PERCENTAGE = '0%';
    const FORMAT_PERCENTAGE_0 = '0.0%';
    const FORMAT_PERCENTAGE_00 = '0.00%';

    /** @deprecated 1.26 use FORMAT_DATE_YYYYMMDD instead */
    const FORMAT_DATE_YYYYMMDD2 = 'yyyy-mm-dd';
    const FORMAT_DATE_YYYYMMDD = 'yyyy-mm-dd';
    const FORMAT_DATE_DDMMYYYY = 'dd/mm/yyyy';
    const FORMAT_DATE_DMYSLASH = 'd/m/yy';
    const FORMAT_DATE_DMYMINUS = 'd-m-yy';
    const FORMAT_DATE_DMMINUS = 'd-m';
    const FORMAT_DATE_MYMINUS = 'm-yy';
    const FORMAT_DATE_XLSX14 = 'mm-dd-yy';
    const FORMAT_DATE_XLSX15 = 'd-mmm-yy';
    const FORMAT_DATE_XLSX16 = 'd-mmm';
    const FORMAT_DATE_XLSX17 = 'mmm-yy';
    const FORMAT_DATE_XLSX22 = 'm/d/yy h:mm';
    const FORMAT_DATE_DATETIME = 'd/m/yy h:mm';
    const FORMAT_DATE_TIME1 = 'h:mm AM/PM';
    const FORMAT_DATE_TIME2 = 'h:mm:ss AM/PM';
    const FORMAT_DATE_TIME3 = 'h:mm';
    const FORMAT_DATE_TIME4 = 'h:mm:ss';
    const FORMAT_DATE_TIME5 = 'mm:ss';
    const FORMAT_DATE_TIME6 = 'h:mm:ss';
    const FORMAT_DATE_TIME7 = 'i:s.S';
    const FORMAT_DATE_TIME8 = 'h:mm:ss;@';
    const FORMAT_DATE_YYYYMMDDSLASH = 'yyyy/mm/dd;@';

    const DATE_TIME_OR_DATETIME_ARRAY = [
        self::FORMAT_DATE_YYYYMMDD,
        self::FORMAT_DATE_DDMMYYYY,
        self::FORMAT_DATE_DMYSLASH,
        self::FORMAT_DATE_DMYMINUS,
        self::FORMAT_DATE_DMMINUS,
        self::FORMAT_DATE_MYMINUS,
        self::FORMAT_DATE_XLSX14,
        self::FORMAT_DATE_XLSX15,
        self::FORMAT_DATE_XLSX16,
        self::FORMAT_DATE_XLSX17,
        self::FORMAT_DATE_XLSX22,
        self::FORMAT_DATE_DATETIME,
        self::FORMAT_DATE_TIME1,
        self::FORMAT_DATE_TIME2,
        self::FORMAT_DATE_TIME3,
        self::FORMAT_DATE_TIME4,
        self::FORMAT_DATE_TIME5,
        self::FORMAT_DATE_TIME6,
        self::FORMAT_DATE_TIME7,
        self::FORMAT_DATE_TIME8,
        self::FORMAT_DATE_YYYYMMDDSLASH,
    ];
    const TIME_OR_DATETIME_ARRAY = [
        self::FORMAT_DATE_XLSX22,
        self::FORMAT_DATE_DATETIME,
        self::FORMAT_DATE_TIME1,
        self::FORMAT_DATE_TIME2,
        self::FORMAT_DATE_TIME3,
        self::FORMAT_DATE_TIME4,
        self::FORMAT_DATE_TIME5,
        self::FORMAT_DATE_TIME6,
        self::FORMAT_DATE_TIME7,
        self::FORMAT_DATE_TIME8,
    ];

    /** @deprecated 1.28 use FORMAT_CURRENCY_USD_INTEGER instead */
    const FORMAT_CURRENCY_USD_SIMPLE = '"$"#,##0_-';
    const FORMAT_CURRENCY_USD_INTEGER = '$#,##0_-';
    const FORMAT_CURRENCY_USD = '$#,##0.00_-';
    /** @deprecated 1.28 use FORMAT_CURRENCY_EUR_INTEGER instead */
    const FORMAT_CURRENCY_EUR_SIMPLE = '#,##0_-"€"';
    const FORMAT_CURRENCY_EUR_INTEGER = '#,##0_-[$€]';
    const FORMAT_CURRENCY_EUR = '#,##0.00_-[$€]';
    const FORMAT_ACCOUNTING_USD = '_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)';
    const FORMAT_ACCOUNTING_EUR = '_("€"* #,##0.00_);_("€"* \(#,##0.00\);_("€"* "-"??_);_(@_)';

    /**
     * Excel built-in number formats.
     *
     * @var array
     */
    protected static $builtInFormats;

    /**
     * Excel built-in number formats (flipped, for faster lookups).
     *
     * @var array
     */
    protected static $flippedBuiltInFormats;

    /**
     * Format Code.
     *
     * @var null|string
     */
    protected $formatCode = self::FORMAT_GENERAL;

    /**
     * Built-in format Code ID.
     *
     * @var false|int
     */
    protected $builtInFormatCodeID = 0;

    /**
     * Create a new NumberFormat.
     *
     * @param bool $isSupervisor Flag indicating if this is a supervisor or not
     *                                    Leave this value at default unless you understand exactly what
     *                                        its ramifications are
     * @param bool $isConditional Flag indicating if this is a conditional style or not
     *                                    Leave this value at default unless you understand exactly what
     *                                        its ramifications are
     */
    public function __construct($isSupervisor = false, $isConditional = false)
    {
        // Supervisor?
        parent::__construct($isSupervisor);

        if ($isConditional) {
            $this->formatCode = null;
            $this->builtInFormatCodeID = false;
        }
    }

    /**
     * Get the shared style component for the currently active cell in currently active sheet.
     * Only used for style supervisor.
     *
     * @return NumberFormat
     */
    public function getSharedComponent()
    {
        /** @var Style */
        $parent = $this->parent;

        return $parent->getSharedComponent()->getNumberFormat();
    }

    /**
     * Build style array from subcomponents.
     *
     * @param array $array
     *
     * @return array
     */
    public function getStyleArray($array)
    {
        return ['numberFormat' => $array];
    }

    /**
     * @ido @fix
     *
     * Apply styles from array.
     *
     * <code>
     * $spreadsheet->getActiveSheet()->getStyle('B2')->getNumberFormat()->applyFromArray(
     *     [
     *         'formatCode' => NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE
     *     ]
     * );
     * </code>
     *
     * @param array $styleArray Array containing style information
     *
     * @return $this
     */
    public function applyFromArray(array $styleArray)
    {
        if ($this->isSupervisor) {
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($this->getStyleArray($styleArray));
        } else {
            if (isset($styleArray['formatCode'])) {
                $this->setFormatCode($styleArray['formatCode']);
            }
            if (isset($styleArray['builtInFormatCode'])) {
                $this->setBuiltInFormatCode($styleArray['builtInFormatCode']);
            }
        }

        return $this;
    }

    /**
     * Get Format Code.
     *
     * @return null|string
     */
    public function getFormatCode()
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getFormatCode();
        }
        if (is_int($this->builtInFormatCodeID)) {
            return CurrentLocale::builtInFormatCode($this->builtInFormatCodeID);
        }

        return $this->formatCode;
    }

    /**
     * Set Format Code.
     *
     * @param string $formatCode see self::FORMAT_*
     *
     * @return $this
     */
    public function setFormatCode(string $formatCode)
    {
        if ($formatCode == '') {
            $formatCode = self::FORMAT_GENERAL;
        }
        if ($this->isSupervisor) {
            $styleArray = $this->getStyleArray(['formatCode' => $formatCode]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->formatCode = $formatCode;
            if (is_int($this->builtInFormatCodeID)) {
                $formatCodeCurrent = CurrentLocale::builtInFormatCode($this->builtInFormatCodeID);
                if (($formatCodeCurrent == '') || ($formatCode != $formatCodeCurrent)) {
                    $this->builtInFormatCodeID = CurrentLocale::builtInFormatCodeID($formatCode);
                }
            // Leave format code ID intact; don't swap if format codes are identical
            } else {
                $this->builtInFormatCodeID = CurrentLocale::builtInFormatCodeID($formatCode);
            }
        }

        return $this;
    }

    /**
     * Get Built-In Format Code.
     *
     * @return false|int
     */
    public function getBuiltInFormatCode()
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getBuiltInFormatCode();
        }

        // Scrutinizer says this could return true. It is wrong.
        return $this->builtInFormatCodeID;
    }

    /**
     * @ido @fix
     * Set Built-In Format Code.
     *
     * @param int $formatCodeID Format code ID (0 - 163)
     *
     * @return $this
     */
    public function setBuiltInFormatCode($formatCodeID)
    {
        if ($this->isSupervisor) {
            $styleArray = $this->getStyleArray(['formatCode' => CurrentLocale::builtInFormatCode($formatCodeID), 'builtInFormatCode' => $formatCodeID]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->builtInFormatCodeID = $formatCodeID;
            $this->formatCode = CurrentLocale::builtInFormatCode($formatCodeID);
        }

        return $this;
    }

    /**
     * Get built-in format code.
     *
     * @return string
     */
    public static function builtInFormatCode($intFormatCodeID)
    {
        return CurrentLocale::builtInFormatCode($intFormatCodeID);
    }

    /**
     * Get built-in format code ID.
     *
     * @deprecated: Use CurrentLocale::builtInFormatCodeID($formatCode)
     *
     * @return false|int
     */
    public static function builtInFormatCodeIndex($formatCodeIndex)
    {
        return CurrentLocale::builtInFormatCodeID($formatCode);
    }

    /**
     * Get hash code.
     *
     * @return string Hash code
     */
    public function getHashCode()
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getHashCode();
        }

        return md5(
            $this->formatCode .
            $this->builtInFormatCodeID .
            __CLASS__
        );
    }

    /**
     * Convert a value in a pre-defined format to a PHP string.
     *
     * @param mixed $value Value to format
     * @param string $format Format code: see = self::FORMAT_* for predefined values;
     *                          or can be any valid MS Excel custom format string
     * @param array $callBack Callback function for additional formatting of string
     *
     * @return string Formatted string
     */
    public static function toFormattedString($value, $format, $callBack = null)
    {
        return NumberFormat\Formatter::toFormattedString($value, $format, $callBack);
    }

    protected function exportArray1(): array
    {
        $exportedArray = [];
        $this->exportArray2($exportedArray, 'formatCode', $this->getFormatCode());

        return $exportedArray;
    }
}
