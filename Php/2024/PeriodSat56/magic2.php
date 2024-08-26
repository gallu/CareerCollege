<?php  // magic2.php

class Hoge {
    public function __call(string $name, array $arguments): mixed {
        var_dump("call", $name, $arguments);
        return null;
    }

    public static function __callStatic(string $name, array $arguments): mixed {
        var_dump("call static", $name, $arguments);
        return null;
    }
}

$obj = new Hoge();
$obj->noFunc();
$obj->func(1, "2nd", true);

Hoge::func();
