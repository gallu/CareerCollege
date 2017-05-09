<?php
// inquiry_fin.php
//
ob_start();
session_start();

// 入力された情報を取得
/*
$email = (string)@$_POST['email'];
$email = (string)filter_input(INPUT_POST, 'email');
*/
$params = array(
    'email', 'name', 'birthday', 'body'
);
$input_data = array();
foreach($params  as  $p) {
    $input_data[$p] = (string)@$_POST[$p];
}
var_dump($input_data);

// validate(情報は正しい？)
$error_detail = array(); // エラー情報格納用変数

// 必須チェック
$must_params = array('email', 'body');
foreach($must_params  as  $p) {
    if ('' === $input_data[$p]) {
        // エラー処理
        $error_detail["error_must_{$p}"] = true;
    }
}

// 型チェック：email
// XXX RFC非準拠のメアドはしらん！！
if (false === filter_var($input_data['email'], FILTER_VALIDATE_EMAIL)) {
    // エラー処理
    $error_detail["error_format_email"] = true;
}

// 型チェック：日付
if ('' !== $input_data['birthday']) {
    if (false === strtotime($input_data['birthday'])) {
        // エラー処理
        $error_detail["error_format_birthday"] = true;
    }
}

// エラー判定
if (array() !== $error_detail) {
    // エラー内容をセッションに保持する
    $_SESSION['buffer']['error_detail'] = $error_detail;
    // 入力情報をセッションに保持する
    $_SESSION['buffer']['input'] = $input_data;
//var_dump($error_detail);
    // echo 'エラーがあったらしい！！';
    // 入力ページに突き返す
    header('Location: ./inquiry.php');
    exit;
}
// ダミー
echo 'データのvalidateはOKでした！！';

// 入力された情報をDBにinsert

// 「ありがとう」Pageの出力

