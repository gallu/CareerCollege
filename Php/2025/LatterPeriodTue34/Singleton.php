<?php  // Singleton.php

class Singleton {
    // シングルトンなんで外からのnew禁止
    private function __construct() {
    }
    public static function getInstance(): self {
        static $obj = null;
        if ($obj === null) {
            $obj = new self();
        }
        return $obj;
    }

    //
    private function __clone() {
    }
    public function __wakeup() {
        throw new Exception("すんな");
    }
}

//
$obj = Singleton::getInstance();
$obj2 = Singleton::getInstance();
$obj3 = Singleton::getInstance();
// $obj4 = new Singleton();
// $obj4 = clone $obj;
// $obj4 = unserialize(serialize($obj));

var_dump($obj, $obj2, $obj3, $obj4);

