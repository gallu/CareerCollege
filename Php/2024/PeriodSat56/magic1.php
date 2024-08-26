<?php  // magic1.php

class Hoge {
    public function __get(string $name): mixed {
        echo "__get(), {$name} <br>\n";
        return null;
    }
    public function __set(string $name, mixed $value): void {
        echo "__set(), {$name} = {$value} <br>\n";
    }
}

$obj = new Hoge();
var_dump($obj->ttt);
$obj->noPro = 123;
var_dump($obj);

// これはできない……
// var_dump(Hoge::$staticVal);

