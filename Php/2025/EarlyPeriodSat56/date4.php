<?php  // date4.php

//
$t = strtotime("+7 days");
echo date(DATE_ATOM, $t), "<br>";
//
$dobj = new DateTime("+7 days");
echo $dobj->format(DATE_ATOM), "<br>";

