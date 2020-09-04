<?php  // array3.php

echo "<pre>\n";
$array = [1, 2, 3, 4, 5, 6, 7];
$count = count($array);
var_dump($count);
//
var_dump($array[0]);
var_dump($array[ $count - 1 ]); // 最後の要素の取り方

