<?php  // Q2.php
/*
変数 mp に、数値 3448.61 を代入しなさい。
代入した後、変数 mp を、var_dumpで出力しなさい。
*/
$mp = 3448.61;
var_dump($mp);

/*
変数 company に、文字列 order_ABC123DEF the with を代入しなさい。
代入した後、変数 company を、var_dumpで出力しなさい。
*/
$company = "order_ABC123DEF the with";
var_dump($company);

/*
変数 latitude に 43、変数 time に 78 を代入しなさい。
その後、latitude と time を引き算(減算)した計算結果を $balance に代入し、
  その後 var_dump($balance) で出力しなさい。
*/
$latitude = 43;
$time = 78;
$balance = $latitude - $time;
var_dump($balance);

/*
変数 combo に 2、変数 cost に 31 を代入しなさい。
その後、combo と cost をかけ算(乗算)した計算結果を $count に代入し、
  その後 var_dump($count) で出力しなさい。
*/
$combo = 2;
$cost = 31;
$count = $combo * $cost;
var_dump($count);

/*
以下のif-else文を書きなさい。
	変数 critical に、値 34 を代入しなさい
	「変数 critical が 89 以下 なら「ok」を echo、そうでなければ「ng」を echo で出力する」
	    if-else文を書きなさい
*/
$critical = 34;
if ($critical <= 89) {
	echo "ok";
} else {
	echo "ng";
}

/*
以下のif-else文を書きなさい。
	変数 apiKey に、値 yellow を代入しなさい
	「変数 apiKey が fish と等しい なら「ok」を echo、そうでなければ「ng」を 
	  echo で出力する」if-else文を書きなさい
*/
$apiKey = "yellow";
if ($apiKey === "fish") {
	echo "ok";
} else {
	echo "ng";
}

/*
以下のfor文を書きなさい。
	0 から 5 回繰り返しなさい
	各ループでドット（.）を1つずつ `echo` で出力しなさい
*/
for ($i = 0; $i < 5; ++$i) {
	echo ".";
}

/*
以下のfor文を書きなさい。
	1 から 7 まで繰り返しなさい
	変数 `distance` に 1から7までの合計を代入し、最後に `echo` しなさい
*/
$distance = 0;
for ($i = 1; $i <= 7; ++$i) {
	$distance = $distance + $i;
	// $distance += $i;
}
echo $distance;

/*
以下のwhile文を書きなさい。
	変数 `cost` に 1 を代入しなさい
	`while` 文を書きなさい。条件は「変数 `cost` が 784 以下」のあいだ繰り返すことにしなさい
	ループ内では以下の処理をしなさい
		`cost` の値を `echo` しなさい
		変数 `cost` を 3 倍した値を、改めて変数 `cost` に代入しなさい
*/
$cost = 1;
while($cost <= 784) {
	echo $cost;
	$cost = $cost * 3;
	// $cost *= 3;
}

/*
変数 data に、以下の2個の要素(文字列)を持つ配列を作成しなさい。
	apple
	grape
代入した後、変数 data を、var_dumpで出力しなさい。
*/
$data = [
	"apple",
	"grape",
];
var_dump($data);

/*
変数 `map` に、以下の 2 個の要素を持つ連想配列を作成しなさい。
	キー `groupName` に、文字列 'book' を設定しなさい
	キー `margin` に、数値 21259 を設定しなさい
代入した後、変数 `map` を `var_dump` で出力しなさい。
*/
$map = [
	"groupName" => "book",
	"margin" => 21259,
];
var_dump($map);

/*
変数 $records に、以下の4個の数値を持つ配列を作成し、foreach で全要素の合計を変数 $speed に代入し、
 最後に echo しなさい。
	191
	937
	184
	864
*/
$records = [
	191,
	937,
	184,
	864,
];
$speed = 0;
foreach ($records as $k => $v) {
	$speed = $speed + $v;
	// $speed += $v;
}
echo $speed;
