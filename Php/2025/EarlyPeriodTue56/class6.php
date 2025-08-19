<?php  // class6.php

class Hoge {
    // コンストラクタ
    public function __construct() {
        echo __METHOD__ , "<br>";
    }
    // デストラクタ
    public function __destruct() {
        echo __METHOD__ , "<br>";
    }

    public function func() {
        echo __METHOD__ , "<br>";
    }
}

$obj = new Hoge();
