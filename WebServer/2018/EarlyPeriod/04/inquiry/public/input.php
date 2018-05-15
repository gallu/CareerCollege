<?php // input.php
ob_start();
session_start();

// 入力値の取得
/*
// いろいろな「入力値の取得方法」
$name = (string)@$_POST['name'];
$name = @$_POST['name'] ?? ''; // PHP7以降
$name = (string)filter_input(INPUT_POST, 'name');
if (true === isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = '';
}
*/
/*
// これで「ダメ」とは言わないが……
$name = @$_POST['name'] ?? '';
$address = @$_POST['address'] ?? '';
$body = @$_POST['body'] ?? '';
*/
//
$params = ['name', 'address', 'body'];
$input_data = []; // 入力値保存用
foreach($params as $p) {
    $input_data[$p] = @$_POST[$p] ?? '';
}
//var_dump($input_data);

// validate
$error_flg = [];

// 「address と body」は必須入力
if ('' === $input_data['address']) {
    // エラー
    $error_flg['address_empty'] = 1;
}
if ('' === $input_data['body']) {
    // エラー
    $error_flg['body_empty'] = 1;
}
//
if ([] !== $error_flg) {
    // form.phpにデータを渡す
    $_SESSION['input'] = $input_data;
    $_SESSION['error'] = $error_flg;

    // エラーが発生してる！！
    header('Location: ./form.php');
    exit;
}

// DBへのINSERT：来週

//
exit;
header('Location: fin.html');

