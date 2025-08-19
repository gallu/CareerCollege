<?php  // magic1.php

class Hoge {
    public function __call(string $name, array $arguments) {
        echo __METHOD__ , "<br>";
        var_dump($name, $arguments);
        echo "<br>";
    }
    public static function __callStatic(string $name, array $arguments) {
        echo __METHOD__ , "<br>";
        var_dump($name, $arguments);
        echo "<br>";
    }
}

$obj = new Hoge();
$obj->test();
$obj->test2(1, "2nd", 3.14);

Hoge::test();
