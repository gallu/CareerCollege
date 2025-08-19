<?php  // func1.php
/*
// 関数の定義
function 関数名($引数, ...) {
    処理
    処理
    処理

    return 戻り値;
}

// 関数の使用
$変数 = 関数名(引数, ....);
*/

// 関数の定義
function hoge($i) {
    $r = $i * $i * 3.14;
    return $r;
}

// 関数の使用
$ret = hoge(12);
var_dump($ret);
