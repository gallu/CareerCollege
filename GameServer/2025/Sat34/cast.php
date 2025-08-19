<?php  // cast.php

$s = "123";
var_dump($s);

// キャスト
$i = (int)$s;
var_dump($i);
$f = (float)$s;
var_dump($f);

// キャスト(PHP固有)
$i = intval($s);
var_dump($i);
$f = floatval($s);
var_dump($f);
