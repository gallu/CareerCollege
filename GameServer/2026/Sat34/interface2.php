<?php  // interface2.php
declare(strict_types=1);

interface HogeInterface {
    public function func(int $num): int;
}
interface FooInterface {
    public function func(int $num): int;
}
interface BarInterface {
    public function func2(): void;
}

class Hoge implements HogeInterface, FooInterface, BarInterface {
    public function func(int $num): int {
        return $num * 2;
    }
    public function func2(): void {
        echo __METHOD__, "<br>";
    }
}

$obj = new Hoge();
$r = $obj->func(123);
var_dump($r);
$obj->func2();
