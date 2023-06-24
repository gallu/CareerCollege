<?php  // function.php

/*
function 関数名(引数) {
    処理
    処理
    return 戻り値; 返り値
}
*/

// 関数の宣言
function hoge($num) {
    $ret = $num * 2;
    return $ret;
}

// 関数の使用
$i = 10;
$r = hoge($i);
echo "r is {$r} <br> \n";

$r2 = hoge(123);
echo "r2 is {$r2} <br> \n";
