<?php  // class_3.php
//  http://dev2.m-fr.net/XXXXXX/class_3.php

class Hoge {
    public function func() {
        echo __METHOD__ , "\n";
    }
    public function func2() {
        echo __METHOD__ , "\n";
    }
}
class Foo extends Hoge {
    public function func() {
        parent::func();
        echo __METHOD__ , "\n";
    }
}
//
$obj = new Hoge();
$obj->func();
$obj->func2();
//
$obj2 = new Foo();
$obj2->func();
$obj2->func2();

