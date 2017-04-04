<?php

// echo 'test';
//var_dump($_POST);

// ヘッダの出力
header("Content-Type: application/json; charset=utf-8");

// エラー用出力
$error_ret = array(
  'status' => 'error',
  'msg' => '',
);

// パラメタの取得
$name = (string)@$_POST['name'];
$id   = (string)@$_POST['id'];
$pw   = (string)@$_POST['pw'];
$pw2  = (string)@$_POST['pw2'];

// 簡単なvalidate(必須チェック)
if ( ('' === $name)||('' === $id)||('' === $pw)||('' === $pw2) ) {
  $error_ret['msg'] .= "名前、IDもしくはパスワードに未入力があります\n";
}
// 名前の長さ確認(64文字まで：なんとなく！！)
if (64 < strlen($name)) {
  $error_ret['msg'] .= "名前が長すぎます。64文字以内でお願いいたします\n";
  echo json_encode($error_ret);
  return ;
}
// IDの長さ確認(64文字まで：なんとなく！！)
if (64 < strlen($id)) {
  $error_ret['msg'] .= "IDが長すぎます。64文字以内でお願いいたします\n";
  echo json_encode($error_ret);
  return ;
}
// パスワードの長さ確認(72文字まで：password_hash()関数の制限)
if (72 < strlen($pw)) {
  $error_ret['msg'] .= "パスワードが長すぎます。72文字以内でお願いいたします\n";
  echo json_encode($error_ret);
  return ;
}
// パスワード再入力との比較
if ($pw !== $pw2) {
  $error_ret['msg'] .= "パスワードとパスワード再度入力、が一致しません\n";
}

// エラーなら突き返す
if ('' !== $error_ret['msg']) {
  echo json_encode($error_ret);
  return ;
}

// XXX ここまで来たらとりあえずvalidateは(ほぼ)OK：「IDの重複」のみ未確認

// DBへの登録(重複チェック込み）
/*
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  `user_id` varbinary(128) NOT NULL COMMENT 'ユーザを識別するためのID',
  `name` varbinary(128) NOT NULL COMMENT 'ユーザのゲーム用名前',
  `password` varbinary(128) NOT NULL COMMENT 'パスワードをハッシュ化した文字列',
  `created` datetime NOT NULL COMMENT 'ユーザ作成日',
  PRIMARY KEY (`user_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが1ユーザを意味するテーブル';

*/
// ----------------
// DBハンドルの取得
require_once('db_handle_get.inc');
$dbh = db_handle_get();
if (NULL === $dbh) {
  $error_ret['msg'] = 'DB接続に不具合が発生しました';
  echo json_encode($error_ret);
  return ;
}

// 「準備された文」を作成
$sql = 'INSERT INTO users(user_id, name, password, created) VALUES(:user_id, :name, :password, now());';
$pre = $dbh->prepare($sql);
//var_dump($pre);
//var_dump($dbh->errorInfo());

// プレースホルダに値をバインド
$pre->bindValue(':user_id', $id, PDO::PARAM_STR);
$pre->bindValue(':name', $name, PDO::PARAM_STR);
$pre->bindValue(':password', password_hash($pw, PASSWORD_DEFAULT), PDO::PARAM_STR); // パスワードは平文では保存しない！！

// SQLを実行
$r = $pre->execute();
if (false === $r) {
  $awk = $pre->errorInfo();
  if (false !== strpos($awk[2], "Duplicate entry 'id' for key 'PRIMARY'")) {
    $error_ret['msg'] = 'IDが重複しています！！';
  } else {
    //$error_ret['msg'] = $awk[2]; // デバッグ用。本番ではこーゆー文字列は出さない！！
    $error_ret['msg'] = '何らかの事情でDBにinsert出来ませんでした';
  }
  echo json_encode($error_ret);
  return ;
}

// 正常用出力
$ret = array(
  'status' => 'ok',
);
echo json_encode($ret);
