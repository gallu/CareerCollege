<?php  // function2.php

// 足し算をする関数
function add($i, $j) {
    // 足し算をする
    $r = $i + $j;

    // 結果を返す
    return $r;
}

// 関数を使う
$ret = add(123, 456);
var_dump($ret);
