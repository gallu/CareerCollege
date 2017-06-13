<?php
// login.php

// 共通エラー処理
function error() {
    // indexに突き返す
    // XXX あとでエラーメッセージ出すようにする
    header('Location: ./index.php');
    exit;
}

/*
 * 認証(authentication)を行う
 */
//
require_once( __DIR__ . '/../init.php');

//
require_once( __DIR__ . '/../dbh.php');

// 画面入力のIDとパスワードを取得
$id = (string)@$_POST['id'];
$pw = (string)@$_POST['pw'];
//var_dump($id, $pw);exit;

// 軽くvalidate
if ( ('' === $id)||('' === $pw) ) {
    // エラー処理。関数内でexitしてる
    error();
}

/*
 * DB内のIDとパスワードを取得
 */
// DBハンドルを取得
$dbh = get_dbh();
//var_dump($dbh);exit;

// SELECT発行して
// ----
// プリペアドステートメント
$sql = 'SELECT * FROM admin_users
         WHERE admin_user_id=:admin_user_id';
$pre = $dbh->prepare($sql);
// バインド
$pre->bindValue(':admin_user_id', $id);
// 実行
$r = $pre->execute();
//var_dump($r); exit;
if (false === $r) {
    // エラー処理
    // XXX 本当は別Pageとか作る
    echo 'DBでエラーが発生しました';
    echo $pre->errorInfo();
    exit;
}

// データを取得する
$admin_user = $pre->fetch(PDO::FETCH_ASSOC);
//var_dump($admin_user); exit;
if (false === $admin_user) {
    // エラー処理。関数内でexitしてる
    error();
}

// IDとパスワードを比較
$r = password_verify($pw, $admin_user['password']);
//var_dump($r); exit;
if (false === $r) {
    // エラー処理。関数内でexitしてる
    error();
}

// 認証がOKなら
// 認可用の準備をする
session_regenerate_id(true); // 脆弱性対策：順番大事！！
$_SESSION['admin_auth']['admin_user_id'] = $id;

// 「ログイン後の管理画面TopPage」に遷移
header('Location: ./top.php');
