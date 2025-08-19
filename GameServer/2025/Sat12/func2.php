<?php  // func2.php

// 引数省略のケース
function d6() {
    $r = random_int(1, 6);
    return $r;
}
//
$ret = d6();
var_dump($ret);
