<?php

// ヘッダの出力
header("Content-Type: application/json; charset=utf-8");

// エラー用出力
$error_ret = array(
  'status' => 'error',
  'msg' => '非ログイン状態です',
);

// requestヘッダからのuuidの取得
$uuid = (string)@$_SERVER['HTTP_X_AUTH'];

// uuidが未指定なら非ログイン状態
if ( '' === $uuid) {
  echo json_encode($error_ret);
  return ;
}

// DBで存在確認
// -------------------
// DBハンドルの取得
require_once('db_handle_get.inc');
$dbh = db_handle_get();
if (NULL === $dbh) {
  $error_ret['msg'] = 'DB接続に不具合が発生しました';
  echo json_encode($error_ret);
  return ;
}

// 「準備された文」を作成
$sql = 'SELECT * FROM users2 WHERE uuid = :uuid;';
$pre = $dbh->prepare($sql);
//var_dump($pre);
//var_dump($dbh->errorInfo());

// プレースホルダに値をバインド
$pre->bindValue(':uuid', $uuid, PDO::PARAM_STR);

// SQLを実行
$r = $pre->execute();
if (false === $r) {
  $error_ret['msg'] = 'データの読み込みに失敗しました';
  echo json_encode($error_ret);
  return ;
}

// ユーザ情報の取得
$row = $pre->fetch(PDO::FETCH_ASSOC);
if (true === empty($row)) {
  $error_ret['msg'] = 'データの読み込みに失敗しました';
  echo json_encode($error_ret);
  return ;
}

// else
$ret = array(
  'status' => 'ok',
  'name' => $row['name'],
);
echo json_encode($ret);

