<?php  // func.php
/*
function 関数名(引数[, 引数]) {
    処理
    return 戻り値;
}
 */
function hoge($i) {
    $r = 2 ** $i;
    return $r;
}

$ret = hoge(3);
echo "{$ret} <br>";

$ret = hoge(5);
echo "{$ret} <br>";
