<?php

/*
 * 共通認証処理
 */

// エラー用出力
$error_ret = array(
  'status' => 'error',
  'msg' => '非ログイン状態です',
);

// requestヘッダからのuuidの取得
$uuid = (string)@$_SERVER['HTTP_X_AUTH'];
//$uuid = 'cf88524f-4294-42bf-869c-8557704f6b7c'; // PHP単体テスト用

// uuidが未指定なら非ログイン状態
if ( '' === $uuid) {
  echo json_encode($error_ret);
  exit ;
}

// DBで存在確認
// -------------------
// DBハンドルの取得
require_once('db_handle_get.inc');
$dbh = db_handle_get();
if (NULL === $dbh) {
  $error_ret['msg'] = 'DB接続に不具合が発生しました';
  echo json_encode($error_ret);
  exit ;
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
  $error_ret['msg'] = '認証情報エラー';
  echo json_encode($error_ret);
  exit ;
}

// ユーザ情報の取得
$row = $pre->fetch(PDO::FETCH_ASSOC);
if (true === empty($row)) {
  $error_ret['msg'] = '認証情報エラー';
  echo json_encode($error_ret);
  exit ;
}

//
$name = $row['name'];
$user_id = $row['user_id'];

