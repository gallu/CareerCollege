<?php  // interface1.php
declare(strict_types=1);

interface HogeInterface {
    public function test();
    public function func(int $num);
}

class Hoge implements HogeInterface {
    private int $num;
    public function __construct(int $i) {
        $this->num = $i;
    }
    
    public function test() {
        echo __METHOD__ , "<br>\n";
    }
    public function func(int $num) {
        $i = $this->num * $num;
        echo __METHOD__ , ": {$i} <br>\n";
    }
}
//
$obj = new Hoge(123);
$obj->test();
$obj->func(6);

