<?php  // class9.php

interface HogeInterface {
    public function hoge();
}

interface FooInterface {
    public function foo();
}

class Bar implements HogeInterface, FooInterface {
    public function hoge() {
        var_dump(__METHOD__);
    }
    public function foo() {
        var_dump(__METHOD__);
    }
}

//
$obj = new Bar();
$obj->hoge();
$obj->foo();
