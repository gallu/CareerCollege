<?php   // time.php

$t = time();
var_dump($t);

$date_string = date('Y-m-d H:i:s');
var_dump($date_string);

$date_obj = new DateTime();
var_dump($date_obj->format('Y-m-d H:i:s'));

var_dump(  (new DateTime())->format('Y-m-d H:i:s')  );
