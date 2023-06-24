<?php  // class4.php
declare(strict_types=1);

interface HogeInterface {
    public function test();
}
interface TttInterface {
    public function ttt();
}

class Hoge implements HogeInterface, TttInterface {
    public function test() {
        echo __METHOD__ , "<br>\n";
    }
    public function ttt() {
        echo __METHOD__ , "<br>\n";
    }
    public function A() {
        echo __METHOD__ , "<br>\n";
    }
}

$obj = new Hoge();
$obj->test();
$obj->ttt();
