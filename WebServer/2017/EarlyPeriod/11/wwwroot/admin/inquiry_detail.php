<?php
// admin/inquiry_detail.php
require_once( __DIR__ . '/init_auth.php');

// 「取得したい問い合わせ番号」を把握する
$inquiry_id = (string)@$_GET['inquiry_id'];
//$inquiry_id = $_GET['inquiry_id'] ?? ''; // PHP7以降
//var_dump($inquiry_id);

// ごく軽くvalidate
if ('' === $inquiry_id) {
    // XXX listにすっ飛ばす
    header('Location: ./inquiry_list.php');
    exit;
}

// DBから「問い合わせの詳細情報」を取得する

// DBハンドルを取得
$dbh = get_dbh();
// プリペアドステートメントを作成
$sql = 'SELECT * FROM inquirys
         WHERE inquiry_id = :inquiry_id';
$pre = $dbh->prepare($sql);
// 値をバインド
$pre->bindValue(':inquiry_id', $inquiry_id);
// SQLを実行
$r = $pre->execute(); // XXX エラーチェック省略
// データを取得
$data = $pre->fetch(PDO::FETCH_ASSOC);

// 軽くエラーチェック
if (false === $data) {
    // XXX listにすっ飛ばす
    header('Location: ./inquiry_list.php');
    exit;
}

// 問い合わせの詳細情報をテンプレートに渡す
$smarty_obj->assign('inquiry_data', $data);

// テンプレートを指定して出力
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/inquiry_detail.tpl');
