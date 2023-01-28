<?php   // string4.php
declare(strict_types=1);

//
$s = "\t a bc \t\n";
var_dump($s);
//
$s1 = trim($s);
var_dump($s1);
$s_left = ltrim($s);
$s_right = rtrim($s);
var_dump($s_left, $s_right);
//
$s = ':hoge*';
$s4 = trim($s, ':*');
var_dump($s4);