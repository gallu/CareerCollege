<?php  // func5.php

// 可変長引数
function hoge(...$params) {
    var_dump($params);
}

hoge(1);
hoge(2, "3rd", 4.44);
