<?php  // Q2.php
/*
変数 height に、数値 218 を代入しなさい。
代入した後、変数 height を、var_dumpで出力しなさい。
*/
$height = 218;
var_dump($height);

/*
変数 status に、文字列 little There dreamy を代入しなさい。
代入した後、変数 status を、var_dumpで出力しなさい。
*/
$status = "little There dreamy";
var_dump($status);

/*
以下のif文を書きなさい。
- 変数 width に、値 19 を代入しなさい
- 「変数 width が 14 以下 なら「OK」を、そうでなければ「NG」を echo で出力する」if文を書きなさい
*/
$width = 19;
if ($width <= 14) {
    echo "OK<br>";
} else {
    echo "NG<br>";
}

/*
0から始まって15回繰り返す処理を for 文で書きなさい。
for文の中の処理は「*を１つ出力する」とします。
*/
for ($i = 0; $i < 15; ++$i) {
    echo "*";
}
echo "<br>";

/*
変数 list に、以下の2個の要素(文字列)を持つ配列を作成しなさい。
music
peach
代入した後、変数 list を、var_dumpで出力しなさい。
*/
$list = ["music", "peach"];
var_dump($list);

/*
変数 data に、以下の2個の要素(文字列)を持つ配列を作成しなさい。
blue
dog
代入した後、変数 data を、var_dumpで出力しなさい。
*/
$data = ["blue", "dog"];
var_dump($data);


