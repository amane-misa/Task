<?php
mb_internal_encoding("UTF-8");
function threeNumbersSum(array $arr, int $number)
{
    $count = count($arr);
    $res = [];

    for ($i = 0; $i < $count; $i++) {
        if ($arr[$i] + $arr[$i + 1] + $arr[$i + 2] == $number) {
            array_push($res, "$arr[$i] + {$arr[$i+1]} + {$arr[$i+2]} = $number");
        }
    }

    print_r($res);
    echo "\n";
}

threeNumbersSum([2, 7, 7, 1, 8, 2, 7, 8, 7], 16);
threeNumbersSum([4, 5, 6, 7, 3], 16);
threeNumbersSum([1, 1, 5, 5, 2, 2], 11);
threeNumbersSum([0, 1, 1, 2, 1, 1], 4);
