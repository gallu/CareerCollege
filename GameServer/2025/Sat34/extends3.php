<?php  // extends3.php

class Hoge {
    public function func() {
        echo __METHOD__ , "<br>";
    }
}

class Foo extends Hoge {
    public function func() {
        // 親の func()を呼びたい
        parent::func();

        echo __METHOD__ , "<br>";
    }
}

$fobj = new Foo();
$fobj->func();
