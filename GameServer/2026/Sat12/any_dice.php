<?php  // any_dice.php

// 処理を共通化する
function _dice($max) {
	$r = random_int(1, $max);
	return $r;
}

function d6() {
	return _dice(6);
}

function d8() {
	return _dice(8);
}

$r = d6();
echo "{$r} <br>";

$r = d6() + d6();
echo "{$r} <br>";




