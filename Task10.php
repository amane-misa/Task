<?php
mb_internal_encoding("UTF-8");
function Collatz(int $input)
{
    $arr = [];
    while ($input != 1) {
        array_push($arr, $input) . "\n";

        if ($input % 2 == 0) {
            $input /= 2;
        } else {
            $input = (($input * 3) + 1);
        }
    }
    print_r($arr) . "\n";
}

Collatz(12);
Collatz(52);
Collatz(33);
