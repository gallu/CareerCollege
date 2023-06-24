<?php  // func6.php

function hoge() {
    echo "hoge <br>\n";
}

hoge();

$func_str = "hoge";
$func_str();
var_dump($func_str);

$func = function() {
    echo "unknown func<br>\n";
};
$func();
var_dump($func);
