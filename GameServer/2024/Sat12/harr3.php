<?php  // harr3.php

$harr = [
    "1st" => 111,
    "2nd" => "222",
    "3rd" => 333,
];

// 要素数のカウント
$count = count($harr);
echo "count is {$count} <br> \n";

// 要素を個別に処理する
foreach ($harr as $k => $v) {
    echo "{$k}: {$v} <br> \n";
}
