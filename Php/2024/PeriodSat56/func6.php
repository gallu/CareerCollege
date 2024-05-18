<?php  // func6.php
declare(strict_types=1);

// 変数のスコープの確認
function hoge() {
    $local_num = 987;
    var_dump($global_num);
    var_dump($local_num);
}

$global_num = 123;
var_dump($global_num);
var_dump($local_num);

hoge();

