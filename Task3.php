<?php
mb_internal_encoding("UTF-8");
function Sum(int $number)
{
    $sum = 0;
    if ($number > 0) {
        $sum = ($number - 1) % 9 + 1;
    } else {
        $sum = (int)abs(($number - 1) % 9 + 1);
    }
    echo $sum . "\n";
}

Sum(-5550);
Sum(59);
Sum(-111999);
