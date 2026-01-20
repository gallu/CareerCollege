<?php  // Q6.php
/*
変数 country に、文字列 little it Our を代入しなさい。
代入した後、変数 country を、var_dumpで出力しなさい。
*/
$country = "little it Our";
var_dump($country);

/*
以下のif文を書きなさい。
変数 height に、値 39 を代入しなさい
「変数 height が 21 以上 なら「OK」を, そうでなければ「NG」を, echo で出力する」if文を書きなさい
*/
$height = 39;
if ($height >= 21) {
    echo "OK";
} else {
    echo "NG";
}

/*
「0から8までを1刻みで出力する」コードを、for文を使って書きなさい。
*/
for ($i = 0 $i < 9; ++$i) {
    echo "{$i},";
}

/*
変数 words に、以下の2個の要素(文字列)を持つ配列を作成しなさい。
blue
grape
代入した後、変数 words を、var_dumpで出力しなさい。
*/
$words = ["blue", "grape"];
var_dump($words);
