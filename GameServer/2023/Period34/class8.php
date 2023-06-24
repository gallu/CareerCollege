<?php  // class8.php

trait HogeTrait {
    public function ttt() {
        var_dump(__METHOD__);
    }
}

trait FooTrait {
    public function fff() {
        var_dump(__METHOD__);
    }
}

class Bar {
    use HogeTrait;
    use FooTrait;
}

$obj = new Bar();
$obj->ttt();
$obj->fff();