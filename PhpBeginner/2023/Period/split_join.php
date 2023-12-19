<?php  // split_join.php

$str = "123_456_789";
var_dump($str);

//
$arr = explode("_", $str);
var_dump($arr);

//
$line = implode(",", $arr);
var_dump($line);
