<?php   // func4.php
declare(strict_types=1);

function 関数名(int $num, string $str) {
    var_dump($num, $str);
}
//
関数名(1, "string");
//関数名(3.14, true);
//関数名("abc", "string");

function 関数名2(int $num) : int {
    $k = $num * 10;
    return $k;
}
$r = 関数名2(10);
var_dump($r);
