<?php  // abstract.php

abstract class HogeAbstract {
    abstract public function test();
}
//
class Hoge extends HogeAbstract {
    public function test() {
        echo "Hoge::test <br>";
    }
}

//
$obj = new Hoge();
$obj->test();