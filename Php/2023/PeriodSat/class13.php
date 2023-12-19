<?php  // class13.php
declare(strict_types=1);

class Hoge {
    public int $num;
    public function __construct(int $num) {
        $this->num = $num;
    }
}
//
$obj = new Hoge(987);
var_dump($obj->num);
$obj->num = 456;
var_dump($obj->num);

class Foo {
    public readonly int $num;
    public function __construct(int $num) {
        $this->num = $num;
    }
}
//
$obj = new Foo(789);
var_dump($obj->num);
// $obj->num = 159;
// var_dump($obj->num);

class Bar {
    public function __construct(
        public readonly int $num,
    ) {
    }
}
//
$obj = new Bar(777);
var_dump($obj->num);
