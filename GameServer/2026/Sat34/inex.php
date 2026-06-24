<?php  // inex.php

$str = "abc:def:xyz";
$arr = explode(":", $str); // split
var_dump($arr);

$str2 = implode("@", $arr); // join
var_dump($str2);

$str = "2d6";
$arr = explode("d", $str);
var_dump($arr);

