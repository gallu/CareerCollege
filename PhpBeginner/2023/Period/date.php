<?php  // date.php

$t = time();
var_dump($t);

$s = date(DATE_ATOM, $t);
var_dump($s);

$s = date(DATE_ATOM);
var_dump($s);
