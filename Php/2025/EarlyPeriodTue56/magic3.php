<?php  // magic3.php
declare(strict_types=1);

class Hoge implements Stringable {
    private int $num;
    public function __construct(int $num) {
        $this->num = $num;
    }
    public function __toString(): string {
        return "num is {$this->num}";
    }
}
//
$obj = new Hoge(123);
echo $obj , "<br>";

//
class Foo {
    public function __invoke(int $num, float $rate): float {
        return $num * $rate;
    }
}
//
$obj = new Foo();
$r = $obj(123, 3.14);
var_dump($r);
