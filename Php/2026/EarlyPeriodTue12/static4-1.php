<?php  // static4-1.php
declare(strict_types=1);

class Hoge {
    protected function func() {
        echo __METHOD__ , "<br>";
    }
    public function test() {
        $this->func();
    }
}
class Foo extends Hoge {
    protected function func() {
        echo __METHOD__ , "<br>";
    }
}
//
$hobj = new Hoge();
$hobj->test();
//
$fobj = new Foo();
$fobj->test();
