<?php   // func6.php

function hoge() {
    //$local_k = $global_num * 99;
    $local_k = $GLOBALS['global_num'] * 99; // やめとけ
var_dump($local_k);

    global $global_num; // 死んでも殺してもやめとけ
    $local_k = $global_num * 99;
var_dump($local_k);
}

$global_num = 10;
hoge();
//var_dump($local_k);
