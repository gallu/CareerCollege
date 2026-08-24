<?php  // trait2.php
declare(strict_types=1);

trait HogeTrait {
    public function func(): void {
        echo __METHOD__, "<br>";
    }
}
trait FooTrait {
    public function funcFoo(): void {
        echo __METHOD__, "<br>";
    }
}

class Hoge {
    use HogeTrait;
    use FooTrait;
}

$obj = new Hoge();
$obj->func();
$obj->funcFoo();
