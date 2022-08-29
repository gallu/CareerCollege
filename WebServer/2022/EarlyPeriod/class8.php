<?php   // class8.php

class Hoge {
    // newできなくする
    private function __construct() {
    }
    //
    public static function getInstance(): static {
        // インスタンス格納用の永続する変数を用意
        static $obj = null;
        // 未だインスタンスが未作成なら、作っておく
        if ($obj === null) {
            $obj = new static();
        }
        return $obj;
    }

    // clone抑止: これは書いたり書かなかったり
    public function __clone() {
        echo "clone 禁止！！！";
        exit;
    }
}
//
//$obj = new Hoge();
$obj = Hoge::getInstance();
var_dump($obj);

// 色々な処理

//
//$obj2 = new Hoge();
$obj2 = Hoge::getInstance();
var_dump($obj2);

//
$obj3 = clone $obj2;
var_dump($obj3);

