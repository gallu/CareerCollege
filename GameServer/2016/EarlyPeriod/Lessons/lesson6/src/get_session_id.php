<?php

// ヘッダの出力
header("Content-Type: application/json; charset=utf-8");

// エラー用出力
$error_ret = array(
  'status' => 'error',
  'msg' => '',
);

// requestヘッダからのuuidの取得
$uuid = (string)@$_POST['uuid'];

// uuidが未指定なら非ログイン状態
if ( '' === $uuid) {
  $error_ret['msg'] = 'uuidが指定されていません';
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

// ここまできたら「有効なuuidが指定されている」ので、セッションIDを発行する
/*
DROP TABLE IF EXISTS user_session;
CREATE TABLE user_session (
  `sid` varbinary(128) NOT NULL COMMENT 'ユーザのゲーム用名前',
  `uuid` varbinary(128) NOT NULL COMMENT 'ユーザを識別するためのID',
  `ttl` datetime NOT NULL COMMENT 'セッション寿命',
  INDEX(`uuid`),
  PRIMARY KEY (`sid`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが1ユーザセッションを意味するテーブル';

*/

// 古いセッションIDがあったら削除
// -----------------------------------
// 「準備された文」を作成
$sql = 'DELETE FROM user_session WHERE uuid = :uuid;';
$pre = $dbh->prepare($sql);
//var_dump($pre);
//var_dump($dbh->errorInfo());
// プレースホルダに値をバインド
$pre->bindValue(':uuid', $uuid, PDO::PARAM_STR);
// SQLを実行
$pre->execute(); // XXX エラーチェック特になし

// セッションID用の情報を作成
if(function_exists('random_bytes')) {
  $rand = random_bytes(128);
} else if (is_readable('/dev/urandom')) {
  $rand = file_get_contents('/dev/urandom', false, NULL, 0, 128);
}
$sid = base64_encode(hash('sha512', $rand, true));
$sid = substr($sid, 0, 86);
//
$ttl = time() + 86400; // 有効期限１日
$ttl_string = date('Y-m-d H:i:s', $ttl);

// セッションIDを発行
// -----------------------------------
$sql = 'INSERT INTO user_session(sid, uuid, ttl) VALUES(:sid, :uuid, :ttl);';
$pre = $dbh->prepare($sql);
//var_dump($pre);
//var_dump($dbh->errorInfo());
// プレースホルダに値をバインド
$pre->bindValue(':sid', $sid, PDO::PARAM_STR);
$pre->bindValue(':uuid', $uuid, PDO::PARAM_STR);
$pre->bindValue(':ttl', $ttl_string, PDO::PARAM_STR);
// SQLを実行
$r = $pre->execute();
if (false === $r) {
//var_dump($dbh->errorInfo());
  $error_ret['msg'] = 'セッションの作成に失敗しました';
  echo json_encode($error_ret);
  return ;
}

$ret = array(
  'status' => 'ok',
  'sid' => $sid,
  'ttl' => $ttl,
  'ttl_string' => $ttl_string, // JavaScript表示用。本来は不用
);
echo json_encode($ret);

