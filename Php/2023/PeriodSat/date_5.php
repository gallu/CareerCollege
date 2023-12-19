<?php  // date_5.php

$t = strtotime("noon");
echo date(DATE_ATOM, $t) , "<br>";

$t = strtotime("tomorrow");
echo date(DATE_ATOM, $t) , "<br>";

$t = strtotime("next friday");
echo date(DATE_ATOM, $t) , "<br>";

$t = strtotime("+2 days");
echo date(DATE_ATOM, $t) , "<br>";
