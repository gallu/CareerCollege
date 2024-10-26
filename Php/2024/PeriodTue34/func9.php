<?php  // func9.php
declare(strict_types=1);

// union型
function add(float|int $num1, float|int $num2): float|int {
	$r = $num1 + $num2;
	return $r;
}

$r = add(3.14, 1.4142);
var_dump($r);

$r = add(12, 34);
var_dump($r);

