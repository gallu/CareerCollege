<?php  // class9-1.php
declare(strict_types=1);

// クラス定義
class Hoge {
    //
    public function __construct(
        private int $num,
        private string $str,
    ) {
    }
    public function getNum(): int {
        return $this->num;
    }
    public function getStr(): string {
        return $this->str;
    }
}

//
$obj = new Hoge(333, "hogera");
var_dump($obj);

var_dump($obj->getNum(), $obj->getStr());
