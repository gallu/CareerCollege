<?php  // serialize.php
//
class hoge {
    public $num;
}
//
$obj = new hoge();
$obj->num = mt_rand(0, 99);
//
$awk = [1,2,3,4,5];
//
var_dump($obj, $awk);
//
$s1 = serialize($obj);
$s2 = serialize($awk);
var_dump($s1, $s2);
//
$obj2 = unserialize($s1);
$awk2 = unserialize($s2);
var_dump($obj2, $awk2);






