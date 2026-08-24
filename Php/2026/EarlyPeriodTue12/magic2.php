<?php  // magic2.php
declare(strict_types=1);

class Hoge {
    public function __set(string $name, mixed $value): void {
        echo "set name: {$name} <br>";
        var_dump($value);
        echo "<br>";
    }

    public function __get(string $name): mixed {
        echo "get name: {$name} <br>";
        return "hogera";
    }
}

//
$obj = new Hoge();
$obj->num = 123;
var_dump($obj->test);
//
Hoge::$num = 123; // Fatal error: Uncaught Error: Access to undeclared static property
