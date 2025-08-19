<?php  // Q1.php

/*
変数 score に、数値 3407.85 を代入しなさい。
代入した後、変数 score を、var_dumpで出力しなさい。
*/
$score = 3407.85;
var_dump($score);
echo "<br>";

/*
変数 name に、文字列 poor afternoon pretence を代入しなさい。
代入した後、変数 name を、var_dumpで出力しなさい。
*/
$name = "poor afternoon pretence";
var_dump($name);
echo "<br>";

/*
変数 weight に、値 62 を代入しなさい
「変数 weight が 29 と等しい なら「OK」を echo で出力する」if文を書きなさい
*/
$weight = 62;
if ($weight === 29) {
    echo "OK <br>";
}
echo "<br>";

/*
変数 country に、値 grape を代入しなさい
「変数 country が grape と等しくない なら「OK」を echo で出力する」if文を書きなさい
*/
$country = "grape";
if ($country !== "grape") {
    echo "OK <br>";
}
echo "<br>";
