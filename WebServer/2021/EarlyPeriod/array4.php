<?php   // array4.php
declare(strict_types=1);

// 配列の要素を処理する
$awk = [1, 2, 3];
$awk2 = array_map(function ($v) {
        var_dump($v);
        return $v * $v;
    }, $awk);
var_dump($awk2);
