<?php  // class10.php
declare(strict_types=1);

// クラス定義
class Hoge {
    //
    private int $num;
    private string $str;
    //
    public function __construct(int $i, string $s) {
        $this->num = $i;
        $this->str = $s;
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

// $obj->num = 999;

// ふつうはやらないけど……
$obj->__construct(999, "xxxxx");
var_dump($obj);

