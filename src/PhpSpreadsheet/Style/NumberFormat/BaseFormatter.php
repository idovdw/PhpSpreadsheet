<?php

namespace PhpOffice\PhpSpreadsheet\Style\NumberFormat;


abstract class BaseFormatter
{
    /**
     * Content inbetween double quotes
     */
    protected const PREG_CONDITION_QUOTED = '"(?:[^"]*)"';

    /**
     * Mask the content inbetween double quotes
     */
    protected const PREG_CONDITION_NONQUOTED = self::PREG_CONDITION_QUOTED.'(*SKIP)(*F)|';
}
