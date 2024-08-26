<?php  // extends2.php
declare(strict_types=1);

class BaseHoge {
}

class Hoge extends BaseHoge {
}

class Bar extends BaseHoge {
}

class Foo {
    public function test(BaseHoge $o) {
        var_dump($o);
    }
}

//
$h_obj = new Hoge();
$b_obj = new Bar();

$f_obj = new Foo();
$f_obj->test($h_obj);
$f_obj->test($b_obj);

