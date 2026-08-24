<?php  // trait1.php
declare(strict_types=1);

trait HogeTrait {
    public function func(): void {
        echo __METHOD__, "<br";
    }
}

class Hoge {
    use HogeTrait;
}

$obj = new Hoge();
$obj->func();
