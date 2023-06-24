<?php  // class9.php
declare(strict_types=1);

interface HogeInterface {
    public function ttt();
}
interface FooInterface {
    public function fff();
}

class Bar implements HogeInterface, FooInterface {
    public function ttt() {
        var_dump(__METHOD__);
    }
    public function fff() {
        var_dump(__METHOD__);
    }
}
//
$obj = new Bar();
$obj->ttt();
$obj->fff();
