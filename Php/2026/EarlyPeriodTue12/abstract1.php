<?php  // abstract1.php
declare(strict_types=1);

abstract class HogeAbstract {
    public function func(int $num): int {
        return $num * 2;
    }
    abstract public function func2(int $num): int;
}

class Hoge extends HogeAbstract {
    public function func2(int $num): int {
        return $num ** 3;
    }
}

$obj = new Hoge();
var_dump( $obj->func(456), $obj->func2(789) );