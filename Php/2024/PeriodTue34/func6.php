<?php  // func6.php

function hoge($num1, $num2) {
	$i = $num1 + $num2;
	$j = $num1 - $num2;

	// return $i, $j;
	return [$i, $j];
}

$r = hoge(12, 34);
var_dump($r);
