<?php  // class8.php
declare(strict_types=1);

trait HogeTrait {
    public function ttt() {
        var_dump(__METHOD__);;
    }
}
trait FooTrait {
    public function fff() {
        var_dump(__METHOD__);;
    }
}

class Bar {
    use HogeTrait;
    use FooTrait;

    public function t() {
        var_dump(__METHOD__);;
    }
}
//
$obj = new Bar();
$obj->t();
$obj->ttt();
$obj->fff();
