<?php
 mb_internal_encoding("UTF-8");
 function deleteElement(array $arr, int $position)
 {
     echo var_dump($arr) . "\n";

     if (array_key_exists($position, $arr)) {
         unset($arr[$position]);
         array_values($arr);
     }

     foreach ($arr as $key => $value) {
         $array[] = $value;
     }
     echo var_dump($array) . "\n";
 }
 deleteElement([1, 2, 3, 4, 5], 3);
 deleteElement([375, 29, 127, 26, 74], 0);
 deleteElement([0, 1, 0, 0, 1], 4);
