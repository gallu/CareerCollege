<?php  // const.php

// 変数
$num = 123;
var_dump($num);

$num = 999;
var_dump($num);

// 定数
define("NUM", 321);
var_dump(NUM);

define("NUM", 777); // Warning: Constant NUM already defined
var_dump(NUM);

//
const NUMBR = 654;
var_dump(NUMBR);

const NUMBR = 987; // Warning: Constant NUMBR already defined
var_dump(NUMBR);
