<?php  // copy1.php
declare(strict_types=1);

// 配列のcopy
$arr = [1, 2];
$arr2 = $arr;
var_dump($arr, $arr2);
echo "\n";

$arr2[] = 333;
var_dump($arr, $arr2);
echo "\n";

// クラスのcopy(誤り)
$obj = new StdClass();
$obj->hoge = 1;
$obj->foo = 2;
$obj2 = $obj;
var_dump($obj, $obj2);
echo "\n";

$obj2->bar = 333;
var_dump($obj, $obj2);
echo "\n";

// クラスのcopy(正解)
$obj = new StdClass();
$obj->hoge = 1;
$obj->foo = 2;
$obj2 = clone $obj;
var_dump($obj, $obj2);
echo "\n";

$obj2->bar = 333;
var_dump($obj, $obj2);
echo "\n";
