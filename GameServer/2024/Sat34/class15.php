<?php  // class15.php
declare(strict_types=1);

class Hoge {
    public int $num;
}
$obj = new Hoge();
$obj->num = 123;
var_dump($obj->num);
$obj->num = 999;
var_dump($obj->num);

readonly class Foo {
    public function __construct(
        public int $num,
    ) {}
}
$obj = new Foo(321);
var_dump($obj->num);
// $obj->num = 777;


