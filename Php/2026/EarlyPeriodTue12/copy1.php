<?php  // copy1.php
declare(strict_types=1);

class Hoge {
    public int $num;
}

$obj = new Hoge();
$obj->num = 123;
var_dump($obj);
echo "<br>";

$obj2 = $obj;
$obj2->num = 987;
var_dump($obj2);
var_dump($obj);
echo "<br>";

//
$arr = [1, 2];
$arr2 = $arr;
$arr2[] = 3;
var_dump($arr, $arr2);

