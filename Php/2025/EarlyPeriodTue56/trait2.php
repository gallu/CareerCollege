<?php  // trait2.php
declare(strict_types=1);

trait HogeTrait {
    private function pFunc(): void {
    }

    private int $num;
}

class Hoge {
    use HogeTrait;
}

$obj = new Hoge();
var_dump($obj);

//
// $obj2 = new HogeTrait(); // Uncaught Error: Cannot instantiate trait HogeTrait 

