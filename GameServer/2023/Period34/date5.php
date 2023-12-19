<?php  // date5.php

$dobj = new DateTime();
echo $dobj->format(DATE_ATOM), "<br>";
$dobj2 = $dobj->add(new DateInterval("P1D"));
echo $dobj->format(DATE_ATOM), "<br><br>\n";
var_dump($dobj, $dobj2);

$dobj = new DateTimeImmutable();
echo $dobj->format(DATE_ATOM), "<br>";
$dobj2 = $dobj->add(new DateInterval("P1D"));
echo $dobj->format(DATE_ATOM), "<br><br>\n";
var_dump($dobj, $dobj2);
