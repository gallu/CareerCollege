<?php  // const.php
// https://dev2.m-fr.net/アカウント名/const.php

// 変数
$val = 123; // 代入
var_dump($val);
$val = "str"; // 再代入
var_dump($val);

// 定数
define("STR_VAL", "const_str");
var_dump( STR_VAL );
define("INT_VAL", 777);
var_dump( INT_VAL );

// 書き方その２
const STR_VAL_2 = "const2_str";
var_dump( STR_VAL_2 );
const INT_VAL_2 = 999;
var_dump( INT_VAL_2 );

