<?php  // interface2.php
declare(strict_types=1);

interface HogeInterface {
    public function test();
}
interface FooInterface {
    public function func(int $num);
}

class Hoge implements HogeInterface, FooInterface {
    public function test() {
        echo __METHOD__ , "<br>\n";
    }
    public function func(int $num) {
        echo __METHOD__ , ": {$num} <br>\n";
    }
}
//
$obj = new Hoge();
$obj->test();
$obj->func(6);
