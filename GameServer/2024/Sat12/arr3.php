<?php  // arr3.php

$arr = ["1st", "2nd", "3rd"];

$count = count($arr);
var_dump($count);
echo "<br>";

// あんまやらない
for ($i = 0; $i < $count; ++$i) {
    $e = $arr[$i];
    echo "{$e}, ";
}
echo "<br>";

// 基本、こっち
foreach ($arr as $k => $v) {
    echo "{$v}, ";
}
echo "<br>";
