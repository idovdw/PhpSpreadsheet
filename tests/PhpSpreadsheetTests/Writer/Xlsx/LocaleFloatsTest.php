<?php

namespace PhpOffice\PhpSpreadsheetTests\Writer\Xlsx;

use Exception;
use PhpOffice\PhpSpreadsheet\Shared\Locale\CurrentLocale;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheetTests\Functional\AbstractFunctional;

class LocaleFloatsTest extends AbstractFunctional
{
    /**
     * @var bool
     */
    private $localeAdjusted;

    /** @var ?Spreadsheet */
    private $spreadsheet;

    /** @var ?Spreadsheet */
    private $reloadedSpreadsheet;

    protected function setUp(): void
    {
        // Preserve current locale
        CurrentLocale::preserveState();

        try {
            CurrentLocale::setLocale('fr_FR');
            $this->localeAdjusted = true;
        } catch (Exception $ex) {
            // Unable to set the locale
            $this->localeAdjusted = false;

            return;
        }
    }

    protected function tearDown(): void
    {
        // Restore current locale
        CurrentLocale::restoreState();

        if ($this->spreadsheet !== null) {
            $this->spreadsheet->disconnectWorksheets();
            $this->spreadsheet = null;
        }
        if ($this->reloadedSpreadsheet !== null) {
            $this->reloadedSpreadsheet->disconnectWorksheets();
            $this->reloadedSpreadsheet = null;
        }
    }

    public function testLocaleFloatsCorrectlyConvertedByWriter(): void
    {
        if (!$this->localeAdjusted) {
            self::markTestSkipped('Unable to set locale for testing.');
        }

        $this->spreadsheet = $spreadsheet = new Spreadsheet();
        $properties = $spreadsheet->getProperties();
        $properties->setCustomProperty('Version', 1.2);
        $spreadsheet->getActiveSheet()->setCellValue('A1', 1.1);

        $this->reloadedSpreadsheet = $reloadedSpreadsheet = $this->writeAndReload($spreadsheet, 'Xlsx');

        $result = $reloadedSpreadsheet->getActiveSheet()->getCell('A1')->getValue();
        self::assertEqualsWithDelta(1.1, $result, 1.0E-8);
        $prop = $reloadedSpreadsheet->getProperties()->getCustomPropertyValue('Version');
        self::assertEqualsWithDelta(1.2, $prop, 1.0E-8);

        // Not relevant to text %f (?)
        $actual = sprintf('%F', $result);
        self::assertStringContainsString('1.1', $actual);
    }
}
