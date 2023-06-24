<?php  // dice.php

function dice($base_string) {
    // 入ってきた英字を「全部小文字」に変換しておく
    $base_string = strtolower($base_string);

    // 入ってきた文字を分解する
    $awk = explode("d", $base_string);

    // 分解したデータを当てはめる
    $times = (int) $awk[0];
    $diceType = (int) $awk[1];

    // times回、繰り返す
    $ret = 0;
    for($i = 0; $i < $times; ++$i) {
// echo "roll {$diceType} \n";
        // $ret = $ret + random_int(1, 6);
        $ret += random_int(1, $diceType);
    }

    // 結果を戻り値として返す
    return $ret;
}

/*
// 使い方
$r = dice("2D6");
var_dump($r); // 2～12の間の乱数が出てくる

$r = dice("2d6");
var_dump($r); // 2～12の間の乱数が出てくる

$r = dice("3d10");
var_dump($r); // 3～30の間の乱数が出てくる
*/
