<?php  // Singleton.php
// https://dev2.m-fr.net/アカウント名/Singleton.php

class Singleton {
    // 外部からのnewの禁止
    private function __construct() {
    }
    
    public static function getInstance(): static {
        static $obj = null;
        if (null === $obj) {
            $obj = new static();
        }
        return $obj;
    }
}

//
$obj = Singleton::getInstance();
$obj2 = Singleton::getInstance();
// $obj3 = new Singleton();
var_dump($obj, $obj2);

