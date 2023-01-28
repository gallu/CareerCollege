<?php   // interface.php

interface HogeInterface {
    public function test();
}

class Hoge implements HogeInterface {
    public function test() {
        echo __METHOD__ , "<br>";
    }
}

//
$obj = new Hoge;
$obj->test();
