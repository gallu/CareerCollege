<?php   // func4.php
declare(strict_types=1);

function add($num) {
    $num += 100;
    var_dump($num);
}

$num = 10;
add($num);
var_dump($num);


/*
function add($local_num) {
    $local_num += 100;
    var_dump($local_num);
}

$global_num = 10;
add($global_num);
var_dump($global_num);
*/
