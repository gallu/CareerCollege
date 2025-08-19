<?php  // copy1.php

class Hoge {
    public int $num;
}

$obj = new Hoge();
$obj->num = 123;

$obj2 = new Hoge();
$obj2->num = 987;

var_dump($obj, $obj2);

