<?php  // class5.php

class Hoge {
    // コンストラクタ
    public function __construct() {
        echo "construct <br>";
    }
    // デストラクタ
    public function __destruct() {
        echo "destruct <br> ";
    }
}

//
$obj = new Hoge();
var_dump($obj);