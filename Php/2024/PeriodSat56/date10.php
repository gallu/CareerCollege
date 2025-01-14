<?php  // date10.php

$t = time();
$ds = date(DATE_ATOM, $t);
var_dump($ds);

$ds = date(DATE_ATOM, time());
var_dump($ds);

$ds = date(DATE_ATOM);
var_dump($ds);

//
$ds = (new DateTime())->format(DATE_ATOM);
var_dump($ds);
