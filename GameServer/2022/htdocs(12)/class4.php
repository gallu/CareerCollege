<?php  // class4.php

class Hoge {
    //
    public function test() {
        // 自分自身 の中にある val = 123;
        $this->val = 123;
    }

    // --- アクセッサ ---
    // セッター
    public function setVal($v) {
        $this->val = $v;
    }
    // ゲッター
    public function getVal() {
        return $this->val;
    }
    
    // クラス内変数( プロパティ )
    private $val = 0;
}
//
$object = new Hoge();
var_dump($object);
//
$object->test();
var_dump($object);
//
$object->setVal("string");
var_dump($object);
var_dump($object->getVal());
