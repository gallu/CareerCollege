<?php  // func7.php

function add($num1, $num2) {
	$r = $num1 + $num2;
	return $r;
}

function add2(int $num1, int $num2): int {
	$r = $num1 + $num2;
	return $r;
}

$r = add2(12, 34);
var_dump($r);

// $r = add2("1a2", "2b4");
// var_dump($r);

// $r = add2("sss", "ddd");
// var_dump($r);
