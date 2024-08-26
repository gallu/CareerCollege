<?php  // singleton2.php
declare(strict_types=1);

class Hoge {
    private function __construct() {
    }
}
// $obj = new Hoge();
// var_dump($obj);


class Foo {
    private function __clone(): void {
    }
}
// $obj = new Foo();
// $obj2 = clone $obj;
// var_dump($obj, $obj2);

class Bar {
    public function __wakeup(): void {
        throw new \Exception("アンシリアライズすんな");
    }
}
// $obj = new Bar();
// $obj2 = unserialize( serialize($obj) );
// var_dump($obj, $obj2);
