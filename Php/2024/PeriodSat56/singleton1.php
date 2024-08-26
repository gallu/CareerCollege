<?php  // singleton1.php
declare(strict_types=1);

class Hoge {
}
$obj = new Hoge();
$obj2 = new Hoge();
var_dump($obj, $obj2);
echo "\n";

class Singleton {
    public static function getInstance(): static {
        static $o = null;
        if (null === $o) {
            $o = new static();
        }
        return $o;
    }
}
$sobj = Singleton::getInstance();
$sobj2 = Singleton::getInstance();
var_dump($sobj, $sobj2);
