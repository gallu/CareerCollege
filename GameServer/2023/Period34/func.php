<?php  // func.php

function hoge($num)
{
    $ret = $num * 2;
    return $ret;
}

var_dump(hoge(10));
var_dump(hoge(99));
