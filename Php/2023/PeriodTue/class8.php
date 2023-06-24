<?php  // class8.php

trait HogeTrait {
    public function hoge() {
        var_dump(__METHOD__);
    }
}
trait FooTrait {
    public function foo() {
        var_dump(__METHOD__);
    }
}
//
class Bar {
    use HogeTrait;
    use FooTrait;
}
//
$obj = new Bar();
$obj->hoge();
$obj->foo();

