<?php   // func5.php
declare(strict_types=1);

function hoge() {
    echo __METHOD__ , "<br>\n";
}

hoge();

// 可変関数
$str = "hoge";
$str();
var_dump($str);
echo "<br>\n";

// 無名関数
$func = function() {
    echo "??? func <br>\n";
};
$func();
var_dump($func);
