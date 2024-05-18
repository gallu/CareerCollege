<?php  // func13.php
declare(strict_types=1);

function hoge() {
    echo __FUNCTION__ , "<br>";
}

hoge();

// 可変関数
$fn = "hoge";
$fn();
var_dump($fn);
echo "<br>";

// 無名関数
$fn = function() {
    echo __FUNCTION__ , "<br>";
};
$fn();
var_dump($fn);
echo "<br>";

