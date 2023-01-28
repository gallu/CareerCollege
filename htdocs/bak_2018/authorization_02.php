<?php  // authorization_02.php

// アプリ等で使いやすい方法
$sid = hash('sha512', random_bytes(128));
var_dump($sid);

$sid = hash('sha256', random_bytes(128));
var_dump($sid);

