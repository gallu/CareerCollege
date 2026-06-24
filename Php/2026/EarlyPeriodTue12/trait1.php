<?php  // trait1.php
declare(strict_types=1);

trait HogeTrait {
    public function func(int $num): int {
        return $num * 2;
    }
}

class Hoge {
    use HogeTrait;
}

$obj = new Hoge();
var_dump( $obj->func(234) );
