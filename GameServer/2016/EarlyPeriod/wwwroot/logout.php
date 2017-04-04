<?php

// セッション開始
session_start();

// ヘッダの出力
header("Content-Type: application/json; charset=utf-8");

// ログイン情報を削除
unset($_SESSION['user']);

// 正常用出力
$ret = array(
  'status' => 'ok',
);
echo json_encode($ret);
