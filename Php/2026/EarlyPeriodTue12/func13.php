<?php  // func13.php
declare(strict_types=1);

function hoge($i) {
    echo "hoge i is {$i} <br>";
}

//
hoge(1);

// 可変関数
$func_name = "hoge";
$func_name(2);
var_dump($func_name);
echo "<br>";

// 無名関数(anonymous function)
$func = function($i) {
    echo "hoge i is {$i} <br>";
};
$func(3);
var_dump($func);
echo "<br>";

