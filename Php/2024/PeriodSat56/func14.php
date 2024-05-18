<?php  // func14.php
declare(strict_types=1);

function hoge() {
    $fn = function(int $num) {
        // echo __FUNCTION__ , "<br>";
        $k = $num * 2;
        echo "k is {$k} <br>";
    };
    $fn(2);
    $fn(num: 4);
}

hoge();
