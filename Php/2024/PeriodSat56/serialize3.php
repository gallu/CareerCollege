<?php // serialize3.php
declare(strict_types=1);

class Hoge {
    public int $num;

    public function __sleep(): array {
        echo "call __sleep() \n\n";
        return ['num'];
    }

    public function __wakeup(): void {
        echo "call __wakeup() \n\n";
    }
}

$obj = new Hoge();
$obj->num = 123;
var_dump($obj);
echo "\n";

$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);
echo "\n";

