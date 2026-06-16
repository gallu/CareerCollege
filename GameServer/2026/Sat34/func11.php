<?php  // func11.php
declare(strict_types=1);

function hoge(int $num, string $str): void {
    var_dump($num, $str);
}

//
hoge(123, "name");

// 名前付き引数
hoge(num:456, str:"hogera");
// 引数の順不同
hoge(str:"mugera", num:789);
