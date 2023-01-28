<?php  // ArrayObject.php

$awk = [1, 2, 3];
$obj_awk = new ArrayObject([1, 2, 3]);
var_dump($awk);
var_dump($obj_awk);

// foreach
foreach($awk as $k => $v) {
    echo "{$k}: {$v}\n";
}
foreach($obj_awk as $k => $v) {
    echo "{$k}: {$v}\n";
}

//
$awk[] = 10;
$obj_awk[] = 10;

//
echo "{$awk[0]}\n";
echo "{$obj_awk[0]}\n";

// ˆá‚¢
$awk2 = $awk;
$obj_awk2 = $obj_awk;
//
$awk[] = 999;
var_dump($awk2);
//
$obj_awk[] = 999;
var_dump($obj_awk2);





