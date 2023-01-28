<?php   // class4.php

class Hoge {
    //
    public function test() {
        // 自分自身　の中にある　$val = 123;
        $this->val = 123;
    }
    // --- アクセッサ　---
    //　セッター
    public function setVal($v) {
        $this->val = $v;
    }
    // ゲッター
    public function getVal() {
        return $this->val;
    }

    //
    private $val;
}

//
$obj = new Hoge();
var_dump($obj);
//
$obj->test();
var_dump($obj);

$obj->setVal("string");
var_dump($obj);
var_dump($obj->getVal());

