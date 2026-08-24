<?php  // copy2.php
declare(strict_types=1);

class Hoge {
    public int $num;
}

$obj = new Hoge();
$obj->num = 123;
var_dump($obj);
echo "<br>";

$obj2 = clone $obj;
$obj2->num = 987;
var_dump($obj2);
var_dump($obj);
echo "<br>";
