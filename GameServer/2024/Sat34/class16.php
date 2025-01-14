<?php  // class16.php

$obj = new class() {
    public function f1() {
        echo __METHOD__ , "<br> \n";
    }
};
var_dump($obj);
$obj->f1();

