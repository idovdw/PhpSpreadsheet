<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Calendar;

use PhpOffice\PhpSpreadsheet\Locale\CalendarData;


class CalendarIslamicCivil extends CalendarData
{
    /**
     * @var int Calendar type identifier
     */
    public $type = 0x17;

    /**
     * @var array[] Names of the days of the week
     */
    protected $weekdayNames = [
        // Full name
        "full" => [
            "AlEthnien",
            "AthThulatha",
            "AlArbia'a",
            "AlKhamis",
            "AlJumaa",
            "AsSabt",
            "AlAhad",
        ],
        // Short name
        "short" => [
            "AlEthnien",
            "AthThulatha",
            "AlArbia'a",
            "AlKhamis",
            "AlJumaa",
            "AsSabt",
            "AlAhad",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "Muharram",
            "Safar",
            "Rabi' Awwal",
            "Rabi' Thani",
            "Jamada El Oula",
            "Jamada El Thaniah",
            "Rajab",
            "Sha'ban",
            "Ramadan",
            "Shawwal",
            "Thoul Ki'dah",
            "Thoul Hijjah",
        ],
        // Short name
        "short" => [
            "Muharram",
            "Safar",
            "Rabi' Awwal",
            "Rabi' Thani",
            "Jamada El Oula",
            "Jamada El Thaniah",
            "Rajab",
            "Sha'ban",
            "Ramadan",
            "Shawwal",
            "Thoul Ki'dah",
            "Thoul Hijjah",
        ],
    ];

}
