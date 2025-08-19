<?php  // magic2.php

class Hoge {
    // public string $data;

    public function __set(string $name, mixed $value): void {
        var_dump($name, $value);
    }
    public function __get(string $name): mixed {
        var_dump($name);
        return null; // ダミー
    }
}

$obj = new Hoge();
var_dump($obj);

$obj->num = 123;
var_dump($obj->num);

// $obj->date = "hoge data";
// var_dump($obj);
