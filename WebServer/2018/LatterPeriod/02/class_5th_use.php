<?php // class_5th_use.php

require_once('./class_5th.php');
//
use name\Log;

$obj = new Log();
$obj->print();
var_dump($obj);

$obj2 = new \name\Log();
var_dump($obj2);
