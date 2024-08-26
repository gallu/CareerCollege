<?php  // date1.php

$t = time();
var_dump($t);
echo "<br>";

$ts = date(DATE_ATOM, $t);
var_dump($ts);
echo "<br>";
var_dump(DATE_ATOM);
echo "<br>";

// 現在時刻なら、第二引数は省略可能
$ts = date(DATE_ATOM);
var_dump($ts);
echo "<br>";


