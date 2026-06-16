<?php  // class10.php
declare(strict_types=1);

class Hoge {
    private int $num;
    public function __construct(int $num) {
        $this->num = $num;
    }
    // XXX ゲッターは省略
}

$obj = new Hoge(999);
var_dump($obj);

// $obj->num = 123; // Cannot access private property Hoge::$num in

// 絶対にやめろ！ やるな！！
$obj->__construct(-123);
var_dump($obj);
