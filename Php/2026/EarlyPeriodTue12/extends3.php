<?php  // extends3.php

class Hoge {
    public function func() {
        var_dump(__METHOD__);
    }
}

class Foo extends Hoge {
    public function func() {
        parent::func(); // 親メソッドを呼び出す
        var_dump(__METHOD__);
    }
}

$obj = new Foo();
$obj->func();
