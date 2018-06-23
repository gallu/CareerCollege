<?php  // password.php

// もとになるパスワード
$raw_pass = 'password';

// DBに保存するパスワードの処理方法各種

// 絶対ダメ！！！！！
$saved_pass = $raw_pass; // 生パスワード保存

// 絶対ダメ！！！！！
$saved_pass = md5($raw_pass); // MD5によるハッシュ
var_dump($saved_pass);
$saved_pass = sha1($raw_pass); // SHA-1によるハッシュ
var_dump($saved_pass);

// 絶対ダメ！！！！！
$salt = 'abcdefg'; // 共通のソルト(塩)
$saved_pass = md5($salt . $raw_pass); // 塩付きMD5によるハッシュ
var_dump($saved_pass);
$saved_pass = sha1($salt . $raw_pass); // 塩付きSHA-1によるハッシュ
var_dump($saved_pass);

// まだ弱い
$salt = uniqid(); // 個別のソルト(塩)：uniqidが嬉しくない
$salt = md5(random_bytes(64)); // 個別のソルト(塩)
$saved_pass = md5($salt . $raw_pass); // 塩付きMD5によるハッシュ
var_dump($saved_pass);
$saved_pass = sha1($salt . $raw_pass); // 塩付きSHA-1によるハッシュ
var_dump($saved_pass);

// これならまぁ安全
$salt = md5(random_bytes(64)); // 個別のソルト(塩)
$saved_pass = $raw_pass;
for($i = 0; $i < 1000; ++$i) {
    //$saved_pass = sha1($salt . $saved_pass); // ストレッチ
    $saved_pass = hash('sha512', $salt . $saved_pass); // ストレッチ
}
var_dump($saved_pass);

// これが本命
$saved_pass = password_hash($raw_pass, PASSWORD_DEFAULT);
var_dump($saved_pass);

