<?php  // Q9.php

// 変数 str に "Hello" の文字列を代入して、echoで出力しなさい
$str = "Hello";
echo $str;

echo "<br>";
// 変数 i に1、変数 j に 2 を代入。「i と jを足した値」を5倍した数値を計算して出力しなさい
$i = 1;
$j = 2;
$k = ($i + $j) * 5;
echo $k;

echo "<br>";
// 変数 i に 10を代入します。変数iが5より大きかったら「大きい」と出力するコードをif文を使って書きなさい
$i = 10;
if ($i > 5) {
	echo "大きい";
}

echo "<br>";
// 変数 i に 5を代入します。変数iが5より大きかったら「大きい」、そうでなければ「小さい」
// と出力するコードをif文を使って書きなさい
$i = 5;
if ($i > 5) {
	echo "大きい";
} else {
	echo "小さい";
}

echo "<br>";
// 変数iに４を代入します。switch文を使ってiが
// 「1なら」 "1st"と出力 
// 「2なら」 "2nd"と出力 
// 「それ以外なら」 "any"と出力 
$i = 4;
switch($i) {
	case 1:
		echo "1st";
		break;
	case 2:
		echo "2nd";
		break;
	default:
		echo "any";
		break;
}

echo "<br>";
// "AB" を５回連続で出力するコードを、for文を使って書きなさい
for ($i = 0; $i < 5; ++$i) {
	echo "AB";
}

echo "<br>";
// "CD" を５回連続で出力するコードを、while文を使って書きなさい
$i = 0;
while($i < 5) {
    echo "CD";
    ++$i;
}

echo "<br>";
// 変数名 arr に、配列として"1st", "2nd", "3rd"の3つの文字列が入っているものを作成しなさい
// 配列の変数をvar_dump()で出力しなさい
$arr = ["1st", "2nd", "3rd"];
var_dump($arr);

echo "<br>";
// 上述で作成した配列の最後に "4th" の要素を追加しなさい。
// 配列の変数をvar_dump()で出力しなさい
$arr[] = "4th";
var_dump($arr);

echo "<br>";
// 上述で作った配列の要素の個数を、変数 cnt に代入しなさい
// 変数 cnt をechoで出力しなさい
$cnt = count($arr);
echo $cnt;

echo "<br>";
// 配列 arr の全ての「値」を、foreachを使って出力しなさい
foreach($arr as $v) {
	echo $v , "<br>";
}

echo "<br>";
// 以下の「key」「値」を持つハッシュ配列を作成し、var_dumpで出力しなさい
// (key) (値)
// 国語 80
// 数学 96
// 英語 75
$harr = [
	"国語" => 80,
	"数学" => 96,
	"英語" => 75,
];
var_dump($harr);

echo "<br>";
// 定数 TECH_C に "東京デザインテクノロジーセンター専門学校"の文字列を定義しなさい
// 定数 TECH_C を出力しなさい
// define("TECH_C", "東京デザインテクノロジーセンター専門学校");
const TECH_C = "東京デザインテクノロジーセンター専門学校";
echo TECH_C;
