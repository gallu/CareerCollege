<?php  // func14.php
declare(strict_types=1);

function hoge(int $num): int {
	echo "hello <br> \n";
	return $num * 2;
}
$r = hoge(10);
var_dump($r);
echo "<br> \n";

// 可変関数
$fn = "hoge";
$r = $fn(20);
var_dump($r);
echo "<br> \n";

// 無名関数(anonymous function)
$afn = function (int $num): int {
	echo "hello ano <br> \n";
	return $num * 4;
};
$r = $afn(30);
var_dump($r);
echo "<br> \n";






