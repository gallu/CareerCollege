<?php
/*
 * ログイン処理
 */

require_once('init.php');

// 「入力されたIDとパスワード」を取得
$id = (string)@$_POST['id'];
$pw = (string)@$_POST['pw'];
//
if ( ('' === $id)or('' === $pw) ) {
    header('Location: ./index.php');
    return ;
}
//echo 'id pass ok';

// 「DB内のIDとパスワード」を取得
// 「準備された文」を用意
$sql = 'SELECT * FROM users WHERE user_id = :user_id;';
$pre = $dbh->prepare($sql);
// プレースホルダに値をバインド
$pre->bindValue(':user_id', $id);
// SQL文を実行
$r = $pre->execute();
//
$row = $pre->fetch(PDO::FETCH_ASSOC);
//var_dump($row);
// IDが存在しなければ突き返す
if (false === $row) {
    header('Location: ./index.php');
    return ;
}

// 「DB内のIDとパスワード」と「入力されたIDとパスワード」を比較
if (false === password_verify($pw, $row['password'])) {
    header('Location: ./index.php');
    return ;
}

// XXX ここまで来たら「正しくIDとパスワードが入力された」！！

// IDとパスワードがOKなら
// 「ログイン状態」にして
session_regenerate_id(true); // セキュリティ対策
$_SESSION['user_id'] = $id; // ログイン状態にする

// top pageに飛ばす
header('Location: ./top.php');

// 出力バッファを開放
ob_end_flush();
