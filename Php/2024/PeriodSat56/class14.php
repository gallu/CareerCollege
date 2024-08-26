<?php  // class14.php
declare(strict_types=1);

class Hoge {
    public function func() {
        echo __METHOD__ , "<br>";
    }
}

// 継承
class Foo extends Hoge {
}

$obj = new Hoge();
$obj->func();

$fobj = new Foo();
$fobj->func();