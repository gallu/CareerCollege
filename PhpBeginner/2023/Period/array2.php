<?php  // array2.php

$awk = [0, 1, 2, 3];
// var_dump($awk);
print_r($awk);

$awk2 = [999, 888, 777, 666, 555, 444];
print_r($awk2);

$awk_add = $awk + $awk2;
print_r($awk_add);

$awk_merge = array_merge($awk, $awk2);
print_r($awk_merge);

$awk_3dot = [...$awk, 123456, ...$awk2];
print_r($awk_3dot);

