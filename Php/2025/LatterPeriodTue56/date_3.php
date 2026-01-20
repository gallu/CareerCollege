<?php  // date_3.php

$dobj = new DateTimeImmutable();
$ds = $dobj->format("Y-m-d H:i:s");
echo "{$ds} <br>\n";

$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>\n";

