<?php   // string.php
// https://dev2.m-fr.net/アカウント名/string.php

//
$i = 123;
//
$s1 = "i is {$i}\n";
var_dump($s1);
//
$s2 = 'i is {$i}\n';
var_dump($s2);

//
$string_1 = "hoge";
$string_2 = "foo";
//
$str = $string_1 . $string_2;
var_dump($str);
//
//$str = $string_1 + $string_2;
//var_dump($str);
//
$str = "{$string_1}{$string_2}";
var_dump($str);











