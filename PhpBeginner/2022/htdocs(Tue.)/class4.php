<?php  // class4.php

class Hoge {
    /* アクセッサー */
    // セッター
    public function setNumber($v) {
        $this->number = $v;
    }
    // ゲッター
    public function getNumber() {
        return $this->number;
    }

    private $number;
}

$obj = new Hoge();
$obj->setNumber(123);
var_dump($obj->getNumber());
