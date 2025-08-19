<?php  // singleton1.php

class Hoge {
    public static function getInstance(): self {
        // return new self();
        static $o = null;
        if ($o === null) {
            $o = new self;
        }
        return $o;
    }
}

$obj = Hoge::getInstance();
$obj2 = Hoge::getInstance();
var_dump($obj, $obj2);

// XXX これはやめさせたい
$obj3 = new Hoge();
var_dump($obj3);

