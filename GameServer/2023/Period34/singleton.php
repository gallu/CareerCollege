<?php  // singleton.php
// https://dev2.m-fr.net/アカウント名/singleton.php

class Hoge {
    // シングルトンなんで外からのnew禁止
    private function __construct() {
    }

    public static function getInstance() {
        static $obj = null;
        if (null === $obj) {
            $obj = new static();
        }
        return $obj;
    }
    
    public function __clone() {
        throw new Error("cloneすんなや");
    }
    public function __unserialize(array $data): void {
        throw new Error("unserializeすんなや");
    }
}

//
$obj = Hoge::getInstance();
$obj2 = Hoge::getInstance();
// $obj3 = new Hoge();
// $obj3 = clone $obj;
$obj3 = unserialize(serialize($obj));

var_dump($obj, $obj2, $obj3);
