<?php  // date5.php

echo date(DATE_ATOM) , "<br>";

$t = strtotime("+14 days noon");
echo date(DATE_ATOM, $t) , "<br>";

$dobj = new DateTime("+14 days");
echo $dobj->format(DATE_ATOM) , "<br>";
