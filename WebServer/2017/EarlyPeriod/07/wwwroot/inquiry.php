<?php
// inquiry.php
//
require_once( __DIR__ . '/init.php');

// 確認
//var_dump($_SESSION);

// 入力内容を取得
//$input = $_SESSION['buffer']['input'] ?? []; // PHP 7.0以降ならこっち
if (true === isset($_SESSION['buffer']['input'])) {
    $input = $_SESSION['buffer']['input'];
} else {
    //$input = []; // PHP 5.4以降ならこっちでもよい
    $input = array();
}

// エラー内容を取得
//$error_detail = $_SESSION['buffer']['error_detail'] ?? [];
if (true === isset($_SESSION['buffer']['error_detail'])) {
    $error_detail = $_SESSION['buffer']['error_detail'];
} else {
    //$error_detail = []; // PHP 5.4以降ならこっちでもよい
    $error_detail = array();
}

// セッションのバッファを消す
unset($_SESSION['buffer']);

// CSRFトークンを作成
// XXX PHP7前提
$csrf_token = hash('sha512', random_bytes(128));
//var_dump($csrf_token);

// CSRFトークンは10個まで(で後で追加するので、ここでは4個以下に)
while (10 <= count(@$_SESSION['csrf_token'])) {
    array_shift($_SESSION['csrf_token']);
}
// CSRFトークンをSESSIONに入れておく:時間付き
$_SESSION['csrf_token'][$csrf_token] = time();

// テンプレートに値を渡す
$smarty_obj->assign('input',  $input); // 入力値全般
$smarty_obj->assign('csrf_token', $csrf_token); // CSRFトークン
$smarty_obj->assign('error_detail_count', count($error_detail));
$smarty_obj->assign('error_detail',  $error_detail); // エラー全般

// テンプレートを指定して出力
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('inquiry.tpl');
