<?php  // func10.php
declare(strict_types=1);

function hoge(int $num, string $str, float $flo) {
	var_dump($num, $str, $flo);
}
//
hoge(123, "sss", 1.23);
echo "<br>\n";
// 名前付き引数
hoge(flo: 1.23, num: 123, str: "sss");
