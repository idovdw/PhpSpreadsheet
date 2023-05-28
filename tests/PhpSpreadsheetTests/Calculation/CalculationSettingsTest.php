<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation;

use PhpOffice\PhpSpreadsheet\Calculation\Calculation;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Shared\Locale\CurrentLocale;
use PhpOffice\PhpSpreadsheet\Shared\Locale\FormulaLocaleFactory;
use PHPUnit\Framework\TestCase;

class CalculationSettingsTest extends TestCase
{
    /**
     * @var string
     */
    private $compatibilityMode;

    protected function setUp(): void
    {
        // Preserve current locale
        CurrentLocale::preserveState();

        $this->compatibilityMode = Functions::getCompatibilityMode();
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    protected function tearDown(): void
    {
        Functions::setCompatibilityMode($this->compatibilityMode);

        // Restore current locale
        CurrentLocale::restoreState();
    }

    /**
     * @dataProvider providerCanLoadAllSupportedLocales
     *
     * @param string $locale
     */
    public function testCanLoadAllSupportedLocales($locale): void
    {
        $calculation = Calculation::getInstance();
        self::assertTrue($calculation->setLocale($locale));
    }

    public function testInvalidLocaleSetsEnUSLocale(): void
    {
        $calculation = Calculation::getInstance();
        $calculation->setLocale('xx');
        // Invalid locale no longer returns false
        $locale = $calculation->getLocale();
        self::assertTrue($locale == 'en_us');
    }

    public static function providerCanLoadAllSupportedLocales(): array
    {
        $aSupportedTags = FormulaLocaleFactory::getSupportedLocaleTags();

        $aProvidedTests = [];
        foreach ($aSupportedTags as $tag) {
            $aProvidedTests[] = [$tag];
        }

        return $aProvidedTests;
    }
}
