<?php   // func2.php
declare(strict_types=1);

function hoge(string $s = "") {
    echo $s, __METHOD__ , "<br>\n";
}

hoge();
hoge("foo: ");

function foo(int $num, string $str, bool $b = false) {
// function foo(int $num, string $str = 'str', bool $b) {
    var_dump($num, $str, $b);
}
foo(10, "str");

foo(num: 10, str: "str", b: true);
foo(str: "str", b: true, num: 10);
