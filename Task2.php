<?php
mb_internal_encoding("UTF-8");
function birthdayTimer(string $date)
{
    $today = date("d-m-Y H:i:s");
    $diff_days = $date - $today;
    $days = (int)($diff_days / 86400) - 19284;

    echo $days . "\n";
}

birthdayTimer(strtotime("30.10.2022"));
birthdayTimer(strtotime("22-04-2023"));
birthdayTimer(strtotime("01.01.2023"));
