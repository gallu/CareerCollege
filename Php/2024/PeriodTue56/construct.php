<?php  // construct.php

class Hoge {
    private int $num;
    private string $str;
    
    public function __construct(int $i, string $s) {
        $this->num = $i;
        $this->str = $s;
    }
}
$obj = new Hoge(123, 'str');
var_dump($obj);


// コンストラクタのプロパティ昇格機能
class Foo {
    public function __construct(
        private int $num,
        private string $str,
    ) {}
}
$obj = new Foo(123, 'str');
var_dump($obj);


