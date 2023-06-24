<?php   // func3.php

// 可変長引数
function hoge(...$params) {
    var_dump($params);
}

hoge(1);
hoge(1, 2, 3);
