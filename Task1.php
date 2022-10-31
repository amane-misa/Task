<?php
mb_internal_encoding("UTF-8");
function Test(int $inputNumber)
{
    $value = $inputNumber > 30 ? "More than 30" : ($inputNumber > 20 ? "More than 20" : ($inputNumber > 10 ? "More than 10" : "Equal or less than 10"));
    //echo $inputNumber. " is ". $value ."<br>";
    echo $value . "\n";
}

Test(49.9);
Test(21);
Test(17.000001);
Test(10);
Test(-7766.8);
