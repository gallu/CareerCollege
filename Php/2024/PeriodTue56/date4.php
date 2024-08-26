<?php  // date4.php

$ds = '18/Jun/2024:18:07:49 +0900';

//
$t = strtotime($ds);
echo date(DATE_ATOM, $t) , "<br>";

//
$dobj = new DateTime($ds);
echo $dobj->format(DATE_ATOM) , "<br>";

