<?php  // class7.php
declare(strict_types=1);

class Hoge {
    public function __construct(int $num) {
        var_dump($num);
    }

    // デストラクタは引数を持てない
    // public function __destruct(int $num) {
    public function __destruct() {
        // var_dump($num);
    }
}

$obj = new Hoge(456);
