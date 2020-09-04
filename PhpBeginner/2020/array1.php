<?php   // array1.php
//  http://dev2.m-fr.net/XXXX/array1.php

// 改行を見やすくする
echo "<pre>\n";

// 古代のやり方
$array_old = array(1, 2, 3, 4, 5);
var_dump($array_old);

// 近代のやり方
$array_new = [11, 22, 33, 44, 55];
var_dump($array_new);
var_dump($array_new[0]);
var_dump($array_new[2]);
var_dump($array_new[10]);
