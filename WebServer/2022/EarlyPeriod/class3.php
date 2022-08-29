<?php   // class3.php
declare(strict_types=1);

class Hoge {
    public function test() {
        echo "into Hoge::test <br>";
    }
}
//
class Foo extends Hoge {
    public function t2() {
        echo "into Foo::t2 <br>";
    }
}

//
$obj = new Hoge();
$obj->test();
//
$obj = new Foo();
$obj->t2();
$obj->test();
