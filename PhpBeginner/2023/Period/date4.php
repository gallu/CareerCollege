<?php  // date4.php

$t = strtotime("noon");
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$t = strtotime("yesterday noon");
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$t = strtotime("next monday");
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$t = strtotime("+1 days");
$ds = date(DATE_ATOM, $t);
var_dump($ds);
