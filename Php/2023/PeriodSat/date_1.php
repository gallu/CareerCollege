<?php  // date_1.php

$t = time();
var_dump($t);

$date_string = date(DATE_ATOM, $t);
var_dump($date_string);
var_dump(DATE_ATOM);

$date_string = date("Y-m-d H:i:s", $t);
var_dump($date_string);

$date_string = date("Y-m-d H:i:s");
var_dump($date_string);
