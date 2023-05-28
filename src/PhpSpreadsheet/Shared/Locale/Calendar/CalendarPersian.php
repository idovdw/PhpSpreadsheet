<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Locale\Calendar;

use PhpOffice\PhpSpreadsheet\Shared\Locale\CalendarData;

/**
 * Calendar class for calendar type "persian".
 *
 * Do not alter this file; it is generated content.
 */
class CalendarPersian extends CalendarData
{
    /**
     * @var int Calendar type identifier
     */
    public $type = 0x16;

    /**
     * @var array[] Names of the days of the week
     */
    protected $aWeekdayNames = [
        // Full name
        'full' => [
            'Doshanbeh',
            'Seshanbeh',
            "Chah\u{101}rshanbeh",
            'Panjshanbeh',
            'Jom\'eh',
            'shanbeh',
            'Yekshanbeh',
        ],
        // Short name
        'short' => [
            'Doshanbeh',
            'Seshanbeh',
            "Chah\u{101}rshanbeh",
            'Panjshanbeh',
            'Jom\'eh',
            'shanbeh',
            'Yekshanbeh',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $aMonthNames = [
        // Full name
        'full' => [
            'Farvardin',
            'Ordibehesht',
            "Khord\u{101}d",
            'Tir',
            "Mord\u{101}d",
            'Shahrivar',
            'Mehr',
            "\u{1FB9}ban",
            "\u{1FB9}zar",
            'Day',
            "Bahm\u{101}n",
            'Esfand',
        ],
        // Short name
        'short' => [
            'Farvardin',
            'Ordibehesht',
            "Khord\u{101}d",
            'Tir',
            "Mord\u{101}d",
            'Shahrivar',
            'Mehr',
            "\u{1FB9}ban",
            "\u{1FB9}zar",
            'Day',
            "Bahm\u{101}n",
            'Esfand',
        ],
    ];

    /**
     * Constructor.
     */
    public function __construct()
    {
    }
}