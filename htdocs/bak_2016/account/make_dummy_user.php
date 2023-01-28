<?php
/*
 * make_dummy_user.php
 */

//exit;

$pass = 'test'; // ダミーユーザのログイン用パスワード

// hash作成
$h_pass = password_hash($pass, PASSWORD_DEFAULT);

var_dump($h_pass);
