<?php   // location.php

// キャッシュ開始
ob_start();

// XXX キャッシュしてないとエラーになるので注意
echo 'lll';

// リダイレクト
header('Location: https://www.tech.ac.jp/');


// キャッシュ終了
ob_end_flush();