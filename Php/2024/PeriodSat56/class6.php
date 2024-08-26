<?php  // class6.php
declare(strict_types=1);

// クラス定義
class Hoge {
    // 変数(プロパティ)が定義できる
    private int $num;
    private string $str;

    public function setNum(int $i) {
        $this->num = $i;
    }
    public function setStr(string $s) {
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
$obj = new Hoge();
$obj->setNum(123);
$obj->setStr("string val");
var_dump($obj);

var_dump($obj->getNum(), $obj->getStr());


