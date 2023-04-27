<?php

namespace PhpOffice\PhpSpreadsheet\Locale;

use ReflectionClass;

abstract class CalendarData
{
    /**
     * @var object Singleton locale instances
     */
    protected static $instances = [];

    /**
     * @var array[] Names of the days of the week
     */
    protected $weekdayNames = [];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [];

    /**
     * Retrieve the object singleton instance.
     *
     * @return object The object instance
     */
    public static function getInstance()
    {
        $className = (new ReflectionClass(static::class))->getShortName();
        preg_match('/^(?:Calendar|lang_)(?<tag>.+)/i', $className, $match);
        $tag = $match['tag'];
        if (!isset(self::$instances[$tag])) {
            self::$instances[$tag] = new static();
        }

        return self::$instances[$tag];
    }

    /**
     * Retrieve date translation specification.
     *
     * @return array The date translations (weekdays, months)
     */
    public function getDateTranslations(): array
    {
        return [
            'weekdays' => $this->weekdayNames,
            'months' => $this->monthNames,
        ];
    }
}
