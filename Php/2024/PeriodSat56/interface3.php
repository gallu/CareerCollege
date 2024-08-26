<?php  // interface3.php
declare(strict_types=1);

interface HogeInterface {
    public function test();
    // Fatal error: Interface function HogeInterface::test() cannot contain body
    // public function test() {
        // echo "def";
    // }

    // Fatal error: Access type for interface method HogeInterface::func() must be public 
    // protected function func();

    // Fatal error: Interfaces may not include properties
    // private int $num;
}

class Hoge implements HogeInterface {
    public function test() {
        echo __METHOD__ , "<br>\n";
    }
}
//
$obj = new Hoge();
$obj->test();

