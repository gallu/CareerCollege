<?php  // class5.php

class Hoge {
    // コンストラクタ
    public function  __construct() {
        echo "call construct <br>";
    }
    // デストラクタ
    public function __destruct() {
        echo "call destruct <br>";
    }
}

//
$obj = new Hoge();
var_dump($obj);
