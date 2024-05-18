<?php  // func4.php
declare(strict_types=1);

// 関数定義
function calTax(int $price): float {
    return floor($price * 0.1);
}
// 関数のcall
$r = calTax(98);
var_dump($r);
echo "<br>";

// $r = calTax("hoge");
// var_dump($r);
// echo "<br>";

// $r = calTax("108");
// var_dump($r);
// echo "<br>";
