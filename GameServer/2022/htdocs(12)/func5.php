<?php   // func5.php

//
function hoge() {
    //$local_k = $global_num * 10;
    // つかうな！！
    $local_k = $GLOBALS["global_num"] * 10;
    
    // これはもう絶対に本当になにがなんでも使うな
    global $global_num;
    $local_k = $global_num * 10;

var_dump($local_k);
}

//
$global_num = 123;
hoge();
//var_dump($local_k);
