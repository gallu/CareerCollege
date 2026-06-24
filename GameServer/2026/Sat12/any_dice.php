<?php  // any_dice.php

// XXX 来週、処理を共通化する

function d6() {
	$r = random_int(1, 6);
	return $r;
}

function d8() {
	$r = random_int(1, 8);
	return $r;
}

$r = d6();
echo "{$r} <br>";

$r = d6() + d6();
echo "{$r} <br>";




