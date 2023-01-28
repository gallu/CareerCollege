<?php  // class_1.php
//  http://dev2.m-fr.net/XXXXXX/class_1.php

class Hoge {
    public function func() {
        echo "func\n";
    }

public $s;
public $i;
}
//
$obj = new Hoge();
$obj->s = 'string';
$obj->i = 999;
var_dump($obj);
$obj->func();
