<?php  // class7.php
declare(strict_types=1);

class Hoge {
    // コンストラクタ
    public function __construct() {
        echo "Start !!! <br>";
    }
    // デストラクタ
    public function __destruct() {
        echo "enddddddddd..... <br>";
    }
}

//
$obj = new Hoge();
var_dump($obj);
