<?php  // magic1.php
declare(strict_types=1);

class Hoge {
    public function __call(string $name, array $arguments) {
        echo "func: {$name} <br>";
        var_dump($arguments);
        echo "<br>";
    }
    public static function __callStatic(string $name, array $arguments) {
        echo "static func: {$name} <br>";
        var_dump($arguments);
        echo "<br>";
    }
}

//
$obj = new Hoge();
$obj->test(1, "2nd");
$obj->test2();
//
Hoge::test(1, 2, 3);

