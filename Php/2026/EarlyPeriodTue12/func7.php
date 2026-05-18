<?php  // func7.php

// 変数のスコープの確認

function func() {
    echo "<br>in func<br>";
    $local_i = 10;
    var_dump($local_i);
    var_dump($global_i); // ここはlocalなのでアクセスできない
}

echo "<br>global<br>";
$global_i = 23;
var_dump($global_i);
var_dump($local_i); // ここはglobalなのでアクセスできない

func();
