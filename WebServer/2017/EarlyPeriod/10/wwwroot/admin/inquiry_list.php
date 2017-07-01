<?php
// admin/inquiry_list.php
require_once( __DIR__ . '/init_auth.php');

// 検索ワードを取得する
$find_string = array(); // 検索文字列保存用
//
foreach(['name', 'email', 'birthday_from', 'birthday_to'] as $p) {
    $find_string[$p] = (string)@$_GET[$p];
}
//var_dump($find_string);
// 取得した検索ワードをHTML側で表示する
$smarty_obj->assign('find_string', $find_string);

// 一覧をDBから取得して
// DBハンドルを取得
$dbh = get_dbh();
$bind_data = array();
// プリペアドステートメント
$sql = 'SELECT * FROM inquirys ';
// SQLを動的に追加(不完全)
if ('' !== $find_string['email']) {
    $sql .= ' WHERE email=:email ';
    $bind_data[':email'] = $find_string['email'];
}
// XXX nameの検索(LIKE句)
// XXX birthdayの検索(範囲検索)

// SQLの締め
//$sql = $sql . ' ORDER BY inquiry_id DESC;';
$sql .= ' ORDER BY inquiry_id DESC;';
$pre = $dbh->prepare($sql);

// 値のバインド
foreach($bind_data as $k => $v) {
    $pre->bindValue($k, $v);
}

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
