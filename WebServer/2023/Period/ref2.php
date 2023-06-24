<?php  // ref2.php
declare(strict_types=1);

$arr = [1, 2];
var_dump($arr);

$arr_2 = $arr;
$arr_2[] = 3;
var_dump($arr, $arr_2);


class Hoge {
    public int $num = 0;
}

$obj = new Hoge();
var_dump($obj);

$obj_2 = $obj;
$obj_2->num = 999;
var_dump($obj, $obj_2);

$obj_3 = clone $obj;
$obj_3->num = 123;
var_dump($obj, $obj_3);

