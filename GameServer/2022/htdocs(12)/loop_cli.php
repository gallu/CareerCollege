<?php  // loop_cli.php
// php loop_cli.php

// コンソール以外からの起動なら、プログラム終了
if (php_sapi_name() !== "cli") {
    exit();
}

// ５回入力したらループ終了
$count = 0;
while(true) {
    // 入力を受け取る
    echo "==> ";
    $s = rtrim(fgets(STDIN));
    var_dump($s);

    // ５回入力したらループ終了
    $count ++;
    if ($count >= 5) {
        break;
    }
}

// 終了
echo "fin \n";