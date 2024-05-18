<?php  // func5.php
declare(strict_types=1);

// 値渡しの確認
function hoge(int $num) {
    $num += 100;
    echo "in func: {$num} <br>";
}

$num = 123;
echo "out func(1): {$num}<br>";

hoge($num);
echo "out func(2): {$num}<br>";
