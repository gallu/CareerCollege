<?php  // Q5.php
/*
変数 i に 10を代入しなさい
変数 i を3乗した値をechoで出力しなさい。
 */
$i = 10;
$j = $i ** 3;
echo $j, "<br>\n";

/*
以下の関数を作成しなさい。
関数名: func
引数: 一つ($i)
処理: なし
戻り値: 引数の値
 */
function func($i) {
    return $i;
}
$r = func(123);
echo $r , "<br>\n";

/*
以下の関数を作成しなさい。
関数名: cubic
引数: 一つ
処理: 引数の値を3乗する
戻り値: 処理で計算した値（引数を3乗した値)
 */
function cubic($v) {
    $r = $v ** 3;
    return $r;
}
//
$r = cubic(10);
echo $r , "<br>\n";

$r = cubic(50);
echo $r , "<br>\n";
