<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Calendar;

use PhpOffice\PhpSpreadsheet\Locale\CalendarData;

class CalendarGregorianArabic1 extends CalendarData
{
    /**
     * @var int Calendar type identifier
     */
    public $type = 0x0A;

    /**
     * @var array[] Names of the days of the week
     */
    protected $weekdayNames = [
        // Full name
        'full' => [
            "\u{627}\u{644}\u{625}\u{62B}\u{646}\u{64A}\u{646}",
            "\u{627}\u{644}\u{62B}\u{644}\u{627}\u{62B}\u{627}\u{621}",
            "\u{627}\u{644}\u{623}\u{631}\u{628}\u{639}\u{627}\u{621}",
            "\u{627}\u{644}\u{62E}\u{645}\u{64A}\u{633}",
            "\u{627}\u{644}\u{62C}\u{645}\u{639}\u{629}",
            "\u{627}\u{644}\u{633}\u{628}\u{62A}",
            "\u{627}\u{644}\u{623}\u{62D}\u{62F}",
        ],
        // Short name
        'short' => [
            "\u{627}\u{644}\u{625}\u{62B}\u{646}\u{64A}\u{646}",
            "\u{627}\u{644}\u{62B}\u{644}\u{627}\u{62B}\u{627}\u{621}",
            "\u{627}\u{644}\u{623}\u{631}\u{628}\u{639}\u{627}\u{621}",
            "\u{627}\u{644}\u{62E}\u{645}\u{64A}\u{633}",
            "\u{627}\u{644}\u{62C}\u{645}\u{639}\u{629}",
            "\u{627}\u{644}\u{633}\u{628}\u{62A}",
            "\u{627}\u{644}\u{623}\u{62D}\u{62F}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{643}\u{627}\u{646}\u{648}\u{646}\u{a0}\u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{634}\u{628}\u{627}\u{637}",
            "\u{622}\u{630}\u{627}\u{631}",
            "\u{646}\u{64A}\u{633}\u{627}\u{646}",
            "\u{623}\u{64A}\u{627}\u{631}",
            "\u{62D}\u{632}\u{64A}\u{631}\u{627}\u{646}",
            "\u{62A}\u{645}\u{648}\u{632}",
            "\u{622}\u{628}",
            "\u{623}\u{64A}\u{644}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646}\u{a0}\u{627}\u{644}\u{623}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646}\u{a0}\u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{643}\u{627}\u{646}\u{648}\u{646}\u{a0}\u{627}\u{644}\u{623}\u{648}\u{644}",
        ],
        // Short name
        'short' => [
            "\u{643}\u{627}\u{646}\u{648}\u{646}\u{a0}\u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{634}\u{628}\u{627}\u{637}",
            "\u{622}\u{630}\u{627}\u{631}",
            "\u{646}\u{64A}\u{633}\u{627}\u{646}",
            "\u{623}\u{64A}\u{627}\u{631}",
            "\u{62D}\u{632}\u{64A}\u{631}\u{627}\u{646}",
            "\u{62A}\u{645}\u{648}\u{632}",
            "\u{622}\u{628}",
            "\u{623}\u{64A}\u{644}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646}\u{a0}\u{627}\u{644}\u{623}\u{648}\u{644}",
            "\u{62A}\u{634}\u{631}\u{64A}\u{646}\u{a0}\u{627}\u{644}\u{62B}\u{627}\u{646}\u{64A}",
            "\u{643}\u{627}\u{646}\u{648}\u{646}\u{a0}\u{627}\u{644}\u{623}\u{648}\u{644}",
        ],
    ];
}
