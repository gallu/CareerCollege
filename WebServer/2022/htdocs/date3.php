<?php   // date3.php
declare(strict_types=1);

$ds = '07/Jun/2022:10:53:25 +0900';

//
$t = strtotime($ds);
echo date('Y-m-d H:i:s', $t) , "<br>";

//
$dobj = new \DateTime($ds);
echo $dobj->format('Y-m-d H:i:s') , "<br>";

//
$dobj = new \DateTimeImmutable($ds);
echo $dobj->format('Y-m-d H:i:s') , "<br>";

