<?php  // func11.php
declare(strict_types=1);

function func(int $i, int $j, string $name, bool $flg) {
    var_dump($i, $j, $name, $flg);
    echo "<br>\n";
}

func(12, 34, "name", true);

// func(); // Uncaught ArgumentCountError: Too few arguments to function func()

// func(12, 34, "name", true, 321); // こっちは通る……
// floor(12, 34); // Uncaught ArgumentCountError: floor() expects exactly 1 argument, 2 given

function func2(int $i, int $j, string $name = "unknown", bool $flg = false) {
    var_dump($i, $j, $name, $flg);
    echo "<br>\n";
}

func2(12, 34, "name", true);
func2(12, 34);
