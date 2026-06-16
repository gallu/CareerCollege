<?php  // date2.php

$dobj = new DateTime();
$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>\n";

$ds = $dobj->format("Y年m月d日 H時i分s秒");
echo "{$ds} <br>\n";


$dobj = new DateTimeImmutable();
$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>\n";

$ds = $dobj->format("Y年m月d日 H時i分s秒");
echo "{$ds} <br>\n";
