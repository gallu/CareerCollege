<?php  // serialize1.php
declare(strict_types=1);

class Hoge {
    public function __construct(
        private int $num,
        private string $name,
    ){}
}
//
$obj = new Hoge(123, "hogera");
var_dump($obj);
echo "<br>";

$s = serialize($obj);
var_dump($s);
echo "<br>";

$obj2 = unserialize($s);
var_dump($obj2);
echo "<br>";
