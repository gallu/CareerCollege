<?php  // func4.php
// https://dev2.m-fr.net/アカウント名/func4.php

/*
DEXを作成しなさい。DEXは、「random_int(1, 6)」を３回足す(3d6)で求められる、とします。
また、DEXボーナスを作成しなさい。ボーナスは「DEX÷3(端数切捨て)」とします。
求められたDEXとDEXボーナスを出力しなさい。
*/
// DEXの決定
$dex = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
echo "DEX: {$dex} <br>\n";
// ボーナス値の取得
$dex_bonus = intval(floor($dex / 3));
echo "DEXボーナス: {$dex_bonus} <br>\n";

/*
「能力値を1つ作成する」関数を作成しなさい。
関数名は「makeParameters」。引数はなし、戻り値は「random_int(1, 6)を３回足す(3d6)、の値」とします。

「能力値のボーナスを計算する」関数を作成しなさい。
関数名は「calBonus」。引数は「対象の能力値」、戻り値は「引数÷3(端数切捨て)」とします。

上述の関数を使って「DEXの値」「DEXボーナスの値」を取得し、echoで出力しなさい。
*/
function makeParameters() {
    $r = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
    return $r;
}
function calBonus($param) {
    $r = intval(floor($param / 3));
    return $r;
}

$dex = makeParameters();
echo "DEX: {$dex} <br>\n";

$dex_bonus = calBonus($dex);
echo "DEXボーナス: {$dex_bonus} <br>\n";

