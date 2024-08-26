<?php  // str3.php

$str = "abcdefg";
// $str = "あいうえお";
echo "{$str} <br>";

echo $str[0] , "<br>";

$len = strlen($str);
var_dump($len);
echo "<br>";

// 線形検索
for ($i = 0; $i < $len; ++$i) {
    $c = $str[$i];
    echo "{$c} <br>";
}
