<?php  // dice_monte.php
// モンテカルロ
require_once __DIR__ . "/dice.php";

const ROLL_TIMES = 100000;

$sum = [];
for ($i = 0; $i < ROLL_TIMES; ++$i) {
	$d = dice("3d6");
	$sum[$d] ??= 0; // おまじない
	$sum[$d] ++;
}
// var_dump($sum);

// 見やすいようにsortする
ksort($sum);

foreach ($sum as $k => $v) {
	$p = $v / ROLL_TIMES * 100;
	echo "{$k}: {$p}% <br>";
}
