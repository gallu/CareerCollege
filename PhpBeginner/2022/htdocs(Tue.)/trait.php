<?php   // trait.php

trait HogeTrait {
    public function test() {
        echo __METHOD__ , "<br>";
    }
}

class Hoge {
    use HogeTrait;
}

//
$obj = new Hoge();
$obj->test();
