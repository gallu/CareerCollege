<?php  // interface1.php
declare(strict_types=1);

interface HogeInterface {
    public function func(int $num): int;
}

class Hoge implements HogeInterface {
    public function func(int $num): int {
        return $num * 2;
    }
}

$obj = new Hoge();
var_dump( $obj->func(12) );
