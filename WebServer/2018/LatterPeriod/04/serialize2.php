<?php  // serialize2.php

class hoge {
    public $fp;
    public $num;
}
//
$obj = new hoge();
$obj->num = mt_rand(0, 99);
$obj->fp = fopen(__FILE__, 'r');
var_dump($obj);
$s1 = serialize($obj);
var_dump($s1);
$obj2 = unserialize($s1);
var_dump($obj2);

