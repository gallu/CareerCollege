<?php  // class3.php

class Hoge {
    // セッター
    public function setNum(int $i) {
        $this->num = $i;
    }
    //　ゲッター
    public function getNum() {
        return $this->num;
    }

    private int $num = 0;
}

//
$obj = new Hoge();
$obj->setNum(999);
var_dump($obj->getNum());
