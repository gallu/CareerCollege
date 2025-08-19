<?php  // trait1.php
/*
has-a関係で使われる

A has a B
 */
trait HogeTrait {
    public function func() {
        echo __METHOD__ , "<br>";
    }
}

class Hoge {
    use HogeTrait;
}

$obj = new Hoge();
$obj->func();
