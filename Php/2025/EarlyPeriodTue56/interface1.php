<?php  // interface1.php
declare(strict_types=1);

interface Hogable {
    public function func(int $i): void;
}

class Hoge implements Hogable {
    public function func(int $i): void {
        var_dump($i);
    }
}

$obj = new Hoge();
$obj->func(123);
