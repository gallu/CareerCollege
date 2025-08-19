<?php  // interface1.php

interface IHoge {
    public function calTax(int $price): int;
}

class Hoge implements IHoge {
    public function calTax(int $price): int {
        return (int)floor($price * 0.10);
    }
}

$obj = new Hoge();
$r = $obj->calTax(98);
var_dump($r);
