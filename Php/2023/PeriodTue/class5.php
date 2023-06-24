<?php  // class5.php
declare(strict_types=1);

class Hoge {
    //
    private int $num = 0;
    //
    public function __construct(int $num) {
        $this->num = $num;
    }

    public function getNum(): int {
        return $this->num;
    }
}

//
$obj = new Hoge(999);
var_dump($obj->getNum());

// XXX やるな！！絶対！！
$obj->__construct(123);
var_dump($obj->getNum());

