<?php  // class15.php
declare(strict_types=1);

class Hoge {
    public function func() {
        echo __METHOD__ , "<br>";
    }
}

// 継承
class Foo extends Hoge {
    public function func() {
        parent::func();
        echo __METHOD__ , "<br>";
    }
    public function func2() {
        echo __METHOD__ , "<br>";
    }
}

$obj = new Hoge();
$obj->func();

$fobj = new Foo();
$fobj->func();
$fobj->func2();
