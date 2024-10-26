<?php  // func16.php
declare(strict_types=1);

$fn = function(int $num): int {
	return $num *3;
};
$r = $fn(12);
var_dump($r);

// アロー関数
$afn = fn(int $num): int => $num * 3;
$r = $afn(12);
var_dump($r);

