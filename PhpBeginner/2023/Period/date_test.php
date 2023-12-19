<?php // date_test.php

// 問１
//　「現在時刻」をvar_dumpかechoで出力しなさい
$s = date(DATE_ATOM);
var_dump($s);

// 問2
//　「現在時刻の３時間後」をvar_dumpかechoで出力しなさい
$t = time();
$t = $t + (60 * 60 * 3);
$s = date(DATE_ATOM, $t);
var_dump($s);

$t = strtotime("+3 hour");
$s = date(DATE_ATOM, $t);
var_dump($s);

