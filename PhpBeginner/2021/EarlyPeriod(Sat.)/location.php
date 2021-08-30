<?php   // location.php

// バッファリングを開始
ob_start();

echo 'sss';

header('Location: https://www.tech.ac.jp/');

// バッファリングを終了する
ob_end_flush();
