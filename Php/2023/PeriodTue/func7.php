<?php  // func7.php
declare(strict_types=1);

// 可変長引数
function hoge(...$param) {
    var_dump($param);
}
hoge();
hoge(100);
hoge('str', true, null);

// 余った引数は捨てられる
function foo($num) {
    var_dump($num);
}
// foo(); // Too few arguments
foo("str");
foo(10, 20, 30);
