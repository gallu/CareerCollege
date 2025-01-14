<?php  // date3.php

$dobj = new DateTimeImmutable();
$ds = $dobj->format(DATE_ATOM);
var_dump($ds);

$ds = $dobj->format("Y年m月d日 H時i分s秒");
var_dump($ds);

