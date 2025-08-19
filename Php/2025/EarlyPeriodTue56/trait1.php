<?php  // trait1.php
declare(strict_types=1);

/*
has-a関係
A has a B
酢豚 has a 豚肉
 */

trait HogeTrait {
    public function func(int $i): void {
        var_dump($i);
    }
}

class Hoge {
    use HogeTrait;
}

$obj = new Hoge();
$obj->func(123);
