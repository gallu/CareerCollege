<?php  // date5.php

$t = strtotime("+1 day");
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$t = time();
$t = $t + (60 * 60 * 24);
$ds = date(DATE_ATOM, $t);
var_dump($ds);

/* ------ */
$t = strtotime("2023-01-31 +1 month"); // XXX やっちゃダメ！！
$ds = date(DATE_ATOM, $t);
var_dump($ds);

//
$t = time();
$t = $t + (60 * 60 * 24 * 30);
$ds = date(DATE_ATOM, $t);
var_dump($ds);


