<?php  // SingletonHoge.php
require_once('./singleton.php');

class SingletonHoge extends Singleton {
    public function hhh() {
        echo "hhh\n";
    }
}
//
$obj = SingletonHoge::getInstance();
var_dump($obj);
//
$obj2 = SingletonHoge::getInstance();
var_dump($obj2);
//
$obj2->hhh();
