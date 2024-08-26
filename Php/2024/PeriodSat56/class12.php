<?php  // class12.php
declare(strict_types=1);

// クラス定義
readonly class Hoge {
    public function __construct(
        public int $num,
        public string $str,
    ) {
    }
}

//
$obj = new Hoge(num: 333, str: "hogera");
var_dump($obj);
var_dump($obj->num, $obj->str);

// readonlyなので変更はできない
// $obj->num = 999;