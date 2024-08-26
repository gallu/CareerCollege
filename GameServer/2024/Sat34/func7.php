<?php  // func7.php
declare(strict_types=1);

function hoge(int $num, string $str) {
    var_dump($num, $str);
}
//
hoge(123, "str");
echo "<br>";

// hoge(456); // Fatal error: Uncaught ArgumentCountError: Too few arguments to function hoge()
// echo "<br>";

function foo(int $num, string $str = "default") {
    var_dump($num, $str);
}
//
foo(123, "str");
echo "<br>";

foo(456);
echo "<br>";
