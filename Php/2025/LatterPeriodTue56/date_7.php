<?php  // date_7.php

$t = strtotime("+2 days");
echo date(DATE_ATOM, $t);
echo "<br>\n";

$dobj = new DateTime("+2 days");
echo $dobj->format(DATE_ATOM);
echo "<br>\n";

$dobj = new DateTimeImmutable("+2 days");
echo $dobj->format(DATE_ATOM);
echo "<br>\n";
