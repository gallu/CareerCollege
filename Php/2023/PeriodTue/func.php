<?php  // func.php

function hogeFunc($num, $str) {
    echo $str , "<br>";
    $ret = $num * 2;
    
    return $ret;
}

$r = hogeFunc(10, 'abc');
var_dump($r);
