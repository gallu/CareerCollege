<?php  // func10.php
declare(strict_types=1);

function hoge(int $num) {
    echo "hoge {$num} <br> \n";
}
//
hoge(111);

// 動的関数
$fn = "hoge";
$fn(222);

// 無名関数
$anfn = function(int $num) {
    echo "anonymouse {$num} <br> \n";
};
$anfn(333);
echo "<br> \n";

var_dump($fn, $anfn);


