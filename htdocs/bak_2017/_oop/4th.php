<?php
// 4th.php
class hoge {
    public function test() {
        echo "hoge#test()\n";
    }
public $hp;
}
//
class foo extends hoge {
}
//
$obj = new foo();
$obj->test();
$obj->hp = 100;
var_dump($obj);

