<?php  // func2.php
/*
function 関数名(引数[, 引数, 引数, 引数]) {
    処理
    処理
    処理

    return 戻り値
}
 */

// 関数の定義
function foo() {
    return 456;
}
// 関数のcall
$r = foo(); // 戻り値(返り血じゃない返り値)を取得
var_dump($r);
echo "<br>";

// 関数の定義
function add($i, $j) {
    $k = $i + $j;
    return $k;
}
$r = add(12, 34);
var_dump($r);
echo "<br>";

$r = add(987, 123);
var_dump($r);
echo "<br>";
