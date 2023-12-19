<?php  // date3.php

$dobj = new DateTime("2023-01-31T00:00:00+0900");
echo $dobj->format(DATE_ATOM), "<br>";
$dobj = new DateTime("Thu. Jun. 27th, 2019");
echo $dobj->format(DATE_ATOM), "<br>";
$dobj = new DateTime("Thu. 27th Jun 2019");
echo $dobj->format(DATE_ATOM), "<br>";
$dobj = new DateTime("14/Oct/2023:13:16:38 +0900");
echo $dobj->format(DATE_ATOM), "<br>";

//
$t = strtotime("Thu. Jun. 27th, 2019");
echo date(DATE_ATOM, $t) , "<br>";
