<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Calendar;

use PhpOffice\PhpSpreadsheet\Shared\Locale\CalendarData;

/**
 * Calendar class for calendar type "hebrew".
 *
 * Do not alter this file; it is generated content.
 */
class CalendarHebrew extends CalendarData
{
    /**
     * @var int Calendar type identifier
     */
    public $type = 0x08;

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        // Full names
        'full' => [
            'Yom Sheni',
            'Yom Shlishi',
            "Yom Revi'i",
            'Yom Chamishi',
            'Yom Shishi',
            'Shabat',
            'Yom Rishon',
        ],
        // Short names
        'short' => [
            'Yom Sheni',
            'Yom Shlishi',
            "Yom Revi'i",
            'Yom Chamishi',
            'Yom Shishi',
            'Shabat',
            'Yom Rishon',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full names
        'full' => [
            'Tishrei',
            'Cheshvan',
            'Kislev',
            'Tevet',
            'Shvat',
            'Adar',
            'AdarII',
            'Nisan',
            'Iyar',
            'Sivan',
            'Tamuz',
            'Av',
        ],
        // Short names
        'short' => [
            'Tishrei',
            'Cheshvan',
            'Kislev',
            'Tevet',
            'Shvat',
            'Adar',
            'AdarII',
            'Nisan',
            'Iyar',
            'Sivan',
            'Tamuz',
            'Av',
        ],
    ];

    /**
     * Constructor.
     */
    public function __construct()
    {
    }
}
