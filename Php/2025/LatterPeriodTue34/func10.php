<?php  // func10.php

function hoge(int $num): int {
	return $num * 2;
}

$r = hoge(12);
var_dump($r);

// 可変関数
$f_name = "hoge";
$r = $f_name(34);
var_dump($r);

// 無名関数
$func = function(int $num): int {
	return $num * 3;
};
$r = $func(12);
var_dump($r);

// アロー関数
$fn = fn(int $num): int => $num * 4;
$r = $fn(34);
var_dump($r);
