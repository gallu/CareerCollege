<?php  // class5.php

class Hoge {
    // コンストラクタ
    public function __construct($v) {
        echo "into construct <br>";
        $this->number = $v;
    }
    // デストラクタ
    public function __destruct() {
        echo "into destruct <br>";
    }

    private $number;
}

$obj = new hoge(123);
var_dump($obj);
