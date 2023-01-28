<?php   // class7.php

// マルチプルインスタンスの確認
class Hoge {
    public function setVal($v) {
        $this->val = $v;
    }

    private $val;
}

//
$obj = new Hoge();
$obj->setVal(123);
var_dump($obj);

//
$obj2 = new Hoge();
$obj2->setVal("string");
var_dump($obj, $obj2);

