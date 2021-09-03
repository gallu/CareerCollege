<?php   // monte.php
require_once( __DIR__ . '/dice.php' );

// モンテカルロ法の実験
$awk = []; // 結果をためておく場所
for($i = 0; $i < 1000; ++$i) {
	$r = dice('3d6');
	$awk[$r] ??= 0; // keyがない時用の対策
	$awk[$r] ++;
}
ksort($awk);
var_dump($awk);

//　XXX 確率計算

