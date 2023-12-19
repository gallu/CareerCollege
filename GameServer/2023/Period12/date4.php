<?php  // date4.php

$t = strtotime("now");
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$t = strtotime("noon");
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$t = strtotime("yesterday");
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$t = strtotime("next monday");
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$t = strtotime("+3 days");
$ds = date(DATE_ATOM, $t);
var_dump($ds);
