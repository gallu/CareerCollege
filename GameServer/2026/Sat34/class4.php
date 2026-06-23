<?php  // class4.php
declare(strict_types=1);

class Hoge {
    // 変数(プロパティ)
    private int $num;

    /* アクセッサ */
    // セッター
    public function setNum(int $num) {
        $this->num = $num;
    }
    // ゲッター
    public function getNum(): int {
        return $this->num;
    }
}

$obj = new Hoge();
$obj->setNum(123);
var_dump($obj->getNum());
