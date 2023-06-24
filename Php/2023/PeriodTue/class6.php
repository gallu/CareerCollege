<?php  // class6.php
declare(strict_types=1);

class Hoge {
    // コンストラクタのプロモーション
    // public function __construct(private int $num) {
    public function __construct(
        private int $num,
    ) {
    }

    public function getNum(): int {
        return $this->num;
    }
}

//
$obj = new Hoge(999);
var_dump($obj->getNum());

