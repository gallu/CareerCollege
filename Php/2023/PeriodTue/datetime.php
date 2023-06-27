<?php  // datetime.php

$dobj = new DateTime();
var_dump($dobj);

$date_string = $dobj->format(DATE_ATOM);
var_dump($date_string);

$date_string = (new DateTime())->format(DATE_ATOM);
var_dump($date_string);
