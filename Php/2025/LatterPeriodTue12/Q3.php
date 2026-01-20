<?php  // Q3.php
/*
980を
・0.1で掛け算した値
・0.08で掛け算した値
をそれぞれ出力しなさい。
イメージは以下の通りです。

980円の商品の、消費税(10%)と軽減消費税(8%)をそれぞれ求めて出力しなさい。
*/
$price = 980;
$tax = 0.1;

echo $price * $tax , "<br>\n";
echo $price * 0.08  , "<br>\n";

/*
変数 awk に、以下の要素を全て含む配列を作成しなさい。

100
75
50
88

作った配列を、print_rで出力しなさい。
*/
$awk = [100, 75, 50, 88];
print_r($awk);

/*
以下の関数を作りなさい。

関数名: hoge
引数: 1つ（ 変数名: num )
処理:
  引数が「３の倍数」ならtrueを戻り値にする
  上述以外なら、falseを戻り値にする

作った関数hogeで、引数に6を入れた時と8を入れた時の戻り値をそれぞれ var_dump しなさい。
*/
function hoge($num) {
    if ($num%3 === 0) {
        return true;
    } else {
        return false;
    }
}

$r = hoge(6);
var_dump($r);

$r = hoge(8);
var_dump($r);

