<?php
mb_internal_encoding("UTF-8");
function Fibonacci(int $n)
{
    return round((((1 + sqrt(5)) / 2) ** $n - ((1 - sqrt(5)) / 2) ** $n) / sqrt(5));
}

function Lenght(int $num)
{
    for ($i = 0; $i < 1000; $i++) {
        //echo fibonacci($i)."\n";
        Fibonacci($i);
        $lenght = strlen((string)Fibonacci($i));

        if ($lenght >= $num) {
            $temp = $i + 1;
            echo "This number - $temp: " . Fibonacci($i) . "!\n";
            break;
        }
    }
}

Lenght(20);
