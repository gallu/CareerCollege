<?php  // singleton.php
// https://dev2.m-fr.net/アカウント名/singleton.php

class Singleton {
    // シングルトンなんでコンストラクタをつぶす
    private function __construct() {
    }

    public static function getInstance(): static {
        static $obj = null;
        if (null === $obj) {
            $obj = new static();
        }
        return $obj;
    }

    public static function getHoge(): int {
        static $num = null;
        if (null === $num) {
            $num = random_int(0, 9999);
        }
        return $num;
    }
}
//
$r = Singleton::getInstance();
var_dump($r);

$r2 = Singleton::getInstance();
var_dump($r2);

$r3 = Singleton::getInstance();
var_dump($r3);

// $obj = new Singleton();
// var_dump($obj);

/*
$r = Singleton::getHoge();
var_dump($r);

$r = Singleton::getHoge();
var_dump($r);

$r = Singleton::getHoge();
var_dump($r);
*/
