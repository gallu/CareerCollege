<?php  // sapmle_download2.php

// XXX なにがしかの処理が多分きっとある: 認証とか

$fn = $_GET['fn'] ?? "(ファイル名未指定)";
// var_dump($fn);

$fobj = new SplFileInfo($fn);
$ex = $fobj->getExtension();
// var_dump($ex);

// (第一種)whiteリスト
// パストラバーサル(ディレクトリトラバーサル)対策
$white_list = [
    "sample.xlsx" => true,
];

if (false === isset($white_list[$fn])) {
    echo "{$fn} は正しくないファイル名です\n";
    exit;
}
// echo "許可されたファイル名です\n";

// 拡張子単位でのCopntent-Type
$cType = [
    'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
];

header("Content-Type: {$cType[$ex]}");
header("Content-Disposition: attachment; filename={$fn}");

echo file_get_contents( __DIR__ . "/{$fn}");
