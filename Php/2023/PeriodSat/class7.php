<?php  // class7.php
declare(strict_types=1);
class Hoge {
    public function t() {
        var_dump(__METHOD__);
    }
    public function ttt() {
        var_dump(__METHOD__);
    }
}
class Foo extends Hoge {
    public function t() {
        var_dump(__METHOD__);
        parent::t();
    }
    public function fff() {
        var_dump(__METHOD__);
    }
}
//
$obj = new Foo();
$obj->t();
$obj->fff();
$obj->ttt();
