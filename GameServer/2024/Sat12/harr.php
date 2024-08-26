<?php  // harr.php

// 連想配列 / hash配列
$harr = [
    "1st" => 111,
    "2nd" => "222",
    "3rd" => 333,
];
print_r($harr);
var_dump($harr);

// 1つの要素にアクセス
echo $harr["3rd"];
