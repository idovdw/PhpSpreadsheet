<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel;

use Datetime;
use PhpOffice\PhpSpreadsheet\Calculation\ArrayEnabled;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;
use PhpOffice\PhpSpreadsheet\Shared\Date as SharedDateHelper;

class TimeValue
{
    use ArrayEnabled;

    /**
     * TIMEVALUE.
     *
     * Returns a value that represents a particular time.
     * Use TIMEVALUE to convert a time represented by a text string to an Excel or PHP date/time stamp
     * value.
     *
     * NOTE: When used in a Cell Formula, MS Excel changes the cell format so that it matches the time
     * format of your regional settings. PhpSpreadsheet does not change cell formatting in this way.
     *
     * Excel Function:
     *        TIMEVALUE(timeValue)
     *
     * @param null|array|string $timeValue A text string that represents a time in any one of the Microsoft
     *                                    Excel time formats; for example, "6:45 PM" and "18:45" text strings
     *                                    within quotation marks that represent time.
     *                                    Date information in time_text is ignored.
     *                         Or can be an array of date/time values
     *
     * @return mixed Excel date/time serial value, PHP date/time serial value or PHP date/time object,
     *                        depending on the value of the ReturnDateType flag
     *         If an array of numbers is passed as the argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function fromString($timeValue)
    {
        if (is_array($timeValue)) {
            return self::evaluateSingleArgumentArray([self::class, __FUNCTION__], $timeValue);
        }

        $timeValue = trim($timeValue ?? '', '"');
        $timeValue = str_replace(['/', '.'], '-', $timeValue);

        $arraySplit = preg_split('/[\/:\-\s]/', $timeValue) ?: [];
        if ((count($arraySplit) == 2 || count($arraySplit) == 3) && $arraySplit[0] > 24) {
            $arraySplit[0] = ($arraySplit[0] % 24);
            $timeValue = implode(':', $arraySplit);
        }

         // @ido @fix!
        $baseYear = SharedDateHelper::getExcelCalendar();
        $PHPDateArray = date_parse($timeValue);
        $retValue = Functions::VALUE();
        if (($PHPDateArray !== false) && ($PHPDateArray['error_count'] == 0)) {
            // @ido @fix!
            // OpenOffice-specific code removed - it works just like Excel
            // $excelDateValue = SharedDateHelper::formattedPHPToExcel(1900, 1, 1, $PHPDateArray['hour'], $PHPDateArray['minute'], $PHPDateArray['second']) - 1;
            $excelDateValue = SharedDateHelper::formattedPHPToExcel($baseYear, 1, 1, $PHPDateArray['hour'], $PHPDateArray['minute'], $PHPDateArray['second']);

            $retType = Functions::getReturnDateType();
            if ($retType === Functions::RETURNDATE_EXCEL) {
                $retValue = (float) $excelDateValue;
            } elseif ($retType === Functions::RETURNDATE_UNIX_TIMESTAMP) {
                $retValue = (int) $phpDateValue = SharedDateHelper::excelToTimestamp($excelDateValue + 25569) - 3600;
            } else {
                $retValue = new DateTime($baseYear.'-01-01 ' . $PHPDateArray['hour'] . ':' . $PHPDateArray['minute'] . ':' . $PHPDateArray['second']);
            }
        }

        return $retValue;
    }
}
