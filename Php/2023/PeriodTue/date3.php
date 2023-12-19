<?php  // date3.php
//
$dobj = new DateTime("2023-10-10 11:22:33+0900");
echo $dobj->format(DATE_ATOM), "<br>\n";
//
$t = strtotime("2023-10-10 11:22:33+0900");
echo date(DATE_ATOM, $t), "<br>\n";
//
$dobj = new DateTime("27th June 2019");
echo $dobj->format(DATE_ATOM), "<br>\n";

$dobj = new DateTime("Oct 10 17:55:55");
echo $dobj->format(DATE_ATOM), "<br>\n";

$dobj = new DateTime("10/Oct/2023:17:57:50 +0900");
echo $dobj->format(DATE_ATOM), "<br>\n";
