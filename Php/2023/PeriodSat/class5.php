<?php  // class5.php
declare(strict_types=1);

class Hoge {
    public function __construct(int $num) {
        $this->num = $num;
    }
    public function getNum(): int {
        return $this->num;
    }

    private int $num = 0;
}

//
$obj = new Hoge(123);
var_dump($obj->getNum());

// これは書いちゃいけない
$obj->__construct(999);
var_dump($obj->getNum());
