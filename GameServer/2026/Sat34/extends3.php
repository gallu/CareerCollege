<?php  // extends3.php
declare(strict_types=1);

class Hoge {
    public function func2() {
        echo __METHOD__ , "<br>";
    }
}
class Foo extends Hoge {
    public function func2() {
        parent::func2();
        echo __METHOD__ , "<br>";
    }
}

$obj = new Foo();
$obj->func2();
