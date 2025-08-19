<?php  // func1.php
/*
function 関数名(引数, ...) {
    処理
    処理

    return 戻り値;
}
*/

// 関数を定義する(関数を切る)
function hoge($i, $j) {
    $num = $i * $j;
    return $num;
}
// 関数を使う
$r = hoge(10, 15);
var_dump($r);
