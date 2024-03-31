<?php  declare(strict_types=1); // e10.php

interface HogeInterface {
    public function add(int $i, int $j);
}

class Hoge implements HogeInterface {
    protected function isBackOrFront(): bool {
        // 処理 random_int(0, 1)で乱数を作成する
        // 戻り値 乱数が0ならfalseを返す。乱数が1ならtrueを返す
        return 1 === random_int(0, 1);
        // return (bool)random_int(0, 1);
    }

    public function add(int $i, int $j) {
        return $i + $j;
    }

    public function checkIsBackOrFront(): bool {
        return $this->isBackOrFront();
    }
}

$obj = new Hoge();
var_dump( $obj->add(12, 34) );
var_dump( $obj->checkIsBackOrFront() );
