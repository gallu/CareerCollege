<?php  // date1.php

$t = time();
var_dump($t);

$ds = date(DATE_ATOM, $t);
var_dump($ds);

$ds = date("Y年m月d日 H時i分s秒", $t);
var_dump($ds);

