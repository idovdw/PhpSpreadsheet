<?php

namespace PhpOffice\PhpSpreadsheetTests\Shared;

use Exception;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Shared\Locale\CurrentLocale;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat\Formatter;
use PHPUnit\Framework\TestCase;

class LocaleTest extends TestCase
{
    /**
     * @var int The Excel calendar base year
     */
    protected $baseYear;

    protected function setUp(): void
    {
        $this->baseYear = Date::getExcelCalendar();

        // Preserve current locale
        CurrentLocale::preserveState();
    }

    protected function tearDown(): void
    {
        // Restore current locale
        CurrentLocale::restoreState();

        Date::setExcelCalendar($this->baseYear);
    }

    /**
     * @dataProvider providerFormatTests
     *
     * @param string $filename Name of Excel file
     * @param string $locale Locale tag (= worksheet title)
     * @param int $excelCalendar The Excel baseyear
     * @param int $row_no Row number in specific file
     * @param array $row Row data
     */
    public function testLocaleFormat(string $filename, string $locale, int $excelCalendar, int $row_no, array $row): void
    {
        /*
        Available row data:
        1 => 'code',
        2 => 'type',
        3 => 'cell',
        4 => 'expected',
        7 => 'comment',
        $row['format']
        $row['error']
        */

        try {
            // Locale check; swap locale
            CurrentLocale::setLocale($locale);
        } catch (Exception $ex) {
            // Unable to load locale
            self::markTestIncomplete('Locale "' . $locale . '" could not be set.');
        }

        // Testcodes should be unique
        self::assertSame('', $row['error']);

        Date::setExcelCalendar($excelCalendar);

        // Get formatted cell text
        $cellText = '' . NumberFormat::toFormattedString($row['cell'], $row['format']);
        if ($cellText === '#FMT') {
            // self::markTestSkipped('Format is not yet supported.');
            self::assertSame('#FMT', $cellText);

            return;
        }

        if ($row['expected'] === null) {
            // Our formatting is string result only
            $row['expected'] = '';
        }

        if ($cellText != $row['expected']) {
            // Check for multiplication
            $multiply = false;
            if (preg_match_all(Formatter::PREG_DETECT_MULTIPLICATION, $row['format'], $matches)) {
                $multiply = substr($matches[0][0], 1);
            }
            if ($multiply !== false) {
                $row_cell = preg_replace('/' . preg_quote($multiply, '/') . '{8,}/', '[MULTI]', $cellText);
                $row_expected = preg_replace('/' . preg_quote($multiply, '/') . '{8,}/', '[MULTI]', $row['expected']);

                self::assertSame($row_expected, $row_cell);
            } else {
                self::assertSame($row['expected'], $cellText);
            }
        } else {
            self::assertSame($row['expected'], $cellText);
        }
    }

    public static function providerFormatTests(): array
    {
        $directory_path = 'tests/data/Shared/Locale/';

        $directory_scan = scandir($directory_path);
        $directory_scan = ($directory_scan === false) ? [] : $directory_scan;

        $directory_contents = array_diff($directory_scan, ['.', '..']);
        $test_files = [];
        foreach ($directory_contents as $item) {
            $item_path = $directory_path . $item;

            if (is_dir($item_path)) {
                // Ignore subdirectories
                continue;
            }

            if (!preg_match('/^FormatTest \-(.*)\.xlsx/i', pathinfo($item, PATHINFO_BASENAME))) {
                // Read only .xlsx files
                continue;
            }

            $test_files[] = $item_path;
        }

        $columns_sort = [
            'code',
            'type',
            'expected',
            'cell',
            'format',
            'comment',
            'error',
        ];

        $test_data = [];
        foreach ($test_files as $file_path) {
            // Load the spreadsheet file
            $spreadsheet = IOFactory::load($file_path);
            $filename = pathinfo($file_path, PATHINFO_BASENAME);

            $excelCalendar = Date::getExcelCalendar();

            // Get an iterator for all worksheets in the file
            $worksheetIterator = $spreadsheet->getWorksheetIterator();

            // Loop through each worksheet in the file
            foreach ($worksheetIterator as $worksheet) {
                $test_codes = [];

                $title = $worksheet->getTitle();
                if (!preg_match('/^[a-z0-9]+\-[a-z0-9]+$/iu', $title)) {
                    // Skip worksheet
                    continue;
                }

                if ($title == 'hi-in') {
                    // Locale "hi-in" has not (yet) acceptable format conditions...
                    // ** The date separator seems not consequent for all formats
                    continue;
                }

                // Get the highest row number and column letter
                $highestRow = $worksheet->getHighestRow();

                $columns = [
                    1 => 'code',
                    2 => 'type',
                    3 => 'cell',
                    4 => 'expected',
                    5 => 'cellformat',
                    6 => 'value_general',
                    7 => 'comment',
                ];

                // Loop through each row and get the first two columns of content
                for ($row_no = 3; $row_no <= $highestRow; ++$row_no) {
                    $row = ['error' => ''];
                    for ($col = 1; $col <= 7; ++$col) {
                        $cell = $worksheet->getCellByColumnAndRow($col, $row_no);

                        if (($col == 5) || ($col == 6)) {
                            // Skip columns 5 and 6
                            continue;
                        }

                        if ($col == 3) {
                            $style = $cell->getAppliedStyle();
                            $row['format'] = $style->getNumberFormat()->getFormatCode();
                        }
                        $row[$columns[$col]] = $cell->getValue();
                    }

                    if (($row['expected'] == '') && ($row['format'] == '')) {
                        // Skip empty row
                        continue;
                    }

                    if (!isset($test_codes[$row['code']])) {
                        $test_codes[$row['code']] = $row_no;
                    } else {
                        // Test is not unique!
                        $row['code'] = trim($row['code'] . ' (row: ' . $row_no . ')');
                        $row['error'] = 'Test code "' . $row['code'] . '" on row: ' . $row_no . ' is not unique.';
                    }

                    // Sort the row columns to match test function order
                    $row = array_replace(array_flip($columns_sort), $row);

                    // Store the testdata
                    $test_key = stripos($row['code'], 'row:') === false ? trim($row['code'] . ' (row: ' . $row_no . ')') : $row['code'];
                    $test_key .= (empty($row['comment']) ? '' : ':' . $row['comment']);
                    $test_data[$test_key] = [$filename, $title, $excelCalendar, $row_no, $row];
                }
            }
        }

        return $test_data;
    }
}
