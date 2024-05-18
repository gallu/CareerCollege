<?php  // func1.php

// 関数の定義
function hello() {
    echo "Hello <br>\n";
}
// 関数の呼び出し(call)
hello();
hello();
hello();

// 関数の定義
function world($s) {
    echo "{$s} world. <br>\n";
}
// 関数の呼び出し(call)
world("PHP");
world("nginx");
world("Docker");

//
function add($i, $j) {
    echo "{$i} + {$j} = ??? <br>\n";
}
add(1, 2);
add(123, 456);
