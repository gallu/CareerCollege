<?php  // date4.php

$t = strtotime("noon");
echo date(DATE_ATOM, $t) , "<br>";

$t = strtotime("yesterday");
echo date(DATE_ATOM, $t) , "<br>";

$t = strtotime("+2 days");
echo date(DATE_ATOM, $t) , "<br>";

$t = strtotime("next saturday");
echo date(DATE_ATOM, $t) , "<br>";
