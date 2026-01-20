<?php  // date_2.php

$dobj = new DateTime();
$ds = $dobj->format("Y-m-d H:i:s");
echo "{$ds} <br>\n";

$ds = $dobj->format(DateTimeInterface::ATOM);
echo "{$ds} <br>\n";

$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>\n";

// $ds = (new DateTime())->format(DATE_ATOM); // PHP8.3まで
$ds = new DateTime()->format(DATE_ATOM); // PHP8.4から
echo "{$ds} <br>\n";
