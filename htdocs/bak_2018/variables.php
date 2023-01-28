<?php  // variables.php

// 可変変数
$hoge = '';
$s = 'hoge';
//
$$s = 'test';
var_dump($hoge);

// 可変関数
function even() {
    echo "偶数でした\n";
}
function odd() {
    echo "奇数でした\n";
}
//
$awk = ['even', 'odd'];
$s = $awk[ mt_rand(0, 1) ];
var_dump($s);
$s(); // 可変関数での呼び出し









