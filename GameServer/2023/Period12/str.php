<?php  // str.php

$str = "aBcDeFg";
var_dump($str);

$str_u = strtoupper($str);
var_dump($str_u);

$str_l = strtolower($str);
var_dump($str_l);

$str = "you want a new desk.";
$str_ucf = ucfirst($str);
var_dump($str_ucf);

$str_ucw = ucwords($str);
var_dump($str_ucw);
