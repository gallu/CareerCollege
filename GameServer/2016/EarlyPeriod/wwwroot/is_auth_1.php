<?php

// セッション開始
session_start();

// ヘッダの出力
header("Content-Type: application/json; charset=utf-8");

// セッションにログイン情報(ID)が存在しない場合
if ( (false === isset($_SESSION['user']['id']))||('' === $_SESSION['user']['id']) ) {
  // エラー用出力
  $error_ret = array(
    'status' => 'error',
    'msg' => '非ログイン状態です',
  );
  echo json_encode($error_ret);
  return ;
}

// else
$ret = array(
  'status' => 'ok',
);
echo json_encode($ret);

