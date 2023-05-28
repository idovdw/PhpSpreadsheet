<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale;

abstract class CalendarData
{
    /**
     * @var CalendarData[] Singleton locale instances
     */
    protected static $aoInstances = [];

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        'full' => [],
        'short' => [],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        'full' => [],
        'short' => [],
    ];

    /**
     * Abstract constructor.
     */
    abstract public function __construct();

    /**
     * Retrieve the object singleton instance.
     *
     * @param bool $reinstate Reinitialize the object
     *
     * @return object The object instance
     */
    public static function getInstance($reinstate = false)
    {
        $strClassName = static::class;
        $strClassName = substr($strClassName, strrpos($strClassName, '\\') + 1);
        $tag = strtolower($strClassName);
        if ($reinstate || !isset(self::$aoInstances[$tag])) {
            self::$aoInstances[$tag] = new static();
        }

        return self::$aoInstances[$tag];
    }

    /**
     * Restore an instance.
     *
     * @param CalendarData $oCalendarData The object to reinstate
     */
    public static function restoreInstance($oCalendarData): void
    {
        $strClassName = get_class($oCalendarData);
        $strClassName = substr($strClassName, strrpos($strClassName, '\\') + 1);
        $tag = strtolower($strClassName);
        self::$aoInstances[$tag] = $oCalendarData;
    }

    /**
     * Retrieve date translation specification.
     *
     * @return array The date translations (weekdays, months)
     */
    public function getDateTranslations(): array
    {
        return [
            'weekdays' => $this->aWeekdayNames,
            'months' => $this->aMonthNames,
        ];
    }
}
