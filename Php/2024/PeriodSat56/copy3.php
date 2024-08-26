<?php  // copy3.php
declare(strict_types=1);

class Hoge {
    public function __clone(): void {
        echo "call __clone() \n";
        var_dump($this);
        echo "\n";
    }
}

$obj = new Hoge();
var_dump($obj);
echo "\n";

$obj2 = clone $obj;
var_dump($obj, $obj2);
echo "\n";
