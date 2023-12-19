<?php  // date5.php

$t = strtotime("+1 days");
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$t = time();
$t = $t + 60 * 60 * 24; // 1日の秒数
$ds = date(DATE_ATOM, $t);
var_dump($ds);

/* ------------ */
$t = strtotime("+1 month"); // XXX 書いちゃだめ！！
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$t = strtotime("2023-01-31 +1 month");
$ds = date("Y-m", $t);
var_dump($ds);

//
$t = time();
$t = $t + 60 * 60 * 24　* 30; // 一か月の秒数……って、何秒？（一か月を３０日とみなす）
$ds = date(DATE_ATOM, $t);
var_dump($ds);
