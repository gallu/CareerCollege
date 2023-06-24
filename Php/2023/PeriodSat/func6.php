<?php  // func6.php

function hoge() {
    echo "call hoge <br>\n";
}

hoge();

// 可変関数
$func_str = "hoge";
$func_str();

// 無名関数
$func = function() {
    echo "call unknown func <br>\n";
};
$func();

