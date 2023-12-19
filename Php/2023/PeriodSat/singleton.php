<?php  // singleton.php

class Hoge {
    // お外からのnew禁止
    private function __construct() {
    }
    //
    public static function getInstance(): static {
        static $obj = null;
        if (null === $obj) {
            $obj = new static();
        }
        return $obj;
    }

    // clone禁止
    private function __clone() {
    }
    // unserialize禁止
    public function __unserialize(array $data) {
        throw new Exception("なにすんねん");
    }
}

//
// $obj = new Hoge();
// $obj2 = new Hoge();
// var_dump($obj, $obj2);
$obj = Hoge::getInstance();
$obj2 = Hoge::getInstance();
var_dump($obj, $obj2);

$obj3 = clone $obj;
var_dump($obj, $obj3);

// $obj3 = unserialize(serialize($obj));
// var_dump($obj, $obj3);

