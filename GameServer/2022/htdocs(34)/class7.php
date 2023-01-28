<?php  // class7.php

class Hoge {
    public function test() {
        echo "Hoge::test <br>";
    }
}
class Foo  extends Hoge {
    public function ttt() {
        echo "Foo:ttt <br>";
    }
}

//
$obj = new Foo();
$obj->ttt();
$obj->test();
