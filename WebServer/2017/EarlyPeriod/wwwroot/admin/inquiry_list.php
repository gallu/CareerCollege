<?php
// admin/inquiry_list.php
require_once( __DIR__ . '/init_auth.php');

// 一覧をDBから取得して
// DBハンドルを取得
$dbh = get_dbh();
// プリペアドステートメント
$sql = 'SELECT * FROM inquirys
  ORDER BY inquiry_id DESC;';
$pre = $dbh->prepare($sql);
// XXX 今回はバインドなし
// 実行
$r = $pre->execute(); // XXX エラーチェック省略

// データを取得
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
//var_dump($data);

// テンプレートにデータを渡して
$smarty_obj->assign('inquiry_list', $data);

// 表示する
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/inquiry_list.tpl');
