<?php // date6.php

$ds = "21/Jun/2025:16:49:44 +0900";

// 一日後
$t = strtotime($ds) + (24*60*60);
echo date("Y-m-d H:i:s", $t), "<br>";

//
$dobj = new DateTime($ds);
$dobj2 = $dobj->add(new DateInterval("P1D"));
echo $dobj->format("Y-m-d H:i:s"), "<br>";
echo spl_object_id($dobj), "/", spl_object_id($dobj2), "<br>";

//
$diobj = new DateTimeImmutable($ds);
$diobj2 = $diobj->add(new DateInterval("P1D"));
echo $diobj->format("Y-m-d H:i:s"), "<br>";
echo $diobj2->format("Y-m-d H:i:s"), "<br>";
echo spl_object_id($diobj), "/", spl_object_id($diobj2), "<br>";

