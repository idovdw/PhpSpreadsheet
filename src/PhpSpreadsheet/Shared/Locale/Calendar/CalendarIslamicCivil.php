<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Calendar;

use PhpOffice\PhpSpreadsheet\Shared\Locale\CalendarData;

/**
 * Calendar class for calendar type "islamic-civil".
 *
 * Do not alter this file; it is generated content.
 */
class CalendarIslamicCivil extends CalendarData
{
    /**
     * @var int Calendar type identifier
     */
    public $type = 0x17;

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        // Full name
        'full' => [
            'AlEthnien',
            'AthThulatha',
            'AlArbia\'a',
            'AlKhamis',
            'AlJumaa',
            'AsSabt',
            'AlAhad',
        ],
        // Short name
        'short' => [
            'AlEthnien',
            'AthThulatha',
            'AlArbia\'a',
            'AlKhamis',
            'AlJumaa',
            'AsSabt',
            'AlAhad',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Muharram',
            'Safar',
            'Rabi\' Awwal',
            'Rabi\' Thani',
            'Jamada El Oula',
            'Jamada El Thaniah',
            'Rajab',
            'Sha\'ban',
            'Ramadan',
            'Shawwal',
            'Thoul Ki\'dah',
            'Thoul Hijjah',
        ],
        // Short name
        'short' => [
            'Muharram',
            'Safar',
            'Rabi\' Awwal',
            'Rabi\' Thani',
            'Jamada El Oula',
            'Jamada El Thaniah',
            'Rajab',
            'Sha\'ban',
            'Ramadan',
            'Shawwal',
            'Thoul Ki\'dah',
            'Thoul Hijjah',
        ],
    ];

    /**
     * Constructor.
     */
    public function __construct()
    {
    }
}
