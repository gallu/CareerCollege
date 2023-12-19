<?php  // const.php
//  https://dev2.m-fr.net/アカウント名/const.php

// 変数
$s = "str"; // 代入
echo "{$s} <br>";
$s = "hoge"; //　再代入
echo "{$s} <br>";

//　定数
define("STR", "str");
var_dump(STR);
echo "<br>";

define("NUM", 1234);
var_dump(NUM);
echo "<br>";

const STR2 = "string";
var_dump(STR2);
echo "<br>";

