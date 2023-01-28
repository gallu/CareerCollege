<?php   // func5.php

function func() {
    //$local_k = $global_i * 10;

    // XXX 基本、つかうな
    $local_k = $GLOBALS['global_i'] * 10;
    var_dump($local_k);

    // XXX なにがあろうとも絶対に使うな
    global $global_i;
    $local_k = $global_i * 10;
    var_dump($local_k);
}

$global_i = 99;
func();
//var_dump($local_k);
