<?php
mb_internal_encoding("UTF-8");
function mondayCounter(string $startdate, string $enddate, int $day = 1)
{
    $counter = 0;

    while ($startdate <= $enddate) {
        if (date('w', $startdate) == $day && date('d', $startdate) == 1) {
            $counter++;
        }
        $startdate += 86400;
    }

    echo $counter . "\n";
}

mondayCounter(strtotime("17-10-2021"), strtotime("17-10-2022"));
