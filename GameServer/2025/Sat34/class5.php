<?php  // class5.php
declare(strict_types=1);

class Hoge {
    private int $num;
    
    // セッター / ゲッター: アクセッサー
    public function setNum(int $i): void {
        $this->num = $i;
    }
    public function getNum(): int {
        return $this->num;
    }
}
//
$obj = new Hoge();
var_dump($obj);

$obj->setNum(123);
var_dump($obj);

var_dump($obj->getNum());
