<?php  // interface3.php
declare(strict_types=1);

interface HogeInterface {
    public function func(int $num): int;
    // protected function proFunc(int $num): int; // Fatal error: Access type for interface method HogeInterface::proFunc() must be public in

    // Fatal error: Interface function HogeInterface::exec() cannot contain body in
    // public function exec() {
    //     echo __METHDOO, "<br>";
    // }

    // 旧: Fatal error: Interfaces may not include member variables in 
    // Fatal error: Interfaces may only include hooked properties in
    // public int $num;
}
