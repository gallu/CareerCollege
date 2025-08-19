<?php  // extends1.php
/*
is-a関係
A is a B
A は B です
人間 は 哺乳類 です
哺乳類 は 生物 です
豚バラ肉 は 豚肉 です
 */

class Hoge {
    public function func() {
        echo __METHOD__ , "<br>";
    }
}

class Foo extends Hoge {
    public function func2() {
        echo __METHOD__ , "<br>";
    }
}

$obj = new Foo();
$obj->func2();
$obj->func();
