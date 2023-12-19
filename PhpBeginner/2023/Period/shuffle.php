<?php  // shuffle.php
// https://dev2.m-fr.net/アカウント名/shuffle.php

// $awk = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$awk = [];
$suit = ["♠", "♣", "♥", "♦" ];
for ($s = 0; $s < 4; ++$s) {
    for($i = 1; $i <= 13; ++$i) {
        $awk[] = "{$suit[$s]}{$i}";
    }
}
// var_dump($awk);

// shuffle($awk);

//　元ネタ https://ja.wikipedia.org/wiki/%E3%83%95%E3%82%A3%E3%83%83%E3%82%B7%E3%83%A3%E3%83%BC%E2%80%93%E3%82%A4%E3%82%A7%E3%83%BC%E3%83%84%E3%81%AE%E3%82%B7%E3%83%A3%E3%83%83%E3%83%95%E3%83%AB

// 要素数が n の配列 a をシャッフルする(添字は0からn-1):
// i を n - 1 から 1 まで減少させながら、以下を実行する
$t = microtime(true);
$n = count($awk);
for($i = $n - 1; $i >= 1 ; --$i) {
// var_dump($i);
    // j に 0 以上 i 以下のランダムな整数を代入する
    $j = random_int(0, $i);
// var_dump($j);

    // a[j] と a[i]を交換する
    $temp = $awk[$j];
    $awk[$j] = $awk[$i];
    $awk[$i] = $temp;
}
$te = microtime(true) - $t;
var_dump($te);
var_dump($awk);
