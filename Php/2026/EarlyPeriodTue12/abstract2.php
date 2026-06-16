<?php  // abstract2.php
declare(strict_types=1);

abstract class HogeAbstract {
    public function func(int $num): int {
        return $num * 2;
    }
    abstract public function func2(int $num): int;
}

$obj = new HogeAbstract(); // Fatal error: Uncaught Error: Cannot instantiate abstract class HogeAbstract in
