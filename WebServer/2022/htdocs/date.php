<?php   // date.php
declare(strict_types=1);

//
$t = time();
var_dump($t);
echo date('Y-m-d H:i:s', $t) , "<br>";
echo date('Y-m-d H:i:s') , "<br>";
echo date(DATE_ATOM) , "<br>";
echo date(DATE_COOKIE) , "<br>";
echo date(DATE_W3C) , "<br>";

//
echo "<br>";
$dobj = new \DateTime();
echo $dobj->format('Y-m-d H:i:s') , "<br>";
echo $dobj->format(DATE_ATOM) , "<br>";
echo $dobj->format(\DateTimeInterface::ATOM) , "<br>";
//
echo (new \DateTime())->format('Y-m-d H:i:s') , "<br>";

//
echo "<br>";
$dobj = new \DateTimeImmutable();
echo $dobj->format('Y-m-d H:i:s') , "<br>";
