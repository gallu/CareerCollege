<?php  // imp_exp.php

$s = "1,2,3,4";
var_dump($s);

// split
$arr = explode(",", $s);
var_dump($arr);

// join
$s2 = implode("-", $arr);
var_dump($s2);

//
$s = "2d6";
$arr = explode("d", $s);
var_dump($arr);

