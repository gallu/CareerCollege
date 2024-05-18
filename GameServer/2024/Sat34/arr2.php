<?php  // arr2.php

$arr = [0, "1", 2.34, 3, true];
var_dump($arr);

var_dump($arr[0]);

$arr[0] = 123;
var_dump($arr[0]);

$arr[] = "add";
var_dump($arr);

unset($arr[4]);
var_dump($arr);

$cnt = count($arr);
var_dump($cnt);

echo "<br>";

foreach ($arr as $k => $v) {
    echo "{$k} => ";
    var_dump($v);
    echo "<br>";
}





