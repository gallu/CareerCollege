<?php  // interface3.php
declare(strict_types=1);

interface Hogable {
    public function func(int $i): void;
    public function func1(string $v): void;
}
interface Fooable {
    // public function func(int $i): int; // ずれたら駄目！
    public function func(int $i): void;
    public function func2(float $f): void;
}

class Hoge implements Hogable, Fooable {
    public function func(int $i): void {
        var_dump($i);
    }
    public function func1(string $v): void {
        var_dump($v);
    }
    public function func2(float $f): void {
        var_dump($f);
    }
}
//
$obj = new Hoge();
var_dump($obj);
