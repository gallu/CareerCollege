<?php  // interface5.php
declare(strict_types=1);

interface HogeInterface {
    public function test();
}

class Hoge implements HogeInterface {
    public function test() {
        echo __METHOD__ , "<br> \n";
    }
}

class Bar implements HogeInterface {
    public function test() {
        echo __METHOD__ , "<br> \n";
    }
}

class Foo {
    public function test(HogeInterface $o) {
        var_dump($o);
    }
}

//
$h_obj = new Hoge();
$b_obj = new Bar();

$f_obj = new Foo();
$f_obj->test($h_obj);
$f_obj->test($b_obj);
