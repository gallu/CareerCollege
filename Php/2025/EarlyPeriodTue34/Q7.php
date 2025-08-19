<?php // Q7.php
// https://dev2.m-fr.net/アカウント名/Q7.php

/*
変数 $s に、「小文字のaから小文字のzまでのアルファベット26文字を代入しなさい。
変数 $s を、var_dump()で出力しなさい。
*/
$s = "abcdefghijklmnopqrstuvwxyz";
var_dump($s);

/*
文字の長さは strlen() 関数で得られます。
$s の文字の長さを、変数 $len に代入しなさい。
変数$len を、var_dump()で出力しなさい。
 */
$len = strlen($s);
var_dump($len);

/*
$sから1文字をランダムに抜き出して、$cに代入しなさい。
$c を、var_dump()で出力しなさい。
 */
$key = random_int(0, $len-1);
$c = $s[$key];
var_dump($c);

/*
関数を作成しなさい
    関数名: passOne
    引数: 文字列
    処理
        引数で与えられた文字列から、1文字をランダムに抜き出す
    戻り値: 
        ランダムに抜き出された文字列を返す
 */
function passOne($s) {
    // 文字列の長さを把握する
    $len = strlen($s);
    // ランダムにkeyを作成
    $key = random_int(0, $len-1);
    // 1文字ぬきだす
    $c = $s[$key];
    
    return $c;
}

echo "<br>";

$s = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
for ($i = 0; $i < 12; ++$i) {
    $c = passOne($s);
    echo $c;
}
echo "<br>";

