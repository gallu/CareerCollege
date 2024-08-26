<?php  // static4.php

class Hoge {
    public function func1() {
        echo __METHOD__ , "<br> \n";
    }

    public function callFunc() {
        var_dump( $this::class );
        echo "<br>";
        $this->func1();
    }
}

class Foo extends Hoge {
    public function func1() {
        echo __METHOD__ , "<br> \n";
    }
}

$hobj = new Hoge();
$hobj->callFunc();

$fobj = new Foo();
$fobj->callFunc();
