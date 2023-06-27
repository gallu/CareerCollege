<?php  // validate.php
// 日付
var_dump( checkdate(6, 24, 2023) );
var_dump( checkdate(6, 32, 2023) );

$ds = "August 15, 2023";
$t = strtotime($ds);
var_dump($ds, $t);

$ds = "August 33, 2023";
$t = strtotime($ds);
var_dump($ds, $t);

// 誕生日

-----

//　パスワード長
//　文字長(name）
//　年齢(数字？）
//　email、zip
