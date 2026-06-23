<?php  // class6.php
declare(strict_types=1);

class Hoge {
    public function func() {
        echo __METHOD__ , "<br>";
    }

    // コンストラクタ
    public function __construct() {
        echo __METHOD__ , "<br>";
    }
    // デストラクタ
    public function __destruct() {
        echo __METHOD__ , "<br>";
    }
}

$obj = new Hoge();
