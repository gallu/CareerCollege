<?php  // date4.php

$t = strtotime('yesterday noon');
var_dump($t);
echo "<br>";
$ds2 = date(DATE_ATOM, $t);
echo "{$ds2} <br>\n";

$dobj = new DateTime('yesterday noon');
$ds2 = $dobj->format(DATE_ATOM);
echo "{$ds2} <br>\n";
