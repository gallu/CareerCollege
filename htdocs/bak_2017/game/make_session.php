<?php
//make_session.php
// 認証のタイミングで「セッションID」払い出し

// XXX認証処理をして、認証OKだった
// セッションID作って
$sid = hash('sha256', random_bytes(128));
var_dump($sid);
$sid = base64_encode(
         hash('sha256', random_bytes(128), true)
       );
var_dump($sid);

// 作ったセッションIDをDBに格納して
// XXXXXX

// 作ったセッションIDを返却する

