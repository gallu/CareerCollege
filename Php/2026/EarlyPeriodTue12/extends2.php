<?php  // extends2.php

class Hoge {
    public function func1() {
        var_dump(__METHOD__);
    }
    public function func2() {
        var_dump(__METHOD__);
    }
}
class Foo extends Hoge {
    public function func2() {
        var_dump(__METHOD__);
    }
    public function func3() {
        var_dump(__METHOD__);
    }
}

$obj = new Foo();
$obj->func3();
$obj->func2();
$obj->func1();
