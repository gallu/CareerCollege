<?php  // function3.php

// 値を二倍にする関数の宣言
function doubleValue($i) {
    $i = $i * 2;
    echo "in doubleValue i is {$i}<br>";
}

// 関数を使う
$num = 10;
var_dump($num);

doubleValue($num);
var_dump($num);
