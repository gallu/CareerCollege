<?php   // func5.php

function Hoge() {
    //echo "num is {$num} <br>";
    echo "num is {$GLOBALS['num']} <br>"; // 使うな

    global $num; // もっともっと絶対に使うな！！！
    $local_k = $num * 10;
}

$num = 10;
Hoge();
var_dump($local_k); // Warning: Undefined variable $local_k in 
