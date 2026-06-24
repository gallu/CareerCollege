<?php  // hasharr1.php

echo "<pre>";

// hash配列、連想配列、文字列キー配列
$hash = [
	"HP" => 100,
	"MP" => 50,
];
var_dump($hash);
print_r($hash);

// 古い書き方
$hash2 = array(
	"STR" => 12,
	"DEX" => 10,
	"INT" => 8,
	"WIZ" => 7,
);
print_r($hash2);

