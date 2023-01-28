<?php   // array.php

// 配列の作成
$array = [11, 22, 33, 44, 55];
var_dump($array);
echo  $array[1];
echo "<br>\n";

// 配列の順次処理
foreach($array as $k => $v) {
    echo "{$k} -> {$v} <br>\n";
}

// 配列の個数(要素数)
$count = count($array);
echo "count is {$count} <br>\n";







