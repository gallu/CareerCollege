<?php   // wiz.php

//var_dump( __DIR__ );
require_once( __DIR__ . '/dice.php' );

// 通常 5～9 (1d5+4)
$bonus = dice('1d5') + 4;

// loop
// 1d20で20が出たら
/*
while(true) {
	$i = dice('1d20');
	var_dump( $i );
	if (20 !== $i) {
		break;
	}
	// + 1d5
	$bonus = $bonus + dice('1d5');
}
*/
while(20 === dice('1d20')) {
	// デバッグ用
	echo '+';
	// + 1d5
	$bonus = $bonus + dice('1d5');
}

//
echo 'BONUS: ' , $bonus;




