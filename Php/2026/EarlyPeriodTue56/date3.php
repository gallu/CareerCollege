<?php  // date3.php

$ds = '2026-05-19T17:38:10+09:00';
$ds = '19/May/2026:17:57:21 +0900';

$t = strtotime($ds);
var_dump($t);
echo "<br>";
$ds2 = date(DATE_ATOM, $t);
echo "{$ds2} <br>\n";

$dobj = new DateTime($ds);
$ds2 = $dobj->format(DATE_ATOM);
echo "{$ds2} <br>\n";

