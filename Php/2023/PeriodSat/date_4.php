<?php  // date_4.php

$dobj = new DateTime("2023-01-31T00:00:00+0900");
echo $dobj->format(DATE_ATOM), "<br>";

$dobj = new DateTime("2023/01/31 00:00:00");
echo $dobj->format(DATE_ATOM), "<br>";

$dobj = new DateTime("Thursday, June 27th, 2019");
echo $dobj->format(DATE_ATOM), "<br>";
$dobj = new DateTime("Thursday, 27th June 2019");
echo $dobj->format(DATE_ATOM), "<br>";

$dobj = new DateTime("14/Oct/2023:16:25:20 +0900");
echo $dobj->format(DATE_ATOM), "<br>";
$dobj = new DateTime("Oct 14 16:25:20");
echo $dobj->format(DATE_ATOM), "<br>";

//
$t = strtotime("14/Oct/2023:16:25:20 +0900");
echo date(DATE_ATOM, $t) , "<br>";


