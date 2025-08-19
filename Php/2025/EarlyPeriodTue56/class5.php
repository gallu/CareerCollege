<?php  // class5.php

class Hoge {
    // 変数(プロパティ)
    private int $num;
    
    // 関数(メソッド)
    // セッター　/ ゲッター / アクセッサ
    public function setNum(int $i): void {
        $this->num = $i;
    }
    public function getNum(): int {
        return $this->num;
    }
}

$obj = new Hoge();
var_dump($obj);
$obj->setNum(123);
var_dump($obj);

var_dump($obj->getNum());
