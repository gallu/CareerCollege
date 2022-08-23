<?php   // date3.php

//
$ds = "Tuesday, 21-Jun-2022 18:24:25 JST";
echo "{$ds}<br><br>";

//
$t = strtotime($ds);
echo date(DATE_ATOM, $t);
echo "<br>";

//
$d_obj = new DateTime($ds);
echo $d_obj->format(DATE_ATOM);
echo "<br>";
