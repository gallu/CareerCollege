<?php

// 認証付き
require_once('init_auth.php');

// 非アクティブ状態にする
subject_act(0, $dbh);
