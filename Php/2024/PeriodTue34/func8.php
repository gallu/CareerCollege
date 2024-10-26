<?php  // func8.php
declare(strict_types=1);

function add(int $num1, int $num2): int {
	$r = $num1 + $num2;
	return $r;
}

$r = add(12, 34);
var_dump($r);

$r = add("56", "78");
var_dump($r);
