<?php  // name.php

function func(int $num, string $str, float $f, bool $b) {
    var_dump($num, $str, $f, $b);
}

func(123, 'str', 3.14, false);

// 名前付き引数
func(b: true, str: 'hoge', num: 777, f: 1.4142);
