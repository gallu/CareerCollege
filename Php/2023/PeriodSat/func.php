<?php  // func.php

function hoge($num, $val) {
    $ret = $num * $val * 2;
    return $ret;
}

$i = hoge(10, 20);
var_dump($i);

$j = hoge(111, 222);
var_dump($j);
