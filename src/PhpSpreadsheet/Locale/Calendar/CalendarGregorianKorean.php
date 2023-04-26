<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Calendar;

use PhpOffice\PhpSpreadsheet\Locale\CalendarData;


class CalendarGregorianKorean extends CalendarData
{
    /**
     * @var int Calendar type identifier
     */
    public $type = 0x14;

    /**
     * @var array[] Names of the days of the week
     */
    protected $weekdayNames = [
        // Full name
        "full" => [
            "\u{C6D4}\u{C694}\u{C77C}",
            "\u{D654}\u{C694}\u{C77C}",
            "\u{C218}\u{C694}\u{C77C}",
            "\u{BAA9}\u{C694}\u{C77C}",
            "\u{AE08}\u{C694}\u{C77C}",
            "\u{D1A0}\u{C694}\u{C77C}",
            "\u{C77C}\u{C694}\u{C77C}",
        ],
        // Short name
        "short" => [
            "\u{C6D4}",
            "\u{D654}",
            "\u{C218}",
            "\u{BAA9}",
            "\u{AE08}",
            "\u{D1A0}",
            "\u{C77C}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{C815}\u{C6D4}",
            "\u{C774}\u{C6D4}",
            "\u{C0BC}\u{C6D4}",
            "\u{C0AC}\u{C6D4}",
            "\u{C624}\u{C6D4}",
            "\u{C720}\u{C6D4}",
            "\u{CE60}\u{C6D4}",
            "\u{D314}\u{C6D4}",
            "\u{AD6C}\u{C6D4}",
            "\u{C2DC}\u{C6D4}",
            "\u{B3D9}\u{C9D3}\u{B2EC}",
            "\u{C123}\u{B2EC}",
        ],
        // Short name
        "short" => [
            "\u{C815}\u{C6D4}",
            "\u{C774}\u{C6D4}",
            "\u{C0BC}\u{C6D4}",
            "\u{C0AC}\u{C6D4}",
            "\u{C624}\u{C6D4}",
            "\u{C720}\u{C6D4}",
            "\u{CE60}\u{C6D4}",
            "\u{D314}\u{C6D4}",
            "\u{AD6C}\u{C6D4}",
            "\u{C2DC}\u{C6D4}",
            "\u{B3D9}\u{C9D3}\u{B2EC}",
            "\u{C123}\u{B2EC}",
        ],
    ];

}
