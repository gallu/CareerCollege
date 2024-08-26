<?php  // chain.php
declare(strict_types=1);

class Hoge {
    public function func1() {
        echo __METHOD__ , "<br>\n";
    }
    public function func2() {
        echo __METHOD__ , "<br>\n";
    }
}
//
$obj = new Hoge();
$obj->func1();
$obj->func2();
//
// $obj = new Hoge();
// $obj->func1()
    // ->func2(); // Uncaught Error: Call to a member function func2() on null in

class Foo {
    public function func1(): static {
        echo __METHOD__ , "<br>\n";
        return $this;
    }
    public function func2(): static {
        echo __METHOD__ , "<br>\n";
        return $this;
    }
}
$obj = new Foo();
$obj->func1()->func2();
