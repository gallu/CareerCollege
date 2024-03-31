<?php  declare(strict_types=1);  // e02.php

$dobj = new DateTime("+6 hour");
var_dump($dobj->format(DATE_ATOM));

$dobj = new DateTime();
$dobj->modify("+6 hour");
var_dump($dobj->format(DATE_ATOM));

$dobj = new DateTime();
$dobj->add(new DateInterval("PT6H"));
var_dump($dobj->format(DATE_ATOM));

$t = time();
$t += 60 * 60 * 6;
var_dump( date(DATE_ATOM, $t) );

$t = strtotime("+6 hour");
var_dump( date(DATE_ATOM, $t) );
