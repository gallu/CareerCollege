<?php  // class5.php
declare(strict_types=1);

class Hoge {
    // 変数(プロパティ)
    private int $num;
    private string $str;

    // 関数
    public function setNum(int $i) {
        $this->num = $i;
    }
    public function setStr(string $s) {
        $this->str = $s;
    }
    //
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
$obj->setStr("hello");
var_dump($obj);
var_dump($obj->getNum(), $obj->getStr());

