<?php  // calendar1.php
require_once  __DIR__ . "/zeller.php";

$y = (int)date("Y");
$m = (int)date("n");
$d = (int)date("j");

echo "{$y}年 {$m}月 のカレンダー<br>";

for ($i = 0; $i < 7; ++$i) {
    $w = zeller($y, $m, $d);
    
    echo "{$d}({$w}) <br>";
    $d ++; // 次の日にする
}
