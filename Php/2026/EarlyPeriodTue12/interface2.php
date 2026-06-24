<?php  // interface2.php
declare(strict_types=1);

interface HogeInterface {
    public function func(int $num): int;
}

interface FooInterface {
    public function func(int $num): int;
}

interface BarInterface {
    public function func2(float $num): float;
}

class Hoge implements HogeInterface, FooInterface, BarInterface {
    public function func(int $num): int {
        return $num * 2;
    }

    public function func2(float $num): float {
        return $num * 3.14;
    }
}

$obj = new Hoge();
var_dump( $obj->func(12), $obj->func2(12.34) );
