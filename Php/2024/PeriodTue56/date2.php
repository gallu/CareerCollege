<?php  // date2.php

$dobj = new DateTime();
var_dump($dobj);
echo "<br>";

$ts = $dobj->format(DATE_ATOM);
var_dump($ts);
echo "<br>";

$ts = (new DateTime())->format(DATE_ATOM);
var_dump($ts);
echo "<br>";

