<?php  // serialize.php
declare(strict_types=1);

$obj = new StdClass();
$obj->hoge = 1;
$obj->foo = 2;
$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);

var_dump($obj);
