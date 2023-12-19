<?php  // getset.php

class Hoge {
    public function __get(string $name): mixed {
        var_dump("__get");
        var_dump($name);
        return 987;
    }
    public function __set(string $name, mixed $value) {
        var_dump("__set");
        var_dump($name, $value);
    }
}

$obj = new Hoge();
// var_dump($obj);
var_dump( $obj->num );

$obj->num = 123;
var_dump( $obj->num );

