<?php  // class12.php

class Hoge {
    public int $num;
    public function __construct(int $i) {
        $this->num = $i;
    }
}
$obj = new Hoge(123);
var_dump($obj->num);
$obj->num = 321;
var_dump($obj->num);

class Foo {
    public readonly int $num;
    public function __construct(int $i) {
        $this->num = $i;
    }
}
$obj2 = new Foo(456);
var_dump($obj2->num);
// $obj2->num = 654;

class Bar {
    public function __construct(
        public readonly int $num,
    ) {
    }
}
$obj3 = new Bar(789);
var_dump($obj3->num);








