<?php  // date1.php

$t = time();
var_dump($t);
echo "<br>\n";

$ds = date(DATE_ATOM, $t);
echo "{$ds} <br>\n";

$ds = date(DATE_COOKIE, $t);
echo "{$ds} <br>\n";

$ds = date("Y年m月d日 H時i分s秒", $t);
echo "{$ds} <br>\n";


$ds = date(DATE_ATOM);
echo "{$ds} <br>\n";


