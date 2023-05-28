<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation;

use Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Calculation;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Shared\Locale\CurrentLocale;
use PHPUnit\Framework\TestCase;

class TranslationTest extends TestCase
{
    /**
     * @var string
     */
    private $compatibilityMode;

    /**
     * @var string
     */
    private $returnDate;

    protected function setUp(): void
    {
        $this->compatibilityMode = Functions::getCompatibilityMode();
        $this->returnDate = Functions::getReturnDateType();
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
        Functions::setReturnDateType(Functions::RETURNDATE_EXCEL);

        // Preserve current locale
        CurrentLocale::preserveState();
    }

    protected function tearDown(): void
    {
        Functions::setCompatibilityMode($this->compatibilityMode);
        Functions::setReturnDateType($this->returnDate);

        // Restore current locale
        CurrentLocale::restoreState();
    }

    /**
     * @dataProvider providerTranslations
     */
    public function testTranslation(string $expectedResult, string $locale, string $formula): void
    {
        try {
            CurrentLocale::setLocale($locale);
        } catch (Exception $ex) {
            self::markTestSkipped('Unable to set locale "' . $locale . '" for locale-specific test');
        }

        $translatedFormula = Calculation::getInstance()->_translateFormulaToLocale($formula);
        self::assertSame($expectedResult, $translatedFormula);

        $restoredFormula = Calculation::getInstance()->_translateFormulaToEnglish($translatedFormula);
        self::assertSame($formula, $restoredFormula);
    }

    public static function providerTranslations(): array
    {
        return require 'tests/data/Calculation/Translations.php';
    }
}
