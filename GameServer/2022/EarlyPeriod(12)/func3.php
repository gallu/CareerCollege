<?php  // func3.php

//
function hoge($num) {
    $戻り値 = $num * 999;
    return $戻り値;
}
//
$r = hoge(10);
var_dump($r);
echo "<br>";

$r = hoge(123);
var_dump($r);
echo "<br>";
