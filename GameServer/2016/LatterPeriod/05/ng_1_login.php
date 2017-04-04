<?php
// ng_1_login.php

// XXX mysql_connect使うな
$dbh = mysql_connect(...);

// 入力されたIDとパスワードを把握
$id   = $_POST['id'];
$pass = $_POST['pass'];

// XXX SQLは「変数埋め込み」で作っちゃだめ！！
$sql = "SELECT * FROM users WHERE id = '{$id}';";

