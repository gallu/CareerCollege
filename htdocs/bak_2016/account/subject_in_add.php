<?php

//
require_once('init_auth.php');

// CSRFトークンをチェックする
if (false === check_csrf_token()) {
    header('Location: ./subject.php');
    exit;
}

// データを取得する
$payment_subject = (string)@$_POST['payment_subject'];

// validate
if ('' === $payment_subject) {
    header('Location: ./subject.php');
    exit;
}

// データをinsertする
// 「準備された文」を用意する
$sql = 'INSERT INTO subjects(subject_name, type, activation_flg)
             VALUES(:subject_name, :type, :activation_flg);';
$pre = $dbh->prepare($sql);

// プレースホルダに値をバインドする
$pre->bindValue(':subject_name', $payment_subject);
$pre->bindValue(':type', 1);
$pre->bindValue(':activation_flg', 1);

// SQLを実行する
$r = $pre->execute();
if (false == $r) {
    echo 'DB insertエラーです。IDが重複している可能性があります';
    exit;
}

// 一覧ページに戻す
header('Location: ./subject.php');
