<?php  // class6.php

class Hoge {
    // コンストラクタのプロモーション
    // public function __construct(private int $num) {
    public function __construct(
        private int $num,
    ) {
    }
}

//
$obj = new Hoge(321);
var_dump($obj);
