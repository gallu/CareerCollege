<?php  // serialize2.php
declare(strict_types=1);

class Hoge {
    public $fp;
}

$obj = new Hoge();
$obj->fp = fopen(__FILE__, 'r');
var_dump($obj);

$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);
