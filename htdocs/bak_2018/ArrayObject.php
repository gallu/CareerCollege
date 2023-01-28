<?php  // ArrayObject.php

//$awk = [1,2,3,4,5];
$awk = new ArrayObject([1,2,3,4,5]);
$awk[] = 10;
var_dump($awk);
var_dump($awk[1]);

//
function hoge($awk) {
    $awk[] = 10;
}
//
$awk_array = [];
hoge($awk_array);
var_dump('awk_array', $awk_array);
//
$awk_obj = new ArrayObject();
hoge($awk_obj);
var_dump('awk_obj', $awk_obj);








