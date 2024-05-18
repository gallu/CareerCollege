<?php   // readonly.php

class Hoge {
    public function __construct(
        public readonly int $num,
    ){}
}
$obj = new Hoge(123);
var_dump($obj->num);
// $obj->num = 999;

readonly class Foo {
    public function __construct(
        public int $num,
        public string $str,
    ){}
}
$obj = new Foo(222, 'foo');
var_dump($obj->num);
var_dump($obj->str);
// $obj->num = 999;

$obj = new readonly class(333,'class') {
    public function __construct(
        public int $num,
        public string $str,
    ){}
};
var_dump($obj->num);
var_dump($obj->str);
// $obj->num = 999;





