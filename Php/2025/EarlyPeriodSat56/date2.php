<?php  // date2.php

$dobj = new DateTime();
$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>";
// 一行で
$ds = (new DateTime())->format(DATE_ATOM);
echo "{$ds} <br>";
// 8.4以降なら
$ds = new DateTime()->format(DATE_ATOM);
echo "{$ds} <br>";

//
$dobj = new DateTimeImmutable();
$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>";
