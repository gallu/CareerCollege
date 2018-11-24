<?php  // top.php

// 認証付き初期処理
require_once('./init_auth.php');

//var_dump($_SESSION);

?>

<h1>ログイン後Top</h1>
<a href="./logout.php">ログアウト</a>
<hr>
<a href="./draw.php?id=1">無料がちゃ１　を引く</a><br>
<a href="./draw.php?id=2">無料がちゃ２　を引く</a><br>
<a href="./draw.php?id=3">無料がちゃ３　を引く</a><br>
～
<a href="./draw.php?id=11">無料がちゃ11　を引く</a><br>





