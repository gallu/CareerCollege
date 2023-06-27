<?php  // validation.php

var_dump( checkdate(6, 27, 2023) );
var_dump( checkdate(6, 32, 2023) );
var_dump( checkdate(13, 27, 2023) );
var_dump( checkdate(1, 1, 0000) );

$s = "27/Jun/2023:18:16:57 +0900";
$t = strtotime($s);
var_dump($t);
$s = "32/Jun/2023:18:16:57 +0900";
$t = strtotime($s);
var_dump($t);

//
$s = "あいう";
var_dump( strlen($s) ); // VARBINARY
var_dump( mb_strlen($s) ); // VARCHAR
var_dump( mb_strwidth($s) ); // デザイン起因

// 数字
var_dump( is_numeric(10) );
var_dump( is_numeric("123") );
var_dump( is_numeric("abc") );
var_dump( is_numeric("0123") );
var_dump( is_numeric("0x0a") );
var_dump( is_numeric("2e3") );
var_dump(filter_var(123, FILTER_VALIDATE_INT));
var_dump(filter_var("123", FILTER_VALIDATE_INT));
var_dump(filter_var("2e3", FILTER_VALIDATE_INT));
var_dump(filter_var("abc", FILTER_VALIDATE_INT));

// 住所(と半角全角)
// 郵便番号
// email
