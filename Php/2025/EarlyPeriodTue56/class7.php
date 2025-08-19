<?php  // class7.php

class Hoge {
    // コンストラクタ
    public function __construct(int $i) {
        echo __METHOD__ , "<br>";
        var_dump($i);
    }
}

$obj = new Hoge(321);


