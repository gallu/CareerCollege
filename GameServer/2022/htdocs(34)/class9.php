<?php  // class9.php

trait HogeTrait {
    public function test() {
        echo "HogeTrait::test <br>";
    }
}
class Hoge {
    use HogeTrait;
}

//
$obj = new Hoge();
$obj->test();
