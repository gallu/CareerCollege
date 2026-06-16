<?php  // trait2.php
declare(strict_types=1);

trait HogeTrait {
    private int $num;

    protected function pFunc(int $num) {
        $this->num = $num;
    }
}
trait FooTrait {
    public function fff() {
        var_dump( __METHOD__ );
    }
}

class Hoge {
    use HogeTrait;
    use FooTrait;

    public function __construct(int $num) {
        $this->pFunc($num);
    }
}
$obj = new Hoge(987);
var_dump($obj);
