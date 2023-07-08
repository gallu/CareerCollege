<?php  // date.php

$t = time();
var_dump($t);

$date_string = date(DATE_ATOM, $t);
var_dump($date_string);

$date_string = date(DATE_ATOM);
var_dump($date_string);
