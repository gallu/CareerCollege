<?php   // wiz.php

//var_dump( __DIR__ );
require_once( __DIR__ . '/dice.php');

// 基本は 1d5+4
$bonus = dice('1d5') + 4;

// loop: 1d20で20が出たら
while(dice('1d20') === 20) {
	// デバッグ用
	echo '+';
	// +1d5
	$bonus += dice('1d5');
}

//
echo "BONUS: {$bonus} <br>\n";
