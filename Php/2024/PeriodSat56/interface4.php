<?php  // interface4.php
declare(strict_types=1);

class Hoge {
}

class Foo {
    public function test(Hoge $o) {
        var_dump($o);
    }
}

class Bar {
}

//
$h_obj = new Hoge();
$b_obj = new Bar();

$f_obj = new Foo();
$f_obj->test($h_obj);

// $f_obj->test($b_obj); // Fatal error: Uncaught TypeError: Foo::test(): Argument #1 ($o) must be of type Hoge, Bar given, 
