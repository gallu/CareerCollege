<?php  // array1.php

echo "<pre>";

$arr = [1, 2, 3];
print_r($arr);
var_dump($arr);

// 古い書き方なので今はあまり好まれない
$arr2 = array(10, 20, 30);
print_r($arr2);

// 値の型は混在してもいい
$arr3 = [1, "2nd", true];
print_r($arr3);
var_dump($arr3);
