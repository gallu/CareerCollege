<?php  // date3.php

$dobj = new DateTimeImmutable();
var_dump($dobj);
echo "<br>";

$ts = $dobj->format(DATE_ATOM);
var_dump($ts);
echo "<br>";
