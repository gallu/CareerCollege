<?php

// セッション開始
session_start();

// ヘッダの出力
header("Content-Type: application/json; charset=utf-8");

// エラー用出力
$error_ret = array(
  'status' => 'error',
  'msg' => '',
);

// IDとパスワードを取得
$id = (string)@$_POST['id'];
$pw = (string)@$_POST['pw'];

// 簡単なvalidate(必須チェック)
if ( ('' === $id)||('' === $pw) ) {
  $error_ret['msg'] = "IDもしくはパスワードに未入力があります\n";
  echo json_encode($error_ret);
  return ;
}


// DBからuser情報を取り出し
// -------------------------------
// DBハンドルの取得
require_once('db_handle_get.inc');
$dbh = db_handle_get();
if (NULL === $dbh) {
  $error_ret['msg'] = 'DB接続に不具合が発生しました';
  echo json_encode($error_ret);
  return ;
}

// 「準備された文」を作成
$sql = 'SELECT * FROM users WHERE user_id = :user_id;';
$pre = $dbh->prepare($sql);
//var_dump($pre);
//var_dump($dbh->errorInfo());

// プレースホルダに値をバインド
$pre->bindValue(':user_id', $id, PDO::PARAM_STR);

// ログイン判定用のフラグを準備
$login_flg = false;
// SQLを実行
$r = $pre->execute();
if (true === $r) {
  // ユーザ情報の取得
  $row = $pre->fetch(PDO::FETCH_ASSOC);
//var_dump($row);

  // パスワードの突き合わせ
  $login_flg = password_verify($pw, $row['password']);
}

// login_flgがfalse(そもそもIDがDB上にない、またはpassword_verifyの結果がfalse)ならNG
if (false === $login_flg) {
  $error_ret['msg'] = 'IDまたはパスワードに誤りがあります';
  echo json_encode($error_ret);
  return ;
}

// OKならログインさせる
session_regenerate_id(true); // PHP固有のセキュリティ対策：セッションアダプション対策
$_SESSION['user']['id'] = $row['user_id'];
$_SESSION['user']['name'] = $row['name']; // 名前はよく使うと思われるので、入れておく

// 正常用出力
$ret = array(
  'status' => 'ok',
);
echo json_encode($ret);
