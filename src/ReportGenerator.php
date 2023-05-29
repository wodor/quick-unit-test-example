<?php

namespace Artwielogorski\TestyMichal;

class ReportGenerator
{
    private \Closure $reader;

    public function setReadFunction(\Closure $f):void
    {
        $this->reader = $f;
    }

    public function sumWirelessItemsValue(): float
    {
        $sum = 0;
        while ($row = ($this->reader)()) {
            if($row[0] === 'Wireless') {
                $sum += (float) $row[2];
            }
        }
        return $sum;
    }
}