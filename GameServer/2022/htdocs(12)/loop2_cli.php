<?php  // loop2_cli.php
//  php loop2_cli.php
require_once(__DIR__ . "/PC2.php");

// コンソール以外からの起動なら、プログラム終了
if (php_sapi_name() !== "cli") {
    exit();
}

// PCが死んだらループ終了
$pc = new PC();
while(true) {
    // 入力を受け取る
    /*
    echo "==> ";
    $s = rtrim(fgets(STDIN));
    var_dump($s);
    */

    // PCが死んだらループ終了
    $d = random_int(1, 10);
    echo "{$d}のダメージ！！ \n";
    $pc->damage($d);
    if (false === $pc->isAlive()) {
        break;
    }
}

// 終了
$pc->print();
echo "\nfin \n";

