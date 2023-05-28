<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Calendar;

use PhpOffice\PhpSpreadsheet\Shared\Locale\CalendarData;

/**
 * Calendar class for calendar type "indian".
 *
 * Do not alter this file; it is generated content.
 */
class CalendarIndian extends CalendarData
{
    /**
     * @var int Calendar type identifier
     */
    public $type = 0x10;

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        // Full name
        'full' => [
            'Somavara',
            'Mangalvara',
            'Budhavara',
            'Guruvara',
            'Sukravara',
            'Sanivara',
            'Ravivara',
        ],
        // Short name
        'short' => [
            'Som',
            'Mangal',
            'Budh',
            'Guru',
            'Sukra',
            'Sani',
            'Ravi',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Chaitra',
            'Vaisakha',
            'Jyaistha',
            'Asadha',
            'Sravana',
            'Bhadra',
            'Asvina',
            'Karthika',
            'Agrahayana',
            'Pausa',
            'Magha',
            'Phalguna',
        ],
        // Short name
        'short' => [
            'Chaitra',
            'Vaisakha',
            'Jyaistha',
            'Asadha',
            'Sravana',
            'Bhadra',
            'Asvina',
            'Karthika',
            'Agrahayana',
            'Pausa',
            'Magha',
            'Phalguna',
        ],
    ];

    /**
     * Constructor.
     */
    public function __construct()
    {
    }
}
