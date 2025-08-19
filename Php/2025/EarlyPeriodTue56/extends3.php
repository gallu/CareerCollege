<?php  // extends3.php

class Hoge {
    public function func2() {
        echo __METHOD__ , "<br>";
    }
}

class Foo extends Hoge {
    public function func2() {
        parent::func2(); // 親の処理を呼ぶ
        echo __METHOD__ , "<br>";
    }
}
//
$fobj = new Foo();
$fobj->func2();
