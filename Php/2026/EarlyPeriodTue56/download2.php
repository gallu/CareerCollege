<?php  // download2.php

// https://dev2.m-fr.net/アカウント名/download2.php?fn=pdf_test.pdf
// https://dev2.m-fr.net/アカウント名/download2.php?fn=../../../../../../../../../../../../etc/passwd
// https://dev2.m-fr.net/アカウント名/download2.php?fn=pdf_test

$fn = $_GET["fn"] ?? null;
if (null === $fn) {
    // XXX 
    echo "ファイル名未指定error";
    exit;
}

// $fn = __DIR__ . "/{$fn}";
// var_dump($fn);
// var_dump(realpath($fn));

// 第一種ホワイトリスト
$white_list = [
    'pdf_test' => 'pdf_test.pdf',
];
// チェック
if (false === isset($white_list[$fn])) {
    echo "クラックすんなゴルァ";
    exit;
}

// okならファイル名を作る
$fullFn = __DIR__ . "/{$white_list[$fn]}";
var_dump($fullFn);

// なんかきっと処理があるだろう

// ダウンロード
