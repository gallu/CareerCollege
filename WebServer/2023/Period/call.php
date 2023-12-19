<?php  // call.php

class Hoge {
    public function __call(string $name, array $arguments) {
        var_dump("__call");
        var_dump($name, $arguments);
    }
    public static function __callStatic(string $name, array $arguments) {
        var_dump("__callStatic");
        var_dump($name, $arguments);
    }
}

$obj = new Hoge();
var_dump($obj);

$obj->test();
$obj->test2(1, "2nd", true, null);

Hoge::staticTest();
