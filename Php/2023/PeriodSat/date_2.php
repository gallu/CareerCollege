<?php  // date_2.php

$d = new DateTime();
var_dump($d);

$date_string = $d->format(DATE_ATOM);
var_dump($date_string);

$date_string = $d->format(DateTimeInterface::ATOM);
var_dump($date_string);

// 1行で
$date_string　= (new DateTime())->format(DATE_ATOM);
var_dump($date_string);

