<?php  // func2.php

function hoge() {
    //global $dbh;

    // DBに接続がなかったら接続をする
    if ($dbh = null) {
        接続処理をする
    }
    // 以降別の処理

}
//
$dbh = 'db handle';
hoge();
