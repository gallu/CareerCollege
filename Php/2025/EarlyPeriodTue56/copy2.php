<?php  // copy2.php

class Hoge {
    public int $num;
}

$obj = new Hoge();
$obj->num = 123;

$obj2 = $obj; // XXX
$obj2->num = 987;

var_dump($obj, $obj2);

//
$arr = [123];

$arr2 = $arr;
$arr2[] = 987;

var_dump($arr, $arr2);
