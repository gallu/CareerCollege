<?php  // val_func.php

function hoge() {
    echo "hoge <br>\n";
}
//
hoge();
//
$s = "hoge";
$s();

//
class Foo {
    public function test() {
        echo "Foo#test <br>\n";
    }
}
//
$obj = new Foo();
$s = "test";
$obj->$s();
