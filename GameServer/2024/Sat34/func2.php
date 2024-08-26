<?php  // func2.php

function hoge() {
    echo "local <br>";
    $local_num = 999;
    var_dump($local_num);
    var_dump($global_num); // Warning: Undefined variable $global_num
}

echo "global <br>";
$global_num = 123;
var_dump($global_num);
var_dump($local_num); // Warning: Undefined variable $local_num

hoge();
