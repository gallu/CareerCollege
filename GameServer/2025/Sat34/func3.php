<?php  // func3.php

function hoge() {
    $local_num = 123;

    var_dump($global_num); // Warning: Undefined variable 
    var_dump($local_num);
}

$global_num = 987;
var_dump($global_num);
var_dump($local_num); // Warning: Undefined variable 

hoge();
